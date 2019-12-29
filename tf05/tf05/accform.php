<?php
$dbhost='66.98.128.63';
$dbname='techfest';
$dbuser='techfest';
$dbpasswd='tec45st';
 ?>
 
  <html>

  <head>


		<script language="JavaScript1.2" type="text/javascript" src="http://www.techfest.org/javascript/countdown.js">
		</script>


    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="author" content="Techfest">
    
<link rel="stylesheet" type="text/css" href=http://www.techfest.org/css/screen.css media="screen" title="Sinorca (screen)" />
    <link rel="stylesheet" type="text/css" href=http://www.techfest.org/css/print.css media="print" />

    <title>Techfest 2005</title>



  </head>

  <body>

    <!-- For non-visual user agents: -->
      <div id="top">
	<div id ="clock">
		<script type="text/javascript">
			countdown_clock(05, 01, 28, 09, 00, 1);
		</script>

	<div id="fader">
		<script language="JavaScript1.2" type="text/javascript" src="http://www.techfest.org/javascript/updates.js">
		</script>
	</div>     
 	</div>
        <div class="midHeader">

	<a href=http://www.techfest.org/index1.html border=0><img src="./img/top_left.jpg" border=0></a>


	<div class="right"><a href=http://www.techfest.org/index1.html border=0><img src="./img/logodark.gif" border=0></a></div>
	</div>

      
  <div class="subHeader"> <a href="./index1.html" >Home</a> | <a href="./events/index.html" >Events</a> 
    | <a href="./competitions/index.html">Competitions</a> | <a href="./workshops/index.html">Workshops</a> 
    | <a href="./sponsors/index.html">Sponsors</a> | <a href="./media/index.html">Media</a> 
    | <a href="./lookback/index.html">Lookback</a> | <a href="./register/index.html">Register</a> </div>
    
</div>

<!--#####making connection#### -->
  <?php
  $link=mysql_connect($dbhost,$dbuser,$dbpasswd) or die("could not connect:".mysql_error());
  mysql_select_db($dbname) or die("query failed :".mysql_error()); 
?>
 <!-- ##### Main Copy ##### -->
 <div id="main-copy">
<h1 id="introduction">Visitor's Accommodation Form</h1>
	  

<form action="accomodation.php" method="POST">
<table>
<tr><td>
Name of college :</td><td><input type="text" name="college_name"> </td></tr> <br>
<tr><td>
Name of the Contingent Leader:</td><td><input type="text" name="contg_leedr" > </td></tr><br>
<tr><td>
Postal Address :</td><td><input type="text" name="add" ></td></tr><br>
<tr><td>
Email :</td><td><input type="text" name="email" ></td></tr>
<tr><td>
Phone No.</td><td><input type="text" name="phonenum" ></td></tr>
<tr><td>
Fax (if any):</td><td><input type="text" name="add" ></td></tr>
</table>
<p>Details of other Contingent Members &nbsp;:</p><br><br>
<table>
  <tr><td>S.No.</td><td>&nbsp;&nbsp;&nbsp;&nbsp;Name</td><td>Sex</td><td>&nbsp;&nbsp;&nbsp;&nbsp;E-mail</td></tr>
<tr><td>1.   </td><td><input type="text" name="1_name" ></td><td><input type="text" name="1_sex" width=20></td><td><input type="text" name="1_email" ></td></tr>
<tr><td>2.   </td><td><input type="text" name="2_name" ></td><td><input type="text" name="2_sex" width=20></td><td><input type="text" name="2_email" ></td></tr>
<tr><td>3.   </td><td><input type="text" name="3_name" ></td><td><input type="text" name="3_sex" width=20></td><td><input type="text" name="3_email" ></td></tr>
<tr><td>4.   </td><td><input type="text" name="4_name" ></td><td><input type="text" name="4_sex" width=20></td><td><input type="text" name="4_email" ></td></tr>
<tr><td>5.   </td><td><input type="text" name="5_name" ></td><td><input type="text" name="5_sex" width=20></td><td><input type="text" name="5_email" ></td></tr>
<tr><td>6.   </td><td><input type="text" name="6_name" ></td><td><input type="text" name="6_sex" width=20></td><td><input type="text" name="6_email" ></td></tr>
<tr><td>7.   </td><td><input type="text" name="7_name" ></td><td><input type="text" name="7_sex" width=20></td><td><input type="text" name="7_email" ></td></tr>
<tr><td>8.   </td><td><input type="text" name="8_name" ></td><td><input type="text" name="8_sex" width=20></td><td><input type="text" name="8_email" ></td></tr>
<tr><td>9.   </td><td><input type="text" name="9_name" ></td><td><input type="text" name="9_sex" width=20></td><td><input type="text" name="9_email" ></td></tr>
<tr><td>10.   </td><td><input type="text" name="10_name" ></td><td><input type="text" name="10_sex" width=20></td><td><input type="text" name="10_email" ></td></tr>
<tr><td>11.   </td><td><input type="text" name="11_name" ></td><td><input type="text" name="11_sex" width=20></td><td><input type="text" name="11_email" ></td></tr>
<tr><td>12.   </td><td><input type="text" name="12_name" ></td><td><input type="text" name="12_sex" width=20></td><td><input type="text" name="12_email" ></td></tr>
<tr><td>13.   </td><td><input type="text" name="13_name" ></td><td><input type="text" name="13_sex" width=20></td><td><input type="text" name="13_email" ></td></tr>
<tr><td>14.   </td><td><input type="text" name="14_name" ></td><td><input type="text" name="14_sex" width=20></td><td><input type="text" name="14_email" ></td></tr>
<tr><td>15.   </td><td><input type="text" name="15_name" ></td><td><input type="text" name="15_sex" width=20></td><td><input type="text" name="15_email" ></td></tr>
<tr><td>16.   </td><td><input type="text" name="16_name" ></td><td><input type="text" name="16_sex" width=20></td><td><input type="text" name="16_email" ></td></tr>
<tr><td>17.   </td><td><input type="text" name="17_name" ></td><td><input type="text" name="17_sex" width=20></td><td><input type="text" name="17_email" ></td></tr>
<tr><td>18.   </td><td><input type="text" name="18_name" ></td><td><input type="text" name="18_sex" width=20></td><td><input type="text" name="18_email" ></td></tr>
<tr><td>19.   </td><td><input type="text" name="19_name" ></td><td><input type="text" name="19_sex" width=20></td><td><input type="text" name="19_email" ></td></tr>
<tr><td>20.   </td><td><input type="text" name="20_name" ></td><td><input type="text" name="20_sex" width=20></td><td><input type="text" name="20_email" ></td></tr>

</table><br>
<input type="submit" name="submit" value="SUBMIT">
<p>Note:<br>
  1. Only one application from every college will be accepted. <br>
  2. This form does not guarantee your accommodation. Final confirmation will 
  be sent to the contingent leader via e-mail.<br>
  3. Please refer to <a href="http://www.techfest.org/assistance">http://www.techfest.org/assistance</a>   for details.<br>
</p>
</form>
<br>
  </div> 
    <!-- ##### Footer ##### -->

    <div id="footer">
    <div class="right">
			Web Hosting By<br>&nbsp;&nbsp;&nbsp;
			<a href="http://www.indialinks.com" target="_blank">Indialinks</a>
    </div>	
    <div class="center">
        	<a href="./faq.html">FAQ</a>|
        	<a href="./sitemap.html">Sitemap</a>|
        	<a href="./Contact.html">Contact Us</a>
    	<br>
	&copy; Techfest 2005
    </div>	 
	</div>  
    </body>
</html>
