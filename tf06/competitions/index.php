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
echo_content("side_comp.txt");
echo_content("side_update.txt");
?>
<!-- ##### Main Copy ##### -->

<div id="content">
<style type="text/css">
a, a:visited {
text-decoration:none;
color:#ffffff;
}

</style>
<h1 id="toptext">Competitions</h1> 
<br>
<h3><a href="http://www.techfest.org/erustique/agrobot/">Agrobot</a></h3>
<h3><a href="http://www.techfest.org/cosmos/black_box/">BlackBox</a></h3>
<h3><a href="http://www.techfest.org/concreate/bridged/">Bridged</a></h3>
<h3><a href="http://www.techfest.org/ai/char_recog/">Character Recognition</a></h3>
<h3><a href="http://www.techfest.org/concreate/connecting/">Connecting...</a></h3>
<h3><a href="http://www.techfest.org/ai/core_war/">Core War</a></h3>
<h3><a href="http://www.techfest.org/ai/crux/">Crux</a></h3>
<h3><a href="http://www.techfest.org/sixth_gear/flyhigh/">FlyHigh</a></h3>
<h3><a href="http://www.techfest.org/sixth_gear/fullthrottle/">Full Throttle</a></h3>
<h3><a href="http://www.techfest.org/sixth_gear/future_flight/">Future Flight</a></h3>
<h3><a href="http://www.techfest.org/cosmos/grip/">G.R.I.P.</a></h3>
<h3><a href="http://www.techfest.org/concreate/h/"><img src="http://www.techfest.org/concreate/h/img/hwtext.gif" border="0"></a></h3>
<h3><a href="http://www.techfest.org/smart_tech/home_alive/">Home Alive</a></h3>
<h3><a href="http://www.techfest.org/sixth_gear/hover_junior/">Hover Junior</a></h3>
<h3><a href="http://www.techfest.org/smart_tech/iclean/">iClean</a></h3>
<h3><a href="http://www.techfest.org/erustique/innovision/">Innovision</a></h3>
<h3><a href="http://www.techfest.org/smart_tech/idp/">Industry Defined Problem</a></h3>
<h3><a href="http://www.techfest.org/smart_tech/prayaas/">Prayaas</a></h3>
<h3><a href="http://www.techfest.org/ai/micromouse/">Micromouse</a></h3>
<h3><a href="http://www.techfest.org/cosmos/mission_moon/">Mission Moon 2030</a></h3>
<h3><a href="http://www.techfest.org/technovision/">Technovision Awards</a></h3>
<h3><a href="http://www.techfest.org/erustique/simple_life/">The Simple Life v1.1</a></h3>




<br>
<br><br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>