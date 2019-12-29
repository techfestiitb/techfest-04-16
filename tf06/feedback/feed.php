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
$dbhost = '70.85.134.18';   
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
        
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
echo_content("header.txt");
echo_content("side_no.txt");
?>
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Feedback Techfest 2005</h1> 
<?php


	//Publicity - how did u come to know bout techfest
if ((@$_POST['howtech']!=1)&&(@$_POST['howtech']!=2)&&(@$_POST['howtech']!=3)&&(@$_POST['howtech']!=4))
 {
	$_POST['howtech']=5;
}
	
if ((@$_POST['howtech']!=4))
{
$_POST['others']='';
}	

	//Publicity - Time
if ((@$_POST['publitime']!=1)&&(@$_POST['publitime']!=2)&&(@$_POST['publitime']!=3)&&(@$_POST['publitime']!=4))
 {
	$_POST['publitime']=6;
 }

	//Publicity - Awareness
if ((@$_POST['aware']!=1)&&(@$_POST['aware']!=2)&&(@$_POST['aware']!=3))
 {
	$_POST['aware']=5;
	
 } 
if ((@$_POST['enought']!=1)&&(@$_POST['enought']!=2)&&(@$_POST['enought']!=3))
 {
	$_POST['enought']=6;
 } 

	

	
	//via post
	if ((@$_POST['viapost']!=1)&&(@$_POST['viapost']!=2))
 {
	$_POST['viapost']=10;
 } 
	
	//Events - Preference
if ((@$_POST['pref']!=1)&&(@$_POST['pref']!=2)&&(@$_POST['pref']!=3)&&(@$_POST['pref']!=4))
 {
	$_POST['pref']=9;
	
 }
	
	
	
$query="INSERT INTO feedback VALUES ('{$_POST['name']}','{$_POST['year']}','{$_POST['college']}',{$_POST['howtech']},'{$_POST['others']}',{$_POST['publitime']},{$_POST['aware']},{$_POST['enought']},'{$_POST['participate']}','{$_POST['impression']}','{$_POST['comp']}','{$_POST['noncomp']}',{$_POST['viapost']},{$_POST['learnex']},{$_POST['entertainment']},{$_POST['organisation']},{$_POST['level']},{$_POST['canteen']},{$_POST['overall']},'{$_POST['again']}',{$_POST['pref']},'{$_POST['acco']}','{$_POST['suggest']}')";                                                                                                      
$result=mysql_query($query); 
echo mysql_error();
	
	
	
	
	echo "<p>Your Form has been Submitted.</p>";
	echo "<p>Thank You for giving your valuable feedback.See you at Techfest 2006.</p>";
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>";
	echo_content("footer.txt");
?>