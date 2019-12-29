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
     <h1 id="toptext">Error 500 - Internal Server Error</h1> 

<p>The server wasn't able to process your request. Kindly try after some time.<br>
Please report the problem to <a href="http://www.techfest.org/mail.php?email=siddharth@techfest.org" target="_blank">siddharth@techfest.org</a></p>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
  
  
<?
echo_content("footer.txt");
?>