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
echo_content("side_scitech.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="intro"></a>
<h1 id="toptext">SciTech: College Quiz Challenge - Results of Online Elimination Round</h1> 
<p>Following collleges have been selected for Round 2 of SciTech, which will be held during Techfest '06.</p>

<table border="0" cellspacing="6">

<tr><td width="150"><strong>SC06266</strong></td><td>NIRMA INSTITUTE OF TECHNOLOGY</td></tr>
<tr><td><strong>SC06192</strong></td><td>YMCA Institute of Engineering, Faridabad</td></tr>
<tr><td><strong>SC06253</strong></td><td>National University of Computer and Emerging Sciences(FAST - NU)</td></tr>
<tr><td><strong>SC06313</strong></td><td>P.E S. College of Engg.</td></tr>
<tr><td><strong>SC06112</strong></td><td>Sardar Vallabhbhai National Institute of Technology</td></tr>
<tr><td><strong>SC06233</strong></td><td>Medicaps Institute of Technology and Management</td></tr>
<tr><td><strong>SC06311</strong></td><td>Parashwanath College Of Engineering</td></tr>
<tr><td><strong>SC06218</strong></td><td>National Institute of Technology, Hamirpur(H.P.)</td></tr>
<tr><td><strong>SC06286</strong></td><td>KET V.G.VAZE COLLEGE</td></tr>

</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
For queries see the <a href="./faq.php">FAQ</a> page or contact:<br>
Vamsi Krishna Peri<br>
Email: <a href="http://www.techfest.org/mail.php?email=scitech@techfest.org" target="_blank">scitech@techfest.org</a><br>
Ph. +91-98191 88890<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>