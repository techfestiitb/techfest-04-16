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
echo_content("side_idp.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<h1 id="toptext">Industry Defined Problem - Shortlist</h1> 
<p>Here is the list of SHORTLISTED teams who have qualified the first round of GE’s IDP.</p>
<table border="0" cellpadding="6" cellspacing="0">
<tr><td><strong>ID06130</strong><td>
Apurva	 P Samudra</td></tr>			

<tr><td><strong>ID06133</strong></td><td>
Deepak Malani			<br>
Gurav Bhimashankar S</td></tr>

<tr><td><strong>ID06141</strong></td><td>
Atul Kumar Singh			<br>
Alpesh Thacker</td></tr>

<tr><td><strong>ID06150</strong></td><td>
Abhinav Jain				<br>
Anoop Kumar Sharma</td></tr>

<tr><td><strong>ID06167</strong></td><td>
Naresh P				</td></tr>

<tr><td><strong>ID06193</strong></td><td>
Abhishek Aserkar	<br>		
Ayush Choudhary</td></tr>

<tr><td><strong>ID06204</strong></td><td>
Ina Pande				<br>
Aditi Agarwal</td></tr>

<tr><td><strong>ID06210</strong></td><td>
Y.Sanjay Surya			<br>
Y.Ramesh Chandra</td></tr>

<tr><td><strong>ID06225</strong></td><td>
Vighnesh Mehta			</td></tr>

</table>
<p>All shortlisted teams please visit <a href="index.php#second">Second Round Details</a> on the main page of the competition.</p>
<br>
For queries contact:<br><br>
Ayush Agrawal<br>
Manager, Smart Tech<br>
<a href="http://www.techfest.org/mail.php?email=ayush@techfest.org">ayush@techfest.org</a><br>
Ph. +91-98699 22308<br>
<br><br>
<br>
<br>
<br>
<br>
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