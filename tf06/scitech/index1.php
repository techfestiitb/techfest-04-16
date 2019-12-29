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
echo_content("side_scitech.txt");
echo_content("side_update.txt");
if ($_POST['submit']=="")
{
?>
	<div id="content">
	<h1>SciTech: College Quiz Challenge Online Elimination</h1>
	<h3>Instructions</h3>
	<p>1) The Question paper set has to be submitted within 2 hours of logging in. Marks will be deducted for late submission.</p>
	<p>2) We will shortlist the top 32 teams participating online based on the merit achieved in this quiz. You are free to use any means you like to solve this quiz including internet etc.</p>
	<p>3) Use the Username and Password sent to teams by email on 27th Dec. 2005. If any team hasn't received them as yet no cribs will be entertained.</p>

	<br><br><br>
	<form method="post" action="">
	<table width="500" cellpadding="5" border="0">
	<tr><td>Username: </td><td><input type="text" name="user" size="35"></td></tr>
	<tr><td>Password: </td><td><input type="password" name="pass" size="35"></td></tr>
	</table>
	<p><input type="submit" name="submit" value="Login"></p>
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	<?
}
else if ($_POST['submit']=="Login")
{
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$user=trim($_POST['user']);
	$pass=trim($_POST['pass']);
	$query="SELECT  * FROM scitech WHERE Username='{$user}' AND Password='{$pass}'";
	$result=mysql_query($query);
	$n=mysql_num_rows($result);
	if ($n==0)
	{
?>
		<div id="content"><h1>SciTech: College Quiz Challenge Online Elimination</h1><p>Invalid Access! Check the username and password you have entered.</p>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
<?
		exit;
	}
	else if ($n==1)
	{	
	
		$query2="SELECT * FROM scitech WHERE Username='{$user}' AND Password='{$pass}' WHERE (timein IS NULL) AND (datein IS NULL)";
		$result2=mysql_query($query2);
		$nof=mysql_num_rows($result2);
		if ($nof==1)
		{
		?>
			<div id="content"><h1>SciTech: College Quiz Challenge Online Elimination</h1><p>The time for login has expired.</p>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<?
			exit;
		}
		
		$query1="SELECT * FROM scitech WHERE Username='{$user}' AND Password='{$pass}'";
		$result1=mysql_query($query1);
		echo mysql_error();
		$row1=mysql_fetch_row($result1);
		
		if ($row1[3]==1)
		{
			?>
			<div id="content"><h1>SciTech: College Quiz Challenge Online Elimination</h1><p>Invalid Access! Your team has already filled the questionnaire.</p>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<?
			exit;
			
		}
		if ($row1[2]==0)
		{
			$time=date('H:i:s');
			$date=date('j');
			$query2="UPDATE scitech SET open=1,timein='{$time}',datein={$date} WHERE Username='{$user}'";
			$result2=mysql_query($query2);
			echo mysql_error();
			if (!$result2)
			{
				?>
				<div id="content"><p><strong>Error 20:</strong> Report this error number to <strong>scitech@techfest.org</strong> team.</p>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</div>
				<?
				exit;
			}
			
		}
		
?>
		<div id="content">
		<h1>SciTech Online Elimination</h1>
		
		<form method="post" action="">
		
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
		
		<p>Ans: <textarea name="1" rows="5" cols="80"></textarea></p><br><br>
		
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
		
			<p>Ans: <textarea name="2" rows="5" cols="80"></textarea></p><br>
		
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
		<p>Ans: <textarea name="3" rows="5" cols="80"></textarea></p><br>
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
		<p>Ans: <textarea name="4" rows="5" cols="80"></textarea></p><br>
		<hr>
		<p>[3 points]</p>
		<p><strong>5) </strong>Identify the picture.</p>
		<p><img border="0" src="1.jpg" width="200" height="196"></p>
		<p>Ans: <textarea name="5" rows="5" cols="80"></textarea></p><br>
		<hr>
		<p>[4 points]</p>
		<p><strong>6) </strong>This is not a torture device. Identify this weird-looking ergonomic device 
		that looks like a dentist’s chair.</p>
		<p><img border="0" src="torture.jpg" width="230" height="387"></p>
		<p>Ans: <textarea name="6" rows="5" cols="80"></textarea></p><br>
		<hr>
		<p>[3 points]</p>
		<p><strong>7) </strong>There is a small computer present inside this guitar. What is the purpose of 
		the computer and the specialty of this guitar?</p>
		<p><img border="0" src="guitar.jpg" width="208" height="250"></p>
		<p>Ans: <textarea name="7" rows="5" cols="80"></textarea></p><br>
		
		<hr>
		<p>[2 points]</p>
		<p><strong>8) </strong>This picture is the logo of a <i>latest</i> product. Identify this product 
		whose predecessor was very popular.</p>
		<p><img border="0" src="logo.jpg" width="200" height="183"></p>
		<p>Ans: <textarea name="8" rows="5" cols="80"></textarea></p><br>
		<hr>
		<p>[2 points]</p>
		<p><strong>9) </strong>Write a word which connects the man in the first picture with the animated 
		movie in the second.</p>
		<p><img border="0" src="2.jpg" width="379" height="273"></p>
		<p><img border="0" src="3.jpg" width="300" height="225"></p>
		<p>Ans: <textarea name="9" rows="5" cols="80"></textarea></p><br>
		<hr>
		<p>[5 points]</p>
		<p><strong>10) </strong>Player A has n+1 coins, while player B has n coins.&nbsp; Both players throw all 
		of their coins simultaneously and observe the number that come up heads.&nbsp; 
		Assuming all the coins are fair, what is the probability that A obtains more 
		heads than&nbsp;B?</p>
		<p>Ans: <textarea name="10" rows="5" cols="80"></textarea></p><br>
		<hr>
		<p>[3 points]</p>
		<p><strong>11) </strong>Google decorated its homepage with the following image as a tribute to 
		someone on his birthday. Identify him.</p>
		<p><img border="0" src="google.gif" width="320" height="135"></p>
		<p>Ans: <textarea name="11" rows="5" cols="80"></textarea></p><br>
		<hr>
		<p>[4 points]</p>
		<p><strong>12) </strong>Identify the structure in the picture.</p>
		<p><img border="0" src="4.jpg" width="500" height="279"></p>
		<p>Ans: <textarea name="12" rows="5" cols="80"></textarea></p><br>
		<hr>
		<p class="MsoNormal">[2 points]</p>
		<p class="MsoNormal"><strong>13) </strong>Find the odd one out and explain: Planck constant, 
		Basic electronic charge, Magnetic permeability of free space, Stefan Boltzmann 
		constant, Gravitational constant.</p>
		<p>Ans: <textarea name="13" rows="5" cols="80"></textarea></p><br>
		
		<hr>
		<p>[5 points]</p>
		<p><strong>14) </strong>The top angle of the triangle is 60 degrees. The radii of the circles are as 
		shown. If the combined area of the grey areas is 'A' sq. units, then find the 
		area of the blue region.</p>
		<p><img border="0" src="5.JPG" width="295" height="305"></p>
		<p>Ans: <textarea name="14" rows="5" cols="80"></textarea></p><br>
		
		<input type="hidden" name="teamcode" value="<? print $user;?>">
		<input type="submit" name="submit" value="submit">
		</form>
		</div>
<?
	}
	else 
	{
		?>
		<div id="content"><h1>SciTech Online Elimination</h1>
		<p><strong>Error 21</strong>: Report this error number to <strong>scitech@techfest.org</strong> team.</p>
		<br><br><br><br><br><br><br><br>
		</div>
		<?
	}

}
else if ($_POST['submit']=="submit")
{
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$ans1=addslashes($_POST['1']);
	$ans2=addslashes($_POST['2']);
	$ans3=addslashes($_POST['3']);
	$ans4=addslashes($_POST['4']);
	$ans5=addslashes($_POST['5']);
	$ans6=addslashes($_POST['6']);
	$ans7=addslashes($_POST['7']);
	$ans8=addslashes($_POST['8']);
	$ans9=addslashes($_POST['9']);
	$ans10=addslashes($_POST['10']);
	$ans11=addslashes($_POST['11']);
	$ans12=addslashes($_POST['12']);
	$ans13=addslashes($_POST['13']);
	$ans14=addslashes($_POST['14']);
	

		$query1="SELECT  * FROM scitech WHERE Username='{$_POST['teamcode']}'";
		$result1=mysql_query($query1);
		$row1=mysql_fetch_row($result1);
		if ($row1[3]==1)
		{
			?>
			<div id="content">
			<h1>SciTech Online Elimination</h1>
			<p><strong>Invalid Access!</strong> Your team has already filled the questionnare.</p>
			<br><br><br><br><br><br><br><br>
			</div>
			<?
			exit;
			
		}
	
	$query="INSERT INTO scitech_answers VALUES ('{$_POST['teamcode']}','{$ans1}','{$ans2}','{$ans3}','{$ans4}','{$ans5}','{$ans6}','{$ans7}','{$ans8}','{$ans9}','{$ans10}','{$ans11}','{$ans12}','{$ans13}','{$ans14}')";
	$result=mysql_query($query);
	if ($result)
	{
		$time=date('H:i:s');
		$date=date('j');
		$query1="UPDATE scitech SET submit=1,timeout='{$time}',dateout={$date} WHERE Username='{$_POST['teamcode']}'";
		$result1=mysql_query($query1);
		if (!$result1)
		{
			?>
			<div id="content"><p><strong>Error 22</strong>: Report this error number to <strong>scitech@techfest.org</strong> team.</p>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<?
			exit;
		
		
		}
		?>
		<div id="content">
		<h1>SciTech Online Elimination</h1>
		<p>Your form has been submitted. The results will be declared on <strong>31st December 2005</strong>.</p>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		<?
		
	}
	else 
	{
	?>
		<div id="content">
		<h1>SciTech Online Elimination - Error</h1>
		<p><strong>Error 23</strong>: Your form could not be submitted. Report this error number to <strong>scitech@techfest.org</strong> team.</p>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		<?
		exit;
	
	}

}

echo_content("footer.txt");
?>
