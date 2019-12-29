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
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Techfest '06 - Last dates for registrations</h1> 
<style type="text/css">
#content a {text-decoration:none;}
#content a:hover {text-decoration:underline;}
</style>
<table width="90%" cellpadding="8" cellspacing="5" border="0">
<tr><td colspan="2" align="center"><span style="font-size:14px; font-weight:bold;">Competitions</span></td></tr>
<tr valign="top"><td align="center"><strong>31<sup>st</sup>Dec 2005</strong></td><td><a href="http://www.techfest.org/cosmos/black_box/">Black Box</a> <br></td></tr>
<tr valign="top"><td align="center"><strong>10<sup>th</sup>Jan 2006</strong></td><td><a href="http://www.techfest.org/sixth_gear/hover_junior/">Hover Junior</a>   <br></td></tr>

</table>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>