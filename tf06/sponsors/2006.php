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
echo_content("side_sponsors.txt");
echo_content("side_update.txt");
?>
 <!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Sponsors Techfest 2006</h1> 
	 <br><br>
	<table border="0" cellpadding="8" cellspacing="8" width="90%" style="border-collapse:collapse; margin:10px 0px 0px 0px; font-size:11px">
 <tr><td align="center" colspan="2"><img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/sap.gif"></td></tr>
 <tr><td colspan="2" align="center">Title Sponsor</td></tr>
 <tr>
 <td align="center" colspan="2"><img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ht.gif"></td>
  </tr>
 <tr> <td align="center" colspan="2">Associate Title Sponsor</td></tr>
 <tr><td align="center"><img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/chip.gif" width="200px" border="0" alt=""></td><td align="center"><img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/patni.gif" border="0" alt=""></td></tr>
 <tr><td align="center">Technology partners</td><td align="center">Associate Technology Partners</td></tr>
 <tr>
 <tr>
 <td align="center"><img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/geometric.jpg"></td>
 <td align="center"><img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/castrol.jpg" border="0" alt=""></td>
 </tr>
  <tr> <td align="center">Artificial Intelligence</td><td align="center">Sixth Gear</td></tr>
 <tr>
 <td align="center"><img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/symmantec.jpg"></td>
 <td align="center"><img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ge.jpg" border="0" alt=""></td>
 </tr>
  <tr> <td align="center">Lecture Series</td><td align="center">Industry Design Problem</td></tr>
  <tr>
 <td align="center"> <img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/hcc.jpg"></td>
 <td align="center"><img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/cisco.gif" /></td>
 </tr>
 <tr> <td align="center">CONCREaTE</td><td align="center">Cosmos</td></tr>
 
 
 
 <tr>
 <td align="center"> <img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/pinnacle.jpg"></td>
 <td align="center"><img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/pragati.gif"></td>
 </tr>
 <tr> <td align="center">Infrastructure Partner</td><td align="center">Print Sponsor</td></tr>
 <tr>
 
 
 
 
 
 <tr>
 <td align="center"> <img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/sciam.jpg"></td>
 <td align="center"><img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/gofm.jpg"></td>
 </tr>
 <tr> <td align="center">Oficial Magazine</td><td align="center">Radio Partner</td></tr>
 <tr>
 
 
 <td align="center" colspan="2"> 
 <img border="0" src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/aramex.jpg"></td>
 </tr>
 <tr><td align="center" colspan="2">Logistics Partner</td>
 </tr>
 </table>
<br><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;For association with Techfest please contact <a target="_blank" href="http://www.techfest.org/mail.php?email=mktg@techfest.org" target="_blank">mktg@techfest.org</a></p>

<br><br><br>

</div>

  
<?
echo_content("footer.txt");
?>