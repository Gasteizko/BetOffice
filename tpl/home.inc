<div id="contentlayer" class="content-layer">
<h1><!-- #MainTitle --><!-- MainTitle# --></h1>

<!-- #Bets -->
<div id="betlayer" class="<!-- #CategoryCSS --><!-- CategoryCSS# -->">
<img class="cat-image" src="<!-- #ImageSrc --><!-- ImageSrc# -->" alt ="Category Image" /> 
<form name="betform" action="betchecker.php" method="post">

<p>
<!-- #CategoryName --><!-- CategoryName# -->
<span class="bettitle"><!-- #Title --><!-- Title# --></span>
<br><span class="pretime"><!-- #Until -->
<!-- Until# --></span><!-- #End --><!-- End# --><br>
<span class="subtitle" style="font-size:120%"><!-- #SubTitle --><!-- SubTitle# --></span>
</p>
</div><div id="betlayer" style='clear:both'">
<!-- #Possibilities -->
<nobr style="clear:both">
<input type="radio" name="pos" class="betoption"
value="<!-- #BetID --><!-- BetID# --><!-- #PossibilityID --><!-- PossibilityID# -->" />
<div class="bettitle" style='float:left; width:48%; border-bottom: 1px dotted gray;'><!-- #PossibilityName --><!-- PossibilityName# --></div>
<i style='font-size:150%'>
	(	<sup>+</sup><!-- #PossibilityQue --><!-- PossibilityQue# --> | 
		<sup>k</sup><!-- #PossibilityQuote --><!-- PossibilityQuote# --> | 
		<sup>$</sup><!-- #PossibilitySum --><!-- PossibilitySum# --> 
	)
</i>
</nobr>
<br style='clear:both' /><br>
<!-- Possibilities# -->


<p>Credits: <input type="text" class="betfield" style='width:20%;' name="credits" size="5" />
<input
type="submit" name="Betbutton" class="betbutton" style='width:20%;' value="Bet" /></p>
</form>

</div>
<p style="clear:left"></p>
<!-- Bets# -->

<!-- #NavArea -->
<a href="index.html?pn=<!-- #PrevPage --><!-- PrevPage# -->">
<img src="images/icons/previous.png" border="0">
</a>
<!-- #ActualPage --><!-- ActualPage# --> / 
<!-- #LastPage --><!-- LastPage# -->
<a href="index.html?pn=<!-- #NextPage --><!-- NextPage# -->">
<img src="images/icons/next.png" border="0">
</a>
<!-- NavArea# -->
</div>
</div>
<div class="right-layer">
