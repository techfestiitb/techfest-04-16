<?php
function echo_content($str)
{
	$l=fopen($str,"r");
	$arr=file($str);
	$num=count($arr);
	for($i=0;$i<$num;$i++)
	{
		echo $arr[$i];
	}
	return;
}

echo_content("header.txt");
echo_content("side_no.txt");
echo_content("side_update.txt");
?>
<div id="content">
<h1 id="toptext">Sitemap</h1> 
<br><br>
<a href="../ai/index.php" class="lookback">Artficial Intelligence</a><br><br>

<a href="../ai/crux/index.php">Crux</a><br>
<a href="../ai/core_war/index.php">Core War</a><br>
<a href="../ai/micromouse/index.php">Micromouse</a><br>
<a href="../ai/char_recog/index.php">Character Recognition</a><br>
<a href="../ai/grey_circuits/index.php">Workshop - Grey Circuits</a><br><br>

<a href="../concreate/index.php" class="lookback">Concreate</a><br><br>
<a href="../concreate/h/index.php"><img src="http://www.techfest.org/concreate/h/img/h.gif" border="0" alt=""></a><br>
<a href="../concreate/bridged/index.php">Bridged</a><br>
<a href="../concreate/connecting/index.php">Connecting...</a><br><br>

<a href="../cosmos/index.php" class="lookback">Cosmos</a><br><br>
<a href="../cosmos/grip/index.php">G.R.I.P.</a><br>
<a href="../cosmos/black_box/index.php">Black Box</a><br>
<a href="../cosmos/mission_moon/index.php">Mission Moon 2030</a><br>
<a href="http://www.techfest.org/exhibition/asu/index.php">ASU's Exhibition: Welcome to Mars</a><br>
<a href="http://www.techfest.org/exhibition/isro/index.php">ISRO's Exhibition: India in SPace</a><br><br>





<a href="../erustique/index.php" class="lookback">e-Rustique</a><br><br>
<a href="../erustique/agrobot/index.php" >Agrobot</a><br>
<a href="../erustique/innovision/index.php">Innovision</a><br>
<a href="../erustique/simple_life/index.php">The Simple LIfe v1.1</a><br><br>

<a href="../sixth_gear/index.php" class="lookback">Sixth Gear</a><br><br>
<a href="../sixth_gear/flyhigh/index.php">FlyHigh</a><br>
<a href="../sixth_gear/hover_junior/index.php">Hover Junior</a><br>
<a href="../sixth_gear/fullthrottle/index.php">Full Throttle</a><br>
<a href="../sixth_gear/future_flight/index.php">Future Flight</a><br>
<a href="../sixth_gear/iterations/index.php">Workshop - Iterations</a><br>
<a href="../sixth_gear/robotrix/index.php">Workshop - roboTRIx</a><br><br>


<a href="../smart_tech/index.php" class="lookback">Smart Tech</a><br><br>
<a href="../smart_tech/iclean/index.php">iClean</a><br>
<a href="../smart_tech/prayaas/index.php">Prayaas</a><br>
<a href="../smart_tech/home_alive/index.php">Home Alive</a><br>
<a href="../smart_tech/codec/index.php">Workshop - Codec</a><br>
<a href="../smart_tech/idp/index.php">Industry Defined Problem</a><br><br>



<a href="../sponsors/index.php" class="lookback">Workshops</a><br><br>
<a href="http://www.techfest.org/sixth_gear/iterations/index.php">Iterations</a><br>
<a href="http://www.techfest.org/sixth_gear/robotrix/index.php">roboTRIx</a><br>
<a href="http://www.techfest.org/smart_tech/codec/index.php">Codec</a><br>
<a href="http://www.techfest.org/ai/grey_circuits/index.php">Grey Circuits</a><br><br>

<a href="../sponsors/index.php" class="lookback">Exhibitions</a><br><br>
<a href="http://www.techfest.org/exhibition/asu/index.php">ASU's Exhibition: Welcome to Mars</a><br>
<a href="http://www.techfest.org/exhibition/isro/index.php">ISRO's Exhibition: India in SPace</a><br><br>


<a href="../sponsors/index.php" class="lookback">Sponsors</a><br><br>
<a href="../sponsors/2006.php">Sponsors 2006</a><br>
<a href="../sponsors/2005.php">Sponsors 2005</a><br>
<a href="../sponsors/2004.php">Sponsors 2004</a><br>
<a href="../sponsors/2003.php">Sponsors 2003</a><br>
<a href="../sponsors/2002.php">Sponsors 2002</a><br>
<a href="../sponsors/2001.php">Sponsors 2001</a><br>
<a href="../sponsors/2000.php">Sponsors 2000</a><br>
<a href="../sponsors/1999.php">Sponsors 1999</a><br>
<a href="../sponsors/1998.php">Sponsors 1998</a><br><br>
<a href="../lookback/index.php" class="lookback">Lookback</a><br><br>
<a href="../lookback/2005.php">lookback 2005</a><br>
<a href="../lookback/2004.php">lookback 2004</a><br>
<a href="../lookback/2003.php">lookback 2003</a><br>
<a href="../lookback/2002.php">lookback 2002</a><br>
<a href="../lookback/2001.php">lookback 2001</a><br>
<a href="../lookback/2000.php">lookback 2000</a><br>
<a href="../lookback/1999.php">lookback 1999</a><br>
<a href="../lookback/1998.php">lookback 1998</a><br><br>
<a href="../media/index.php" class="lookback">Media</a><br><br>
<a href="../faq/faq.php" class="lookback">FAQ</a><br><br>
<a href="../contactus/contactus.php" class="lookback">Contact Us</a>

<br><br><br><br><br>
 </div>
<?
echo_content("footer.txt");
?>
	 
	 
	 
	 
	