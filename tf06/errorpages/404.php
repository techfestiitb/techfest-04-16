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
     <h1 id="toptext">Error 404 - File not found</h1> 

<p>The document you are looking for no longer exists.</p>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
  
  
<?
echo_content("footer.txt");
?>