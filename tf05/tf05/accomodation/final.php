<?php

$dbhost = '66.98.128.63';
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
	$l=mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Mysql Database Connect Failed : " . mysql_error());
	mysql_select_db($dbname) or die("Database select failed : " . mysql_error());
	$regnum=$_POST['regnum'];
	$len=strlen($regnum);
	//echo "{$regnum}";
	$regnum=strtoupper($regnum);
//	echo "{$regnum}";
	$code=substr($regnum,0,4);
//	echo "{$code}and";
	$num=substr($regnum,4);
	//echo "{$num}";
	$query="SELECT * FROM code WHERE code='{$code}'";
	$result=mysql_query($query);
	$row=mysql_fetch_row($result);
	//echo "{$_POST['males']}";
	
	$query1="SELECT * FROM complist2k5 WHERE name='{$row[1]}'";
	$result1=mysql_query($query1);
	if (mysql_num_rows($result1)==1)
	{
	$row1=mysql_fetch_row($result1);
	$filename=$row1[1];
	$flag="cp";
	}
	else
	{
	$query2="SELECT * FROM wslist2k5 WHERE name='{$row[1]}'";
	$result2=mysql_query($query2);
	$row2=mysql_fetch_row($result2);
	$filename=$row2[1];
	$flag="ws";
	}
	//echo "{$flag}";
	//echo "{$filename}";
	echo "<html><head><title>Accommodation</title></head>";
	echo "<body><font size=+2 face=Times New Roman> ";
	$query="SELECT * FROM {$filename} WHERE Regnum={$num}";
	$result=mysql_query($query);
	echo mysql_error();
	if (!($row=mysql_fetch_row($result)))
	{ 		
				echo mysql_error();
				echo "No team of such Registration number exist";
			
	}
	else
	{   
			$query1="SELECT * FROM partacco_data";
			$result1=mysql_query($query1);
			
			$file=fopen("./recipt.txt","r");
			$serial=fgets($file,1024);
			$str=$serial+1;			
			fclose($file);
			$file=fopen("./recipt.txt","w");
			fwrite($file,$str);
			fclose($file);


/*			$flag=0;
			while ($flag==0)
			{
				$query2="SELECT * FROM partacco_data WHERE receiptno={$serial}";
				$result2=mysql_query($query2);
				$n=mysql_num_rows($result2);
				if ($n==0)
				{
					 $flag=1;
				}
				else 
				{
					$serial++;
				}
				
			}
*/
			//echo "{$serial}";
			$query3="INSERT INTO partacco_data VALUES ({$serial},'{$regnum}','{$row[1]}','{$row[3]}',{$_POST['males']},{$_POST['females']},'{$_POST['locationm']}','{$_POST['locationf']}')";
			$result3=mysql_query($query3);
				 		
				echo "<br><table border=0 width=100%>";
				echo "<tr><td 
width=10%></td><td><center><font size=+2><u>Accommodation Receipt</u></font></center></td><td width=10%></td></tr>";
				echo "<tr><td width=10%></td><td>Receipt Number        : {$serial}</td><td width=10%></td></tr>";
				echo "<tr><td width=10%></td><td>Name of the college    : {$row[3]}</td><td width=10%></td></tr><br>";
				echo "<tr><td width=10%></td><td>Registration number   : {$regnum}</td><td width=10%></td></tr><br>";
				echo "<tr><td width=10%></td><td>Team Leader           : {$row[1]}</td><td width=10%></td></tr><br>";
				echo "<tr><td width=10%></td><td>Team member           :</td><td width=10%></td></tr>";
				
				
				$total=$_POST['males']+$_POST['females'];
				$rs=$total*250;
				$q=50*$total;
				$s=200*$total;
				echo "<tr><td width=10%></td><td><br><center><table border=1 bordercolor=black width=250>";
				echo "<tr><td width=50>&nbsp;</td><td width=25>Number</td><td>Place Alloted</td></tr>";
				echo "<tr><td width=50>Boys</td><td width=25>{$_POST['males']}</td><td>{$_POST['locationm']}&nbsp;</td></tr>";
				echo "<tr><td width=50>Girls</td><td width=25>{$_POST['females']}</td><td>{$_POST['locationf']}&nbsp;</td></tr>";
				echo "</table></center></tr></td><td width=10%></td>";
				//echo "";
				echo "<tr><td width=10%></td><td><h3>Money Received :</h3></td><td width=10%></td></tr><br>";
				echo "<tr><td width=10%></td><td><center><table border=1 bordercolor=black width=300>";
				echo "<tr><td width=100>Refundable</td><td width=100>50 x {$total}</td><td>{$q}</td></tr>";
				echo "<tr><td width=100>Non-Refundable</td><td width=100>200 x {$total}</td><td>{$s}</td></tr>";
				echo "<tr><td width=100>Total</td><td width=100>250 x {$total}</td><td>{$rs}</td></tr>";
				echo "</table></center><tr><td width=10%></td><td>";
				echo "<tr><td width=10%></td><td>Date :";
 				echo date("l dS of F Y ");
 				echo "<tr><td width=10%></td><td>Time :";
 				echo date("h:i:s A");
				echo "<tr><td width=10%></td><td>";
				echo "<tr><td width=10%></td><td>Accomodation Desk Phone Number: 8967";
 				echo "&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "For Techfest 2005<br><tr><td width=10%></td><td>";
				echo "</td><td width=10%></td></tr></table></font>  ";
				echo "<hr color=black><p>";
				echo "Please note the following carefully:<br>";
				echo "1. Kindly vacate all rooms by 10:00 a.m. on 31st January, 2005.<br>";
				echo "2. Carry this receipt with you at all times and for collecting your security deposits at time of check-out.<br>";
				echo "3. Ensure that all Identity cards issued by us have an “Accommodation confirmation” stamp on them. Identity cards have to be carried and produced whenever asked. Heavy fines shall be imposed in case somebody is found staying without an authentic Identity card.<br>";
				echo "4. Please take care of the rooms and mattresses given to you. Do not light any mosquito coils and cigarettes. <br>";
				echo "5. As per the Institute rule, you are not allowed to visit the residences of the opposite sex from 10 p.m.- 7 a.m.<br>";
				echo "6. Most of the places of residence being in the faculty residential area; you are required to maintain decorum during your stay at Techfest 2005. <br>";
				echo "7. Consumption and/or possession of alcohol is strictly prohibited inside the institute campus.<br>";
				echo "8. All the participants have to collect their certificates and prizes during the fest itself. No queries shall be entertained thereafter. <br>";
				echo "9. We hope you have a memorable stay at Techfest 2005. In case of any queries, feel free to talk to us. <br>";
				echo "</p></body></html>";
			
		}
				?>
