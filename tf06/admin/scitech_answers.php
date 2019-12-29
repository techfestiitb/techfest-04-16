<?
		include_once("./validate.php");
		$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		$t=trim($_GET['t']);
		$query="SELECT * FROM scitech_answers WHERE Username='{$t}'";
		$result=mysql_query($query);
		?>
		<html>
			<head><title>SciTech Answers</title></head>
			<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
			<br><br><br><br><br>
			<style type="text/css">
			a {color:#FFFFFF; text-decoration:none;}
			a:link {color:#FFFFFF; text-decoration:none;}
			a:visited {color:#FFFFFF; text-decoration:none;}
			a:hover {color:#D0D0D0; text-decoration:underline;}
			</style>
			
		<?
		
		while ($row=mysql_fetch_row($result))
		{
			$query1="SELECT * FROM scitech WHERE Username='{$t}'";
			$result1=mysql_query($query1);
			$row1=mysql_fetch_row($result1);
			$timein=trim($row1[4]);
			$datein=trim($row1[5]);
			$timeout=trim($row1[6]);
			$dateout=trim($row1[7]);
			$in=explode(":",$timein);
			$out=explode(":",$timeout);
			
			if ($datein==$dateout)
			{
				if ($in[0]==$out[0])
				{
					$min=$out[1]-$in[1];
					$hr=0;
					
				}
				else if ($out[0]>$in[0])
				{
					if ($out[1]>=$in[1])
					{
						
						$hr=$out[0]-$in[0];
						$min=$out[1]-$in[1];
					}
					else 
					{
						$hr=$out[0]-$in[0]-1;
						$min=(60-$in[1]) + $out[1];
					
					}
				
				}
			
			}
			else if ($dateout>$datein)
			{
				$hr=$out[0];
				$min=$out[1];
				if ($in[0]==23)
				{
					$min+=(60-$in[1]);
				
				}
				if ($in[0]==22)
				{
					$hr+=1;
					$min+=(60-$in[1]);
				}
				else 
				echo "error<br>";
				if ($min>=60)
				{
					$tmp=$min%60;
					$n=($min-$tmp)/60;
					$hr+=$n;
					$min=$tmp;
				
				
				}
						
			
			
			
			}
		
		?>
		
			
			<p>Following are the answers submitted by team <strong><? print $row[0]; ?></strong></p>
			<p>Team took <? print $hr;?> hrs and <? print $min;?> mins to answer the questionnaire.</p>
			<p>[10 points]</p>
			<p><strong>1) </strong>The ominous sight of the sea serpent caused the crew to prepare for battle. 
			As the monster reared its head alongside the ship, all hands fought vliantly. 
			The sea serpent was finally forced to retreat, and it fled the area. Among the 
			Captain and his four mates, two fought with muskets, two fought with cutlasses, 
			and one fought with a dagger. From the two statements below, which pirates 
			fought with which weapons?<br>
			<br>
			1. Long John fought using a musket, unless Will Kidd did not fight using a 
			dagger.<br>
			2. Black Jack fought using a cutlass, unless Captain Lafoot did not fight using 
			a dagger.<br>
			3. If Red Beard fought using a musket, then Long John fought using a cutlass.<br>
			4. If Captain Lafoot did not fight using a cutlass, then Red Beard fought using 
			a cutlass and Long John fought using a dagger.<br>
			5. Will Kidd fought using a dagger, unless neither Red Beard nor Long John 
			fought using a cutlass.<br>
			6. If Will Kidd fought using a musket, then Captain Lafoot did not fight using 
			either a musket or a cutlass.<br>
			7. If Black Jack fought using a dagger, then neither Red Beard nor Captain 
			Lafoor fought using a cutlass.</p>
			
			<p>Ans: <textarea name="1" rows="5" cols="80"><? print $row[1];?></textarea></p><br><br>
			
			<hr>
			<p>[10 points]</p>
			<p><strong>2) </strong>In the land of liars the inhabitants are all liars, but not all the time. 
			There are those who speak the truth in the morning and lie in the afternoon. The 
			inhabitants in this group are known as Amtrus. There are also those who speak 
			the truth in the afternoon and lie in the morning. The inhabitants in this group 
			are known as Pemtrus. Four inhabitants make the statements below. As to their 
			group or groups, little is known except that B and C are not both Amtrus.<br>
			<br>
			A. If asked, B would say that he and D belong to the same group.<br>
			B. If asked, D would say that he and A do not belong to the same group.<br>
			C. A and I are both Pemtrus.<br>
			D. If asked, A would say that he and C do not belong to the same group.<br>
			<br>
			Is it morning or afternoon, and to what group or groups do the four speakers 
			belong?</p>
			
				<p>Ans: <textarea name="2" rows="5" cols="80"><? print $row[2];?></textarea></p><br>
			
			<hr>
			<p>[7 points]</p>
			<p><strong>3) </strong>The goblins held a festival each autumn and there was much feasting and many 
			contests. At one such time, Ekum, Elfum, Eskum, Evum each won a first place in 
			one of the four events: acorn gathering, dancing, singing and huckleberry 
			eating; not necessarily in that order. Curiously, each winner also won a second 
			place and a third place in two other of these four events. From the statements 
			below, who won first place, who won the second place and who won the third place 
			in each of the four events?<br>
			<br>
			1. The one who placed second in huckleberry eating was third in dancing.<br>
			2. The winner of the singing contest placed third in huckleberry eating.<br>
			3. Evum did not place first in acorn gathering or dancing.<br>
			4. Evum was a close second place behind Eskum in one of the four events.<br>
			5. Elfum placed third in singing, but did not place in acorn gathering and was 
			not first in dancing.</p>
			<p>Ans: <textarea name="3" rows="5" cols="80"><? print $row[3];?></textarea></p><br>
			<hr>
			<p>[8 points]</p>
			<p><strong>4) </strong>The following puzzle may seem absurd and may not rely on any facts of which 
			we have knowledge. There is logic in them, however, if you can assume that the 
			statements are valid. Can you uncover the inference in this puzzle?<br>
			<br>
			1. Neighbours make good fences.<br>
			2. Purple popcorn can only be eaten in specially designated places.<br>
			
			3. No angler can be considered a true angler who is not a stripped otter that 
			does not fish with other than wolly worms.<br>
			4. No mammal that has not attended the Hayberry Island Culinary Institute can be 
			certified chef.<br>
			5. No mammal stands on fences.<br>
			6. Graduates of the Hayberry Island Culinary Institute make purple popcorn.<br>
			7. Only true anglers recieve invitations to good fences.<br>
			8. Platypuses that are neighbours are certified chefs.<br>
			9. Good fences are the places to sit and eat popcorn by invitation.<br>
			10. Striped otters have a variety of fishing lures from which to select.<br>
			11. Platypuses do not eat sitting down.</p>
			<p>Ans: <textarea name="4" rows="5" cols="80"><? print $row[4];?></textarea></p><br>
			<hr>
			<p>[3 points]</p>
			<p><strong>5) </strong>Identify the picture.</p>
			<p><img border="0" src="1.jpg" width="200" height="196"></p>
			<p>Ans: <textarea name="5" rows="5" cols="80"><? print $row[5];?></textarea></p><br>
			<hr>
			<p>[4 points]</p>
			<p><strong>6) </strong>This is not a torture device. Identify this weird-looking ergonomic device 
			that looks like a dentist’s chair.</p>
			<p><img border="0" src="torture.jpg" width="230" height="387"></p>
			<p>Ans: <textarea name="6" rows="5" cols="80"><? print $row[6];?></textarea></p><br>
			<hr>
			<p>[3 points]</p>
			<p><strong>7) </strong>There is a small computer present inside this guitar. What is the purpose of 
			the computer and the specialty of this guitar?</p>
			<p><img border="0" src="guitar.jpg" width="208" height="250"></p>
			<p>Ans: <textarea name="7" rows="5" cols="80"><? print $row[7];?></textarea></p><br>
			
			<hr>
			<p>[2 points]</p>
			<p><strong>8) </strong>This picture is the logo of a <i>latest</i> product. Identify this product 
			whose predecessor was very popular.</p>
			<p><img border="0" src="logo.jpg" width="200" height="183"></p>
			<p>Ans: <textarea name="8" rows="5" cols="80"><? print $row[8];?></textarea></p><br>
			<hr>
			<p>[2 points]</p>
			<p><strong>9) </strong>Write a word which connects the man in the first picture with the animated 
			movie in the second.</p>
			<p><img border="0" src="2.jpg" width="379" height="273"></p>
			<p><img border="0" src="3.jpg" width="300" height="225"></p>
			<p>Ans: <textarea name="9" rows="5" cols="80"><? print $row[9];?></textarea></p><br>
			<hr>
			<p>[5 points]</p>
			<p><strong>10) </strong>Player A has n+1 coins, while player B has n coins.&nbsp; Both players throw all 
			of their coins simultaneously and observe the number that come up heads.&nbsp; 
			Assuming all the coins are fair, what is the probability that A obtains more 
			heads than&nbsp;B?</p>
			<p>Ans: <textarea name="10" rows="5" cols="80"><? print $row[10];?></textarea></p><br>
			<hr>
			<p>[3 points]</p>
			<p><strong>11) </strong>Google decorated its homepage with the following image as a tribute to 
			someone on his birthday. Identify him.</p>
			<p><img border="0" src="google.gif" width="320" height="135"></p>
			<p>Ans: <textarea name="11" rows="5" cols="80"><? print $row[11];?></textarea></p><br>
			<hr>
			<p>[4 points]</p>
			<p><strong>12) </strong>Identify the structure in the picture.</p>
			<p><img border="0" src="4.jpg" width="500" height="279"></p>
			<p>Ans: <textarea name="12" rows="5" cols="80"><? print $row[12];?></textarea></p><br>
			<hr>
			<p class="MsoNormal">[2 points]</p>
			<p class="MsoNormal"><strong>13) </strong>Find the odd one out and explain: Planck constant, 
			Basic electronic charge, Magnetic permeability of free space, Stefan Boltzmann 
			constant, Gravitational constant.</p>
			<p>Ans: <textarea name="13" rows="5" cols="80"><? print $row[13];?></textarea></p><br>
			
			<hr>
			<p>[5 points]</p>
			<p><strong>14) </strong>The top angle of the triangle is 60 degrees. The radii of the circles are as 
			shown. If the combined area of the grey areas is 'A' sq. units, then find the 
			area of the blue region.</p>
			<p><img border="0" src="5.JPG" width="295" height="305"></p>
			<p>Ans: <textarea name="14" rows="5" cols="80"><? print $row[14];?></textarea></p><br>
			
			

<?
		}

?>