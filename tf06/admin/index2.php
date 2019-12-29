<?php


	$user=$_POST['username'];
	$passwd=$_POST['password'];
	ob_start();
	if (($user=="Admin")&&($passwd=="enigma"))
	{
	 	
		$t=setcookie("Cookie","admin",time()+3600,"/");
		if(!$t){
		echo "Ur, browser is creating problem";	
		}
		else
		{
		?>
			<html>
			<head>
			<title>Techfest '06 Admin page</title>
			<link rel="stylesheet" href="./css/style.css" media="screen">
			</head>
			<body>
			<br><br>
			<div style="float:right; color:white; "><a href="logout.php">Logout</a></div>
			<br><br><br><br><br><br><br><br><br><br><br><br>
			<center>
			<table width="80%" align="leftr" border="0" cellpadding="5" cellspacing="5" style="font-size:11px; ">
			<tr><td align="left"><a href="./temp.php">Browse Through the database</a></td><td align="left"><a href="./registration.php">View Registrations</a></td></tr>
			<tr><td align="left"><a href="./mailpart.php">Send mail to participants</a></td><td align="left"><a href="./edittable.php">Edit the registration database</a></td></tr>
			<tr><td align="left"><a href="./list_iterations.php">SciTech: Answers</a></td><td align="left"><a href="./shortlist.php">Create Shortlist</a></td></tr>
			<tr><td align="left"><a href="./view_shortlist.php">View and mail shortlisted candidates</a></td><td align="left"><a href="connecting_update.php">Update Connecting top 5 (avsc)</a></tr>
			<tr><td align="left"><a href="./codec_score.php">Codec: Answered Questionnaires</a></td><td align="left"><a href="grey_circuits_scores.php">Grey Circuits: Answered Questionnaire</a></tr>
			
			</table>
			
			</body>
			</html>
			<?
		
		}
	}
	else
	{
	 	echo "Wrong Username or password. Please Login Again. <a href=./index.php>Click Here</a> to go back.";
		exit;
	}
?>