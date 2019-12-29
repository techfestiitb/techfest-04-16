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
echo_content("side_future.txt");
echo_content("side_update.txt");
?>
 <a name="intro"></a>
<div id="content">
<h1 id="toptext">Future Flight</h1> 
<p><strong>UPDATE:</strong> To view the results click <a href="results.php">here</a>.</p>
<p>Ever imagined a life without the perennial traffic jams that cramp us every time we set foot on the roads? Ever thought of any way out? Well, how about a network of some kind of personalized flying cars! Just need to strap your seatbelts and zoom through the space to have a hassle free journey ahead...sounds interesting, doesn’t it? </p>	 
<p>So, here we are to provide you the platform you need to launch your flying ideas. Just speak out your mind about how would you like to design the flying cars of the future - the technology used in the making, the design concept as well as how would you regulate the flow of these wonder cars through the skies and some other aspect you want to mention on your own. </p>
<p>And don’t forget to supplement your ideas with scientific feasibility; discussing the practicality of the solution sought.</p>
<p>So wrack your grey cells to come up with one of the greatest invention of the future.</p>
<p>Prizes worth Rs <strong>3,000</strong> at stake.</p>

 <a name="comp"></a>
<h1>Competition structure</h1>
<p><ol type="1">
<li>The last date for registration was <strong>25th December, 2005</strong>. The registration has been closed now. </li>
<li>This is an online competition and strictly individual affair. The papers should be mailed at <strong>future_flight@techfest.org</strong> latest by <strong>15th January, 2006</strong> 11:59 PM, with the subject as your registration number. Use of PDFs is highly encouraged. </li>
<li>No entries will be entertained after the deadline mentioned above. </li>
</ol></p>
 <a name="paper"></a>
<h1>Paper Format</h1>	
<p><ol type="1">
<li>Size limit on the paper is four A4 pages (excluding the title page, index and bibliography / references). </li>
<li>File should be written in 10 pt Arial font, with 1.5 line spacing.   </li>
<li>A clear cut index of the chapters or topics covered should be provided at the beginning after the title page. . </li>
<li>The title page should bear the Name and Institute of the author, registration number of the author. </li>
</ol></p>
 <a name="judge"></a>
<h1>Judging criteria</h1>
<p>Marks will be awarded on the basis of the following schema</p>
<p><ol type="1">
<li>Adherence to the topic.</li> 
<li>Creativity in design.</li>
<li>Plausibility of the traffic network model.</li>
<li>Supplementing the ideas with current ‘Science and Technology’ facts.</li>
</ol></p>
 <a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institute are eligible to participate in Future Flight at Techfest ‘06.</p>
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
<br>
<br>
<br>
<br>
<br>
<br>


</div>
  
<?

echo_content("footer.txt");
?>