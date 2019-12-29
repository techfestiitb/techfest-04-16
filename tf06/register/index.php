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
echo_content("side_register.txt");
echo_content("side_update.txt");
?>
<!-- ##### Main Copy ##### -->
<style type="text/css">
#content a {text-decoration:none;}
#content a:hover {text-decoration:underline;}
</style>

    <div id="content">
     <h1 id="toptext">Register</h1> 
<div>
<br>

<p>All registration have been closed.</p>


</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>