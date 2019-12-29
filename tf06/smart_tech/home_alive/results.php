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
echo_content("side_alive.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<h1 id="toptext">Home Alive - Shortlisted Teams</h1> 
<p>Here is the list of the shortlisted teams who have qualified the first round of Home Alive. </p>
<table border="0" cellpadding="10" width="905">
<tr>
<td><strong>HA06110</strong><br>
K.Maruthi Nataraj<br>	
N.C.V.K Srimannarayana
</td>
<td>Chaitanya Bharathi Institute of Technology,Hyderabad</td>
</tr>

<tr>
<td><strong>HA06129</strong><br>
Aditi Agarwal<br>			
Dharamveer
</td>
<td>Nirma University, Ahmedabad</td>
</tr>

<tr>
<td><strong>HA06160</strong><br>
Vipul Jain<br>			
Rahul Chandra Sinha
</td>
<td>SASTRA,Thanjavur(T.N)</td>
</tr>

<tr>
<td><strong>HA06178</strong><br>
Soniya Ahuja</td>
<td>Swami Ramanand Teerth Marathwada University (SRTMU)</td>
</tr>

<tr>
<td><strong>HA06188</strong><br>
Piyush Bihani<br>		
Deependra Hamal
</td>
<td>NIT Warangal</td>
</tr>

<tr>
<td><strong>HA06217</strong><br>
Zulfiqar Chikani<br>		
Shoeb Temrikar
</td>
<td>Mumbai University</td>
</tr>

<tr>
<td><strong>HA06247</strong><br>
Vibhav Varshney<br>		
Kaustubh Phadtare
</td>
<td>V.I.T., Pune</td>
</tr>

<tr>
<td><strong>HA06250</strong><br>
Pankaj Nihalani<br>	
Sharda Prasad Gautam
</td>
<td>S.V.N.I.T., Surat</td>
</tr>

<tr>
<td><strong>HA06252</strong><br>
Arpit Jain<br>			
Soniya Jain
</td>
<td>M.N.I.T., Jaipur</td>
</tr>

<tr>
<td><strong>HA06253</strong><br>
Pranava Swaroop S<br>		
Smriti Patodi
</td>
<td>M.N.I.T., Jaipur</td>
</tr>
</table>
<p>All shorlisted teams are required to submit a detailed report and give a presentation on four topics in the final round (For details visit <a href="http://www.techfest.org/smart_tech/home_alive/index.php#pres">Presentation Details</a> Section).</p>
<br>
For queries contact:<br><br>
Ayush Agrawal<br>
Manager, Smart Tech<br>
<a href="http://www.techfest.org/mail.php?email=ayush@techfest.org" target="_blank">ayush@techfest.org</a><br>
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



  
<?
echo_content("footer.txt");
?>