
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

          <div class="subHeader">
         <a href="./index1.html" class="highlight">Home</a> |
        <a href="./events/index.html" >Events</a> |
        <a href="./competitions/index.html">Competitions</a> |
        <a href="./workshops/index.html">Workshops</a> |
        <a href="./sponsors/index.html">Sponsors</a> |
        <a href="./media/index.html">Media</a> |
        <a href="./lookback/index.html">Lookback</a>|
        <a href="./register/index.html">Register</a>

      </div>
    </div>

		//  <!-- ##### Side Bar ##### -->

    <div id="side-bar">
  
      <div>
	<p class="sideBarTitle">&nbsp;Newsletter</p>  
	<form method="POST" action="./subscribe.php">
	  <table width="150">
		<tr>
		<td width="70">E-mail :</td>
	 	<td width="80"><input type="text" name="email" size="10"></td>		
	 	</tr>	
 	</table>
		<center>
	 <input type="submit" value="Go!" name="action">
	 </center>
	</form>
      </div>
  </div>

</html>

<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
?>

//create table
<?php
$link=mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Could not connect:".mysql_error());

mysql_select_db($dbname) or die("Query failed :".mysql_error());

mysql_query("CREATE TABLE contact_info(id varchar(40),nameofcollege text,contgleader text,postadd text,email varchar(40),fax varchar(30))")or die("Could not create table1 :".mysql_error());

echo"Table1 created";

mysql_query("CREATE TABLE acco_info(id varchar(40), name text,sex varchar(2),email varchar(30))")or die("Could not create table2 :".mysql_error());

echo"Table2 created";
?>

//insert into table
<?php
$t=time();
$md5=md5($t);
mysql_query("INSERT INTO contact_info VALUES('{$md5}','{$_POST["college_name"]}','{$_POST["contg_leadr"]}','{$_POST["add"]}','{$_POST["email"]}','{$_POST["phonenum"]}','{$_POST["fax"]}')") or die ("Could not insert data into table :".mysql_error());
for ($i=1;$i<=20;$i++)
	mysql_query("INSERT INTO acco_info VALUES('{$md5}','{$_POST[$i.'_name']}','{$_POST[$i.'_sex']}','{$_POST[$i.'_email']}')") or die ("Could not insert data into table :".mysql_error());
echo "Data Inserted";
?>

<?php
mail($_POST["email"],"Techfest 2005:","Your request has been registered.");
?>


// <!-- ##### Main Copy ##### -->

<html>
<head>
<div id="main-copy">
<h1 id="introduction">Visitors  Accommodation Form</h1>
      
      <p>Please Check your Inbox!</p> 

<br>      
<br><br><br>
    </div>
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
  </head>
</html>
