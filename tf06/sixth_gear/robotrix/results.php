
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
echo_content("side_robo.txt");
echo_content("side_update.txt");
?>
 
 <div id="content">
<a name="prob" ></a>
<h1 id="toptext">roboTRIx - Shortlist</h1> 
<p>Following people have been shortlisted for roboTRIx workshop at Techfest '06.</p>
<table width="71%" border="0" cellpadding="1px" style="margin:0px 20px 0px 20px; font-weight:bold; ">
<tr><td width="23%">RT06125</td><td width="77%"> Robin Sharma</td></tr>
<tr><td>RT06132</td><td> Alok Talukdar</td></tr>
<tr><td width="23%">RT06150</td><td width="77%"> B.Naga Chaitaniya</td></tr>
<tr> <td width="23%">RT06155</td><td width="77%"> Dipti Chandwani</td></tr>
<tr><td width="23%">RT06156</td><td width="77%"> Hemant Sharma</tr>
<tr><td width="23%">RT06157</td><td width="77%"> Dhruv Thakkar</td></tr>
<tr><td>RT06277</td><td> Aditya Shastri</td></tr>
<tr><td>RT06279</td><td> Rahul Kumar</td></tr>
<tr><td>RT06297</td><td> Anish Dantale</td></tr>
<tr><td>RT06306</td><td> Manish Kumar Pandey  	</td></tr>
<tr><td>RT06311</td><td> Bhavitavya B Bhadviya</td></tr>
<tr><td>RT06317</td><td> Ruchi P. Mehta</td></tr>
<tr><td>RT06320</td><td> Shekhar Singh Sorot</td></tr>
<tr><td>RT06326</td><td> Vivek N Prakash</td></tr>
<tr><td>RT06336</td><td> Sahil Gupta</td></tr>
<tr><td>RT06347</td><td> Amandev Singh</td></tr>
<tr><td>RT06396</td><td> Saiyed Imran Haider Naqvi</td></tr>
<tr><td>RT06413</td><td> Poojan Shah</td></tr>
<tr><td>RT06424</td><td> Arwinder Singh Bhurji</td></tr>
<tr><td>RT06429</td><td> M.Arun Teja</td></tr>
<tr><td>RT06454</td><td> Deepak bhatia</td></tr>
<tr><td>RT06455</td><td> Yajurvedi Girish</td></tr>
<tr><td>RT06456</td><td> Gaurav Tatte</td></tr>
<tr><td>RT06475</td><td> Shrotre Neha</td></tr>
<tr><td>RT06476</td><td> Darshil Shah</td></tr>
<tr><td>RT06484</td><td> Tarun sharda</td></tr>
<tr><td>RT06485</td><td> V.Vishnu Teja</td></tr>
<tr><td>RT06488</td><td> Ranga Teja. H</td></tr>
<tr><td>RT06493</td><td> Durva Rathi</td></tr>
<tr><td>RT06515</td><td> Jyoti Mamidipalli</td></tr>









</table>

<br><br>For queries mail at <a href="http://www.techfest.org/mail.php?email=robotrix@techfest.org" target="_blank">robotrix@techfest.org</a> or contact:<br>
<table border="0" align="left" id="manag"  style="border-collapse:collapse; " width="100%">
<tr><td width="20%">Amardeep<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=amar@techfest.org" target="_blank">amar@techfest.org</a><br>
Ph. +91-98201 91213<br></td>
<td>Aditya Chaoji<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=aditya@techfest.org" target="_blank">aditya@techfest.org</a><br>
Ph. +91-98693 57291<br></td>
</tr>
</table>
<br>
<br><br>
<br>


</div>
  
<?

echo_content("footer.txt");
?>