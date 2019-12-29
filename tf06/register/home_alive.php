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
if ($_POST['Submit']=="")
{
?>
<!-- ##### Main Copy ##### -->

<div id="content">
<h1 id="toptext">Register - Home Alive</h1> 
<p>The registration for this competition has been closed.</p>


<br><br><br><br><br><br><br><br><br><br><br><br>




<br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<?

}
echo_content("footer.txt");

?>