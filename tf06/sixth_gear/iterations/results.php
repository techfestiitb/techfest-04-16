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
echo_content("side_iterations.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<a name="purpose"></a>
<h1 id="toptext">Iterations - ShoITlist</h1> 
<p>Following have been <strong>SHORTLISTED</strong> for the iterations workshop at Techfest '06</p>
<table width="71%" border="0" cellpadding="1px" style="margin:0px 20px 0px 20px; font-weight:bold; ">
<tr><td width="23%">IT06109</td></tr>
<tr><td>IT06110</td></tr>
<tr><td width="23%">IT06112</td></tr>
<tr><td width="23%">IT06114</td></tr>
<tr><td width="23%">IT06122</td></tr>
<tr> <td width="23%">IT06132</td></tr>
<tr><td width="23%">IT06139</td></tr>
<tr><td width="23%">IT06161</td></tr>
<tr><td>IT06174</td></tr>
<tr><td>IT06177</td></tr>
<tr><td>IT06178</td></tr>
<tr><td>IT06228</td></tr>
<tr><td>IT06257</td></tr>
<tr><td>IT06304</td></tr>
<tr><td>IT06305</td></tr>
<tr><td>IT06306</td></tr>
<tr><td>IT06308</td></tr>
<tr><td>IT06339</td></tr>
<tr><td>IT06352</td></tr>
<tr><td>IT06359</td></tr>
<tr><td>IT06363</td></tr>
<tr><td>IT06391</td></tr>
<tr><td>IT06401</td></tr>
<tr><td>IT06402</td></tr>
<tr><td>IT06416</td></tr>
<tr><td>IT06421</td></tr>
<tr><td>IT06422</td></tr>
<tr><td>IT06473</td></tr>
<tr><td>IT06474</td></tr>
<tr><td>IT06502</td></tr>
<tr><td>IT06520</td></tr>
<tr><td>IT06521</td></tr>
<tr><td>IT06526</td></tr>
<tr><td>IT06541</td></tr>
<tr><td>IT06542</td></tr>

</table>

<p>Further instructions will be sent to the selected participants by <strong>8:00 PM 29th Dec. 2005</strong></p>




<br><br>For queries contact:<br><br>
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

<br><br>
<br>
<br>


</div>
  
<?

echo_content("footer.txt");
?>