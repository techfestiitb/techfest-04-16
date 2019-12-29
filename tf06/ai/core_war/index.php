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
echo_content("side_core.txt");
echo_content("side_update.txt");
?>

<div id="content">
<h1 id="toptext">Core War</h1> 
<p>"They will gather intelligence, lay false trails and strike at their opponents suddenly and with determination." </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	A. K. Dewdney</p>
<p><strong>UPDATE:</strong> For &quot;The King of The Hill&quot; and top 5 warriors click <a href="top_five.php">here</a>.</p>
<p>It all started with an article by Dewdney in Scientific American in 1984 which led to the Core War, a game where programmers fought to kill each other.</p>
<p>Core War is a game played by two or more programs (and vicariously by their authors) written in an assembly language called Redcode and run on a virtual computer called MARS (Memory Array Redcode Simulator). The object of the game is to cause all processes of the opposing program to terminate (kill), leaving your program in sole possession of the machine.</p>
<p>The hills provide the typical battleground for Redcode programs. When a warrior is submitted to a hill, it fights against the warriors currently on the hill. It scores according to the total number of wins, losses and ties. The challenger will enter the hill if its score is higher than the lowest achieved by a current hill warrior. The lowest scoring warrior will then be pushed off.</p>
<p>The warrior that stays at the top at the end of a series of battles will be “<strong>The King of the Hill</strong>” and will win a <strong>cash prize of Rs 1500</strong>. </p>
<h1>Redcode</h1>
<p>Redcode is the assembly language comprising of a small set of instructions understood by the Simulator. For, this competition the version of Redcode used is the current de facto standard, the ICWS '94 Standard Draft with pMARS 0.8 extensions.</p>
<p>For details on the language and a complete tutorial visit <a href="http://vyznev.net/corewar/guide.html">http://vyznev.net/corewar/guide.html</a></p>
<h1>Simulator</h1>
<p>The simulator used for this competition is A.R.E.S. (Active Redcode Elaboration System). To download the emulator click <a href="./ares.zip">here</a> or visit <a href="http://harald.ist.org/ares/">http://harald.ist.org/ares/</a> .The version of A.R.E.S. is 2.27b. </p>
<h1>The Hill</h1>
<p>The hill refers to the environment(parameter values) in which the warriors (the programs) battle each other.The hill used for this competition is a modified version of ICWS '94 Draft Hill with following specifications:</p>
<table width="90%" border="0" cellpadding="5" cellspacing="10">
<tr><td><strong>CORESIZE</strong>(size of the core memory)</td><td>8000</td></tr>
<tr><td><strong>PSPACESIZE</strong>(the size of the P-space) </td><td>500</td></tr>
<tr><td><strong>MAXCYCLES</strong> (the number of cycles until a tie is declared)</td><td>80000</td></tr>
<tr><td><strong>MAXPROCESSES</strong> (the maximum size of the process queue)</td><td>8000</td></tr>
<tr><td><strong>WARRIORS</strong> (the number of programs in the core) </td><td>2 (one on one battle)</td></tr>
<tr><td><strong>MAXLENGTH</strong> (the maximum length of a program) </td><td>100</td></tr>
<tr><td><strong>MINDISTANCE</strong> (the minimum distance between two warriors)  </td><td>100</td></tr>
<tr><td><strong>VERSION</strong> (the version of pMARS, multiplied by 100)  </td><td>80</td></tr>
<tr><td><strong>ROUNDS FOUGHT</strong> (no of rounds in a battle between 2 warriors)</td><td>20</td></tr>
<tr><td><strong>INSTRUCTION SET</strong> </td><td>Extended  Redcode ICWS '94 Draft (p-space included)</td></tr>
</table>
<p>For details about these parameters kindly refer to <a href="http://vyznev.net/corewar/guide.html">this</a> tutorial on Redcode.</p>
<h1>Competition Structure</h1>
<p><ol type="1">
<li>The competition “Core War” is strictly an individual affair. Each participant has to register online at our website. Upon registration a registration number will be provided to the participant, which shall be used for any further correspondence. Click <a href="http://www.techfest.org/register/core_war.php">here</a> to register.</li>
<li>Participants are required to send code of their warriors via e-mail as an attachment to <strong>core_war@techfest.org</strong>.</li>
<li>All the codes received till <strong>8nd Jan 2006</strong> will go through a round robin where each warrior code will fight against every other warrior code. A battle between two warriors will consist of 20 rounds each. Score for each battle is calculating in the following way:</li>

A win fetches <strong>2 points</strong><br>
A tie fetches <strong>1 point</strong>.<br>  
A loss fetches <strong>-1 point</strong>. </li>
<p>The score of a warrior for a particular battle is the sum of points earned in all 20 rounds.</p>
<p>After the round robin the top 5 warriors in the points table will stay “on the hill” whose names will be displayed on our website on <strong>9th Jan 2006</strong>.</p>
<li>All the codes received after <strong>8nd Jan. 2006</strong> will be queued as challengers for the space on the hill. Each challenger will be put against the 5 warriors currently on the hill. The challenger will enter the hill if its score is higher than the lowest achieved by a current hill warrior. The lowest scoring warrior will then be pushed off. The queue of the challengers and results of each battle fough will be updated in every 5 days on the website.</li>
<li>Participants are allowed to send more than one code but position on the hill will be decided on the basis individual scores of warrior codes only.</li>
<li>The last date for receipt of codes is <strong>20th Jan 2006</strong>. The warrior that stays at the top at the end of the last challenge will be declared the <strong>KING OF THE HILL</strong> and will walk away with the prize money of <strong>Rs 1500</strong>.</li>
<li>Each participant is required to provide a <strong>name</strong> to its warrior code.</li>
</ol></p>
<h1>Few Instructions</h1>
<p>The code behavior is dependent on the hill specifications used while running the code on the Simulator. We strongly urge you to go through the specifications of the hill once again and configure the Emulator accordingly before you starting writing a code for your warrior. For configuration of the Emulator refer to the <a href="./img.php">screenshots</a> of the Emulator and its options dialog box.</p>

For queries contact:<br><br>
Siddharth Joshi<br>
Manager,Web<br>
<a href="http://www.techfest.org/mail.php?email=siddharth@techfest.org" target="_blank">siddharth@techfest.org</a><br>
Ph. +91-98196 85375<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>