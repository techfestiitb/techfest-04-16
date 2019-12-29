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
echo_content("side_future.txt");
echo_content("side_update.txt");
?>
 <a name="intro"></a>
<div id="content">
<h1 id="toptext">Future Flight</h1> 
<br>
<p>Following are the results of the competition Future Flight.</p>
<table border="0" cellpadding="" cellspacing="">
<tr><td><strong>First :</strong> Snehal</td><td>        FF06159</td><td> IIT Bombay </td><td>               Prize: Rs.1200</td></tr>
<tr><td><strong>Second:</strong> Vipul Jain</td><td>    FF06111</td><td> SASTRA Deemed University  </td><td>Prize: Rs.800</td></tr>
<tr><td><strong>Third :</strong> Vaibhav rathi</td><td> FF06275 </td><td>MBM Engineering College   </td><td>Prize: Rs.500</td></tr>
<tr><td><strong>Third :</strong> Srinivas Abhishek Gundugurti </td><td>FF06305  </td><td>Illinois Institute of Technology </td><td>Prize: Rs.500</td></tr></table>
<p>Congratulations to all winners. Prizes will be sent to all the winners by post. </p>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


</div>
  
<?

echo_content("footer.txt");
?>