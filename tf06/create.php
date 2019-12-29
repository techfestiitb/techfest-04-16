<?php
$dbhost = 'techfest.techfest.org';   
$dbname = 'techfest';
$dbuser = 'techfestiitb';
$dbpasswd = 'tec45st';
                
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
//$query="DELETE FROM hover_junior2k6";
//$result=mysql_query($query);
//echo mysql_error();
/*$arr=mysql_fetch_array($result);
print_r($arr);
$query="ALTER TABLE validid MODIFY email varchar(255)";
$result=mysql_query($query);
echo mysql_error();
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$query="DESCRIBE validid";
$result=mysql_query($query);
echo mysql_error();
$arr=mysql_fetch_array($result);
print_r($arr);*/
//$query="CREATE TABLE acco_mails_sent_visitor (Email varchar(255))";
//$query="CREATE TABLE scitech (Username varchar(255),Password varchar(255),open int,submit int,timein text,datein int,timeout text,dateout int)";
$result=mysql_query($query);
echo mysql_error();

/*
$query="INSERT INTO trial_id VALUES ('IT06102','566e9fbe16e273b2276c42341449hdhd','mail_siddj@yahoo.co.in',0)";
$result=mysql_query($query);
echo mysql_error();
$query="INSERT INTO trial_id VALUES ('IT06103','566e9fbe16e273b2276c423414490dhhdh','siddjoshi@iitb.ac.in',0)";
$result=mysql_query($query);
echo mysql_error();
//$query="DROP TABLE simplelife2k6";*/
/*$query = "CREATE TABLE connecting2k6 (Regnum varchar(10),Name1 varchar(100),Email1 varchar(100),Univ1 varchar(100),Year1 varchar(50),Address text,Passwd varchar(100),nos int)";
$result=mysql_query($query);
echo mysql_error();
//$query = "CREATE TABLE codec2k6 (Regnum varchar(10),Institute text,Address text,Tel varchar(255),Fax varchar(255),Name1 varchar(100),Email1 varchar(100),Age1 varchar(50),Year1 varchar(30),Contact1 varchar(255),Name2 varchar(100),Email2 varchar(100),Age2 varchar(100),Year2 varchar(30),Contact2 varchar(255))";
//mysql_query($query);
//echo mysql_error();
*/
$query = "CREATE TABLE sap_idp2k6 (Regnum varchar(10),Name1 varchar(100),Email1 varchar(100),Univ1 varchar(100),Year1 varchar(100),Name2 varchar(100),Email2 varchar(100),Univ2 varchar(100),Year2 varchar(100),Name3 varchar(100),Email3 varchar(100),Univ3 varchar(100),Year3 varchar(100),Address varchar(255))";;
mysql_query($query);
echo mysql_error();
//$query = "CREATE TABLE robotrix2k6 (Regnum varchar(10),Name1 varchar(30),Email1 varchar(30),Univ1 varchar(30),Year1 varchar(15),Name2 varchar(30),Email2 varchar(30),Univ2 varchar(30),Year2 varchar(15),Name3 varchar(30),Email3 varchar(30),Univ3 varchar(30),Year3 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15), Address varchar(255))";
//mysql_query($query);
//echo mysql_error();
/*///$query="CREATE TABLE events2k6 (Name varchar(100),Tablename varchar(100),Code varchar(20))";
//$query="CREATE TABLE feedback (name varchar(60),year varchar(20),college varchar(40),howtech int,others varchar(255),publitime int,aware int,enought int,participate varchar(255),impression varchar(255),comp varchar(255),noncomp varchar(255),viapost int,learnex int,entertainment int,organisation int,level int,canteen int,overall int,again int,pref int,acco varchar(255),suggest varchar(255))";                                                                                                      
/*$result=mysql_query($query); 
echo mysql_error();
$query="INSERT INTO events2k6 Values ('Character Recognition','character_recognition2k6','CR')";
$result=mysql_query($query); 
echo mysql_error();*/
/*$query="INSERT INTO events2k6 Values ('Crux','crux2k6','CX',1)";
$result=mysql_query($query); 
echo mysql_error();
/*$query="UPDATE events2k6 SET nop=2 WHERE Tablename LIKE 'character_recognition2k6'";
$result=mysql_query($query); 
echo mysql_error();
$query="UPDATE events2k6 SET nop=3 WHERE Tablename LIKE 'iclean2k6'";
$result=mysql_query($query); 
echo mysql_error();
$query="UPDATE events2k6 SET nop=4 WHERE Tablename LIKE 'grip2k6'";
$result=mysql_query($query); 
echo mysql_error();
$query="UPDATE events2k6 SET nop=4 WHERE Tablename LIKE 'micromouse2k6'";
$result=mysql_query($query); 
echo mysql_error();
$query="UPDATE events2k6 SET nop=4 WHERE Tablename LIKE 'simplelife2k6'";
$result=mysql_query($query); 
echo mysql_error();
$query="UPDATE events2k6 SET nop=4 WHERE Tablename LIKE 'fullthrottle2k6'";
$result=mysql_query($query); 
echo mysql_error();
$query="UPDATE events2k6 SET nop=2 WHERE Tablename LIKE 'h2k6'";
$result=mysql_query($query); 
echo mysql_error();
*/
/*$query="INSERT INTO events2k6 Values ('Connecting...','connecting2k6','CB',1)";
$result=mysql_query($query); 
echo mysql_error();/*
$query="INSERT INTO events2k6 Values ('G.R.I.P.','grip2k6','GR')";
$result=mysql_query($query); 
echo mysql_error();*/
$query="INSERT INTO events2k6 Values ('SAP Fellowship Contest','sap_idp2k6','SP',3)";
$result=mysql_query($query); 
echo mysql_error();/*
$query="INSERT INTO events2k6 Values ('The Simple Life v1.1','simplelife2k6','SL')";
$result=mysql_query($query); 
echo mysql_error();*/
/*$query="INSERT INTO validid VALUES ('home_alive@techfest.org')";
$result=mysql_query($query); 
echo mysql_error();
*/
$query="INSERT INTO validid VALUES ('sap_idp@techfest.org')";
$result=mysql_query($query); 
echo mysql_error();
/*$query="SELECT * FROM tempids";
$result=mysql_query($query); 
echo mysql_error();
$n=mysql_num_rows($result);
echo "no is ".$n;
/*$query = "CREATE TABLE compcode (Name varchar(100),nof int,code varchar(30))";
mysql_query($query);
echo mysql_error();*/

//$query = "UPDATE simplelife2k6 SET Email1='akshaythefire@yahoo.com' WHERE Email1='akshaythefire@yahoomail.com'";
//mysql_query($query);
//echo mysql_error();

//$query = "DELETE FROM hover_junior2k6";
//mysql_query($query);
//echo mysql_error();
/*$query = "DROP TABLE fullthrottle2k6";
mysql_query($query);
echo mysql_error();
$query = "DROP TABLE grip2k6";
mysql_query($query);
echo mysql_error();*/
?>


















