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
echo_content("side_bridged.txt");
echo_content("side_update.txt");

?>
<div id="content">
<a name="prob"></a>
<h1 id="toptext">Connecting... - Top 5 designs</h1> 
<br>
<?
$contents=file_get_contents("five.txt");
if(!$contents)
{
	echo "<p>Error reading input file.</p>";
}
else
{
	$arr=explode("\n",$contents,10);

}

?>
<p>Here are the top 5 scores latest by <strong>19th Dec. 2005</strong>.</p>
<table width="90%" border="0" cellpadding="10">
<tr><td width="30%"><? print $arr[0]; ?> </td><td><? print $arr[1]; ?></td></tr>
<tr><td width="30%"><? print $arr[2]; ?> </td><td><? print $arr[3]; ?></td></tr>
<tr><td width="30%"><? print $arr[4]; ?> </td><td><? print $arr[5]; ?></td></tr>
<tr><td width="30%"><? print $arr[6]; ?> </td><td><? print $arr[7]; ?></td></tr>
<tr><td width="30%"><? print $arr[8]; ?> </td><td><? print $arr[9]; ?></td></tr>

</table>
<br><br><br><br><br><br><br>
</div>
  
<?
echo_content("footer.txt");
?>