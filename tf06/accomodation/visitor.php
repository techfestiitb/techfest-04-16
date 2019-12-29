<?php 
		$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	
	echo "<html><head><title>Accommodation</title></head>";
	echo "<body><font size=+2 face=Times New Roman> ";
		
			$query1="SELECT * FROM visitor_data";
			$result1=mysql_query($query1);

			$file=fopen("./receipt.txt","r");
			$serial=fgets($file,1024);
			$str=$serial+1;
			fclose($file);
			$file=fopen("./receipt.txt","w");
			fwrite($file,$str);
			fclose($file);
			$details=addslashes(trim($_POST['details']));
			$query3="INSERT INTO visitor_data VALUES ({$serial},'{$_POST['leader']}','{$_POST['college']}',{$_POST['males']},{$_POST['females']},'{$details}')";
			$result3=mysql_query($query3);
					
			
			  echo "<br><br><table border=0 width=100%>";
			  echo "<tr><td 
width=10%></td><td><center><u><font size=+2>Accommodation Receipt</u></font></center></td><td width=10%></td></tr>";
				echo "<tr><td width=10%></td><td>Receipt Number        : {$serial}</td><td width=10%></td></tr>";
				echo "<tr><td width=10%></td><td>Name of 
the college    : {$_POST['college']}</td><td width=10%></td></tr><br>";
				echo "<tr><td width=10%></td><td>Registration number   : NA</td><td width=10%></td></tr><br>";
				echo "<tr><td width=10%></td><td>Team Leader           : {$_POST['leader']}</td><td width=10%></td></tr><br>";
				
				$total=$_POST['males']+$_POST['females'];
				
				echo "<tr><td width=10%></td><td>Team Member           : {$total}</td><td width=10%></td></tr>";
								
				
				$rs=$total*250;
				$q=50*$total;
				$s=200*$total;
				echo "<tr><td width=10%></td><td><br><center><table border=1 bordercolor=black width=250>";
				echo "<tr><td width=50>&nbsp;</td><td width=25>Number</td><td>Place Alloted</td></tr>";
				echo "<tr><td width=50>Boys</td><td width=25>{$_POST['males']}</td><td>{$_POST['locationm']}&nbsp;</td></tr>";
				echo "<tr><td width=50>Girls</td><td width=25>{$_POST['females']}</td><td>{$_POST['locationf']}&nbsp;</td></tr>";
				echo "</table></center></tr></td><td width=10%></td>";
				//echo "";
				echo "<tr><td width=10%></td><td><h3>Money Received :</h3></td><td width=10%></td></tr>";
				echo "<tr><td width=10%></td><td><center><table border=1 bordercolor=black width=300>";
				echo "<tr><td width=100>Refundable</td><td width=100>50 x {$total}</td><td>{$q}</td></tr>";
				echo "<tr><td width=100>Non-Refundable</td><td width=100>200 x {$total}</td><td>{$s}</td></tr>";
				echo "<tr><td width=100>Total</td><td width=100>250 x {$total}</td><td>{$rs}</td></tr>";
				echo "</table></center><tr><td width=10%></td><td><br>";
				echo "<tr><td width=10%></td><td>Date :";
 				echo date("l dS of F Y ");
 				echo "<tr><td width=10%></td><td>Time :";
 				echo date("h:i:s A");
				echo "<tr><td width=10%></td><td>";
				echo "<tr><td width=10%></td><td>Accomodation Desk Phone Number: 8967";
 				echo "&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
				echo "For Techfest 2005<br><tr><td width=10%></td><td>";

				echo "</td><td width=10%></td></tr></table></font><font face=Times New Roman>";
				echo "<hr color=black><p>";
				echo "Please note the following carefully:<br>";
				echo "1. Kindly vacate all rooms by 10:00 a.m. on 31st January, 2005.<br>";
echo "2. Carry this receipt with you at all times and for collecting your security deposits at time of check-out.<br>";
echo "3. Ensure that all Identity cards issued by us have an “Accommodation confirmation” stamp on them. Identity cards have to be carried and produced whenever asked. Heavy fines shall be imposed in case somebody is found staying without an authentic Identity card.<br>";
echo "4. Please take care of the rooms and mattresses given to you. Do not light any mosquito coils and cigarettes. <br>";
echo "5. As per the Institute rule, you are not allowed to visit the residences of the opposite sex from 10 p.m.- 7 a.m. <br>";
echo "6. Most of the places of residence being in the faculty residential area; you are required to maintain decorum during your stay at Techfest 2005. <br>";
echo "7. Consumption and/or possession of alcohol is strictly prohibited inside the institute campus.<br>";
echo "8. All the participants have to collect their certificates and prizes during the fest itself. No queries shall be entertained thereafter. <br>";
echo "9. We hope you have a memorable stay at Techfest 2005. In case of any queries, feel free to talk to us. <br>";

				
				echo "</p></font></body></html>";