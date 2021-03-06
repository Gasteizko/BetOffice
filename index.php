<?php
/* index.php - BetSter project (22.05.06)
 * Copyright (C) 2006  Harry
 * 
 * This program is free software; you can redistribute it and/or modify it 
 * under the terms of the GNU General Public License as published by the Free 
 * Software Foundation; either version 2 of the License, or (at your option) 
 * any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for 
 * more details.
 * 
 * You should have received a copy of the GNU General Public License along with 
 * this program; if not, write to the Free Software Foundation, Inc., 
 * 51 Franklin St, Fifth Floor, Boston, MA 02110, USA
 */


// includes
require_once("configuration.php");
require_once("functions.inc.php");
require_once("class/User.class.php");
require_once("class/Category.class.php");
require_once("class/Bet.class.php");
require_once("class/Logger.class.php");
require_once("class/Transaction.class.php");
require_once("class/DbMapper.class.php");
require_once("class/Site.class.php");
require_once("class/Session.class.php");
require_once("class/phpmailer.class.php");


// objects
$session = new Session;
$logger = new Logger;
$db_mapper = new DbMapper;
$user = new User("", "", "", "", "", "", "");

if ($session->getState()){
	$username = $session->getUsername();
	$user = $db_mapper->getUser($username);
}

// 1. header
require_once ('modules/header.php');

// 2. catmenu
require_once ('modules/catmenu.php');

// 4. title in the mainlayer
require_once ('modules/title.php');

// 5. mainhtml
$mainhtml = file_get_contents("tpl/home.inc");

if (isset($_GET['cid']) &&
	is_numeric(htmlspecialchars($_GET['cid'])) && 
	(htmlspecialchars($_GET['cid']) > 0)){
		
	$cat_id = htmlspecialchars($_GET['cid']);
	$active_bets = $db_mapper->getActualCategoryBets($cat_id);
}
else {
	$active_bets = $db_mapper->getActiveBets();
}

if (count($active_bets) == 0){
	$mainhtml = replace("MainTitle", _NO_ACTUAL_BETS, $mainhtml);
}
else {
	$mainhtml = replace("MainTitle", _BET_ACTUAL, $mainhtml);
}

$size = $bstConfig_bet_disp;
$bet_num = count($active_bets);

if (is_numeric(htmlspecialchars($_GET['pn']))){
	$page_num = htmlspecialchars($_GET['pn']);
}

$num_pages = ceil($bet_num/$size);

if ($page_num >= $num_pages){
	$page_num = $num_pages;
}
if ($page_num <= 1){
	$page_num = 1;
}    
$start_num = ($page_num * $size) - $size;
$disp_num = ($page_num * $size);   
if ($page_num == 1) {
	$disp_prev_num = 1; 
	$disp_next_num = $page_num+1;
}
elseif ($page_num == $num_pages){
	$disp_next_num = $num_pages;
	$disp_prev_num = $page_num-1;
}
else {
	$disp_next_num = $page_num+1;
	$disp_prev_num = $page_num-1;
}

// Read out the active Bets and replace the templates
for ($i = $start_num; $i <= $disp_num-1; $i++ ){
	if ($i < $bet_num){
		// wich is the right image for the bet
		if ($active_bets[$i]->getBetImage() == 1){
			$dir = "/images/bet/";
			$image_src = $dir.$active_bets[$i]->getBetId().".jpg";
		}
		else {
			$dir = "/images/category/";
			$cat = $db_mapper->getCategory($active_bets[$i]->getCategoryId());
			
			if ($cat->getCategoryImage())
				$image_src = $dir.$active_bets[$i]->getCategoryId().".jpg";
			else
				$image_src = $dir."no_image.gif";


		}
		$bet_html_part .= getTemplatePart("Bets", $mainhtml);
		
		$bet_html_part = replace("ImageSrc", $image_src ,$bet_html_part);
		$bet_html_part = replace("CategoryName", $active_bets[$i]->getCategoryName(), $bet_html_part);
		$bet_html_part = replace("Title", " ".$active_bets[$i]->getBetTitle(), $bet_html_part);
		$bet_html_part = replace("Nr", "Nr. ".$active_bets[$i]->getBetId()." - ", $bet_html_part);
		$bet_html_part = replace("SubTitle", $active_bets[$i]->getSubtitle(), $bet_html_part);
		$bet_html_part = replace("Until", _UNTIL , $bet_html_part);
		$bet_html_part = replace("From", _FROM , $bet_html_part);
		$bet_html_part = replace("End", strftime("%d/%m/%Y - %H:%M:%S" , strtotime($active_bets[$i]->getBetEndTime())), $bet_html_part);
		$possibilities_html_part = "";

		// replaces the ids, names and quotes of the Possibilities
		$k = 0;
		$possibilities_names = $active_bets[$i]->getPossibilitiesNames();
		$possibilities_ids = $active_bets[$i]->getPossibilitiesIds();
		$possibilities_quotes = $active_bets[$i]->getPossibilitiesQuotes();
		$possibilities_ques = $active_bets[$i]->getPossibilitiesQues();
		$possibilities_sums = $active_bets[$i]->getPossibilitiesSums();
		foreach($possibilities_names as $possibility_name){
			$current_possiblility_quote = " - ".$possibilities_quotes[$k];
			$possibilities_html_part .= getTemplatePart("Possibilities", $mainhtml);
			$possibilities_html_part = replace("PossibilityID", $possibilities_ids[$k], $possibilities_html_part);
			$possibilities_html_part = replace("PossibilityName", $possibility_name, $possibilities_html_part);
			$possibilities_html_part = replace("PossibilityQuote", $possibilities_quotes[$k], $possibilities_html_part);
			$possibilities_html_part = replace("PossibilityQue", $possibilities_ques[$k], $possibilities_html_part);
			$possibilities_html_part = replace("PossibilitySum", $possibilities_sums[$k], $possibilities_html_part);
			$possibilities_html_part = replace("BetID", $active_bets[$i]->getBetId()."#", $possibilities_html_part);
			$k++;
		}
		$bet_html_part = replace("Possibilities", $possibilities_html_part, $bet_html_part);
	}
}

$nav_area = getTemplatePart("NavArea",$mainhtml);
if ($num_pages <= 1){
	$nav_area = "";
}
else {
	$nav_area = replace("NextPage", $disp_next_num, $nav_area);
	$nav_area = replace("ActualPage", $page_num, $nav_area);
	$nav_area = replace("LastPage", $num_pages, $nav_area);
	$nav_area = replace("PrevPage", $disp_prev_num, $nav_area);
}
$mainhtml = replace("NavArea", $nav_area, $mainhtml);
// replace the Bets
$mainhtml = replace("Bets", $bet_html_part, $mainhtml);


// 6. usermenu
require_once ('modules/usermenu.php');

// 3. menu
require_once ('modules/menu.php');

// 7. adminmenu
require_once ('modules/adminmenu.php');

// 8. footer
require_once ('modules/footer.php');

// spit it out
print $header."\n".
	$catmenu."\n".
	$menu."\n".
	$xmaintitle."\n".
	$mainhtml."\n".
	$usermenu."\n".
	$adminmenu."\n".
	$footer;
?>
