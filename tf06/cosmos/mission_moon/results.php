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
echo_content("side_mission.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="intro"></a>
<h1 id="toptext">Mission Moon 2030 - Results</h1> 
<p>Following are the winners of MIssion Moon 2030</p>
<table border="0" cellpadding="" cellspacing="">
<tr><td><strong>First :</strong></td><td>MM06221</td><td><span id="q_10950d4bae7dbe21_1">Sanket Vaidya </span> </td>
</tr>
<tr><td><strong>Second:</strong></td><td>MM06127</td><td><span id="q_10950d4bae7dbe21_1">Shinde Ganesh Babasaheb()</span> </td>
</tr>
<tr><td><strong>Third :</strong></td>
<td><span id="q_10950d4bae7dbe21_1">MM06390</span> </td><td><span id="q_10950d4bae7dbe21_1">Raghuraj Deshpande</span> </td>
</tr>
<tr><td><strong>Third :</strong></td>
<td><span id="q_10950d4bae7dbe21_1">MM06246</span> </td><td><span id="q_10950d4bae7dbe21_1">Shrikant Bhusari</span> </td>
</tr>
<tr><td><strong>Third :</strong></td>
<td><span id="q_10950d4bae7dbe21_1">MM06222</span> </td><td><span id="q_10950d4bae7dbe21_1">Austin Vinoth.I</span> </td>
</tr>
</table>
<p>Congratulations to all the winners. Certificates and prizes will be sent shortly to winners. </p>
For queries contact:<br>
<table border="0" width="100%" style="border-collapse:collapse; ">
<tr><td width="20%">Nitish Garg<br>
Manager, Cosmos<br>
<a href="http://www.techfest.org/mail.php?email=nitish@techfest.org" target="_blank">nitish@techfest.org</a><br>
Ph. +91-98695 30638<br></td>
<td>Akshay Mehra<br>
Manager, Cosmos<br>
<a href="http://www.techfest.org/mail.php?email=akshay@techfest.org" target="_blank">akshay@techfest.org</a><br>
Ph. +91-98696 18239<br></td>
</tr>
</table>
<br><br><br><br><br><br><br>
</div>
  
  
<?
echo_content("footer.txt");
?>