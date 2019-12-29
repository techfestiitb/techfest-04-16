<?php

		$count=0;
		$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		
		$fh=fopen("mail_confirm.txt",'r');
		$contents=file("mail_confirm.txt");
		
		for ($i=0;$i<count($contents);$i++)
		{
			$tmp=explode("\n",$contents[$i]);
			$contents[$i]=$tmp[0];
			$contents[$i]=strtoupper($contents[$i]);
			echo $contents[$i]."<br>";
			$contents[$i]=trim($contents[$i]);
			
			$len=strlen($contents[$i]);
			$code=substr($contents[$i],0,2);
			$num=trim(substr($contents[$i],4));
			if ($code!='SC')
			{
				$k1=1;
				$k3=1;
				$k2=2;
				$nop2=0;
				$query="SELECT * FROM events2k6 WHERE Code='{$code}'";
				$result=mysql_query($query);
				echo mysql_error();
				$row=mysql_fetch_row($result);
				$nop=$row[3];
				$tbl=$row[1];
				$tbl=trim($tbl);
				$query2="SELECT * FROM {$tbl} WHERE Regnum='{$num}'";
				$result2=mysql_query($query2);
				$row2=mysql_fetch_row($result2);
				for ($j=0;$j<$nop;$j++)
				{
					
					if ($row2[$k1]!="")
					{
					
						$nop2++;
					}
					$k1=$k1+4;
				
					echo "nop2=".$nop2."<br> k1=".$k1."<br> $row2k=".$row2[$k1];
				
				
				}
				echo "nop2=".$nop2."<br>";
				for ($j=0;$j<$nop2;$j++)
				{
					
					$k3=5;
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
					$headers .= "From: Techfest 2006<info@techfest.org>\r\n";
					$headers .= "Reply-To: info@techfest.org\r\n";
					$sub = "Techfest 2006 - Accomodation";
					$mes= "\r\nRegistration number: ".$contents[$i];
					$mes .= "\r\nName of Team Leader: ".$row2[1];
					$mes .= "\r\nNo. of Members: ".$nop2;
					if ($nop2>1)
					{
						$mes .= "\r\nName of Team members: ";
						for ($f=1;$f<$nop2;$f++)
						{
							$mes .= "\r\n".$row2[$k3];
							$k3=$k3+4;
							
						}
					}
					
					$mes .= "\r\n\r\nYour accommodation has been confirmed at Techfest '06. You will receive further instructions on January 8, 2006.

Thank you.

Robin Daultani
Manager, Assistance and Hospitality
Techfest '06";



					$h = mail($row2[$k2], $sub, $mes, $headers);
					if ($h)
					echo "<br>Sending mail to ".$row2[$k2]."<br>";
					$k2=$k2+4;
					
				
				
				}
								
				
			}
			
			else 
			{
			
			echo "error! invalid registration number ".$contents[$i];
			}
			
			
			if ($count==25)
			{
			
			sleep(1);
			$count=0;
			}
			
		}
		
		
		
		
		
		
		
		
		
		
		
?>