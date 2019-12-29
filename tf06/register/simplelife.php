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
<div id="content">
<h1>Register - The Simple life v1.1</h1>
<br>
<p>Sorry! The last date for registration of this competition has passed. Visit <a href="http://www.techfest.org/register/index.php">here</a> to register for other competitions.</p>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>
</div>
<?


echo_content("footer.txt");

?>