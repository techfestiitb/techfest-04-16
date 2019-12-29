<?php
$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
                
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
//$query="DROP TABLE simplelife2k6";
//$query = "CREATE TABLE character_recognition2k6 (Regnum varchar(10),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Address varchar(255))";
//mysql_query($query);
//echo mysql_error();
/*$query = "CREATE TABLE micromouse2k6 (Regnum varchar(10),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15), Address varchar(255))";
mysql_query($query);
echo mysql_error();
$query = "CREATE TABLE fullthrottle2k6 (Regnum varchar(10),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15), Address varchar(255))";
mysql_query($query);
echo mysql_error();
$query = "CREATE TABLE grip2k6 (Regnum varchar(10),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15), Address varchar(255))";
mysql_query($query);
echo mysql_error();
*///$query="CREATE TABLE events2k6 (Name varchar(100),Tablename varchar(100),Code varchar(20))";
//$query="CREATE TABLE feedback (name varchar(60),year varchar(20),college varchar(40),howtech int,others varchar(255),publitime int,aware int,enought int,participate varchar(255),impression varchar(255),comp varchar(255),noncomp varchar(255),viapost int,learnex int,entertainment int,organisation int,level int,canteen int,overall int,again int,pref int,acco varchar(255),suggest varchar(255))";                                                                                                      
/*$result=mysql_query($query); 
echo mysql_error();
$query="INSERT INTO events2k6 Values ('Character Recognition','character_recognition2k6','CR')";
$result=mysql_query($query); 
echo mysql_error();
$query="INSERT INTO events2k6 Values ('H','h2k6','CH')";
$result=mysql_query($query); 
echo mysql_error();*/


$query="ALTER TABLE fullthrottle2k6 MODIFY Name4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();
$query="ALTER TABLE grip2k6 MODIFY Name4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();

$query="ALTER TABLE micromouse2k6 MODIFY Name4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();
$query="ALTER TABLE simplelife2k6 MODIFY Name4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();




$query="ALTER TABLE fullthrottle2k6 MODIFY Email4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();
$query="ALTER TABLE grip2k6 MODIFY Email4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();

$query="ALTER TABLE micromouse2k6 MODIFY Email4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();
$query="ALTER TABLE simplelife2k6 MODIFY Email4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();




$query="ALTER TABLE fullthrottle2k6 MODIFY Univ4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();
$query="ALTER TABLE grip2k6 MODIFY Univ4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();

$query="ALTER TABLE micromouse2k6 MODIFY Univ4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();
$query="ALTER TABLE simplelife2k6 MODIFY Univ4 varchar(100)";
$result=mysql_query($query); 
echo mysql_error();





$query="ALTER TABLE fullthrottle2k6 MODIFY Year4 varchar(30)";
$result=mysql_query($query); 
echo mysql_error();
$query="ALTER TABLE grip2k6 MODIFY Year4 varchar(30)";
$result=mysql_query($query); 
echo mysql_error();

$query="ALTER TABLE micromouse2k6 MODIFY Year4 varchar(30)";
$result=mysql_query($query); 
echo mysql_error();
$query="ALTER TABLE simplelife2k6 MODIFY Year4 varchar(30)";
$result=mysql_query($query); 
echo mysql_error();

/*
$query="INSERT INTO events2k6 Values ('iClean','iclean2k6','IC')";
$result=mysql_query($query); 
echo mysql_error();
$query="INSERT INTO events2k6 Values ('G.R.I.P.','grip2k6','GR')";
$result=mysql_query($query); 
echo mysql_error();
$query="INSERT INTO events2k6 Values ('Micromouse','micromouse2k6','CR')";
$result=mysql_query($query); 
echo mysql_error();
$query="INSERT INTO events2k6 Values ('The Simple Life v1.1','simplelife2k6','SL')";
$result=mysql_query($query); 
echo mysql_error();
/*$query="INSERT INTO validid VALUES ('iclean@techfest.org')";
$result=mysql_query($query); 
echo mysql_error();
$query="INSERT INTO validid VALUES ('grip@techfest.org')";
$result=mysql_query($query); 
echo mysql_error();
$query="INSERT INTO validid VALUES ('fullthrottle@techfest.org')";
$result=mysql_query($query); 
echo mysql_error();
$query = "CREATE TABLE compcode (Name varchar(100),nof int,code varchar(30))";
mysql_query($query);
echo mysql_error();

$query = "DROP TABLE iclean2k6";
mysql_query($query);
echo mysql_error();
$query = "DROP TABLE micromouse2k6";
mysql_query($query);
echo mysql_error();
$query = "DROP TABLE fullthrottle2k6";
mysql_query($query);
echo mysql_error();
$query = "DROP TABLE grip2k6";
mysql_query($query);
echo mysql_error();*/
?>


















