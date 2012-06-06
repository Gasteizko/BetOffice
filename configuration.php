<?php
// Name of your bet office
$bstConfig_name = "Bet office";

// The title (bold) of your bet office
$bstConfig_main_title = "Bet office";

// subtitle
$bstConfig_sub_title = "Что проиграем, то не пропьём!<br> Проект в работе. Прошу Вас регистрироваться на <a href='http://cheva.kiev.ua:88/account/register'>трекере</a> <br>и замечать все замечания <a href='http://cheva.kiev.ua:88/projects/bet/issues/new'>здесь</a>. (<a href='http://cheva.kiev.ua:88/projects/bet/issues?set_filter=1'>Список здесь</a>)";

// url
$bstConfig_url = "http://bet.cheva.kiev.ua/";

// start credits for your users
$bstConfig_initial_credits = 20000;

// open or close?
$bstConfig_state = "open";

// language of your bet office (english or german)
$bstConfig_lang = "russian";

// how many bets should be displayed on one site
$bstConfig_bet_disp = 10;

// how many bets should be displayed on one site
$bstConfig_trans_disp = 10;

// how many bets should be displayed on one site
$bstConfig_wins_disp = 50;

// how many bets should be displayed on one site
$bstConfig_user_disp = 30;

// how many bets should be displayed on one site
$bstConfig_logs_disp = 20;

// how many bets should be displayed on one site
$bstConfig_cat_disp = 10;

// how many users should be displayed in the highscores
$bstConfigNumHighscore = 10;

// host of your database
define ("HOST","localhost");

// name of your database
define ("DBNAME","bet");

// username for your database
define ("USER","bet");

// password for your database
define ("PASSWORD","bet");

// smtp hostname of your server, you can use localhost if
// it is the same server.
define ("MAIL_HOST", "localhost");

// SMTP username of your server, it is the same like
// PASSWORD if you use the same server
define ("SMTP_USER","");

// SMTP password of your server, it is the same like
// PASSWORD if you use the same server
define ("SMTP_PASSWORD","");

// sender name displayed in the emails sent from the bet-office
define ("SENDER", "Betster");

// email adress of your bet office
define ("CONTACT_MAIL", "cheva@cheva.kiev.ua");

// email signature of your bet office
define ("SIGNATURE", "\n-- \n$bstConfig_main_title - a free bet Office");

// Max. image-file size in bytes
define ("MAX_IMAGE_FILESIZE", 1000000);

// Minimum amount of chars for a category name
define ("MIN_CAT_NAME_LENGTH", 3);

// 
define ("MAX_CAT_NAME_LENGTH", 100);

//
define ("MIN_CAT_DESC_LENGTH", 0);

//
define ("MAX_CAT_DESC_LENGTH", 250);

// Minimum amount of chars for a bet title
define ("MIN_BET_TITLE_LENGTH", 3);

// Maximum amount possibilities for a bet
define ("MAX_BET_POS_AMOUNT", 10);

// default item selected in drop-down list
define ("DEFAULT_POS_AMOUNT", 3);


// don't change this
$bstConfig_version = "1.0.1";
$bstConfig_cat_img_width = 100;

// language loads english language file by default
// if no language selected.
if ($bstConfig_lang == '') {
	$bstConfig_lang = 'english';
}
require_once ( 'language/'.$bstConfig_lang.'.php' );

// Menu Item names
$bstConfig_menu_names = array(_HOME, 
		_HIGHSCORE,
		_ARCHIVE);

// Menu Item links
$bstConfig_menu_links = array ('/index.php',
		'/highscore.php',
		'/archive.php');
?>
