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
echo_content("side_iterations.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<a name="purpose"></a>
<h1 id="toptext">Workshop - Iterations</h1> 
<p><img src="./img/cfd.gif" hspace="5" vspace="5" align="right" border="0">“Iterations” is being launched this year as a workshop in Techfest. The event will be supported by Department of Aerospace Engineering IIT Bombay, Zeus Numerix, and C-DAC.</p>
<p><strong><strong>UPDATE:</strong> The list of <strong>selected</strong> participants is available <a href="results.php">here</a>.</strong></p>
<p>There will be a <strong>fee</strong> for attending the workshop that will be disclosed later.</p>
<p> The workshop shall tackle the 'CFD' topic on three fronts:</p>
<h3>A. Teaching CFD</h3>
<p>This will consist of lectures (a) essentials of CFD, (b) tools in CFD technology, (c) State of in CFD world wide, (d) CFD as it is practiced in IIT Bombay. The faculty for this will be drawn from Mech / Aero / ZNPL.</p>
<h3>B. Introducing CFD software to students</h3>
<p>This will consist of imparting hands-on training to novice and advanced users in CFD (a) Novice students will be trained on CFDTutor for 1/2 day (b) Graduating students in CFDExpert for 1 day. Faculty for this will be from ZNPL.</p>
<p>NOTE: CFDTutor Demo copy is available for practice on the following websites</p>
<a href="http://www.zeusnumerix.com">www.zeusnumerix.com</a><br>
<a href="http://www.aero.iitb.ac.in/~iitzeus">www.aero.iitb.ac.in/~iitzeus</a><br>
<h3>C. Prize wining competitions</h3>
<p>This consists of encouraging participants to find out solution for a fluid mechanics problem using CFD software. The activity consists of two round of competition in solving CFD problems. First round shall involve solving a 2D CFD problem on CFDTutor. A successful and creative solution is worth Rs. 1500. First ten students shortlisted from the first round, shall face the second round. They shall be assigned a problem, from a set of 5 problems, to be solved using CFDExpert with the help of C-DAC-built supercomputer 'PARAMPadma'. The winner walks away with a prize of Rs. 3500.</p>








<a name="register"></a>	 
<h1>Registration</h1>
<p>The registration closes on <strong>16th Dec. 2005 11:59 PM</strong>. All the registered participants will be e-mailed the link to the questionnaire on <strong>17th Dec. 10:00 AM</strong> which has to be filled up by <strong>25th Dec. 2005 11:59 PM</strong>.
The selections for attending the workshop will be purely based upon the score in the questionnaire. The results will be declared by <strong>27th Dec 2005</strong> on the website.</p>
	 
<br><br>For queries contact:<br><br>
<table border="0" align="left" id="manag"  style="border-collapse:collapse; " width="100%">
<tr><td width="20%">Amardeep<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=amar@techfest.org" target="_blank">amar@techfest.org</a><br>
Ph. +91-98201 91213<br></td>
<td>Aditya Chaoji<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=aditya@techfest.org" target="_blank">aditya@techfest.org</a><br>
Ph. +91-98693 57291<br></td>
</tr>
</table>

<br><br>
<br>
<br>


</div>
  
<?

echo_content("footer.txt");
?>