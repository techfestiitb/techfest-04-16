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

echo_content("side_techno.txt");
echo_content("side_update.txt");

?>

<div id="content">

<a name="intro"></a>

<h1 id="toptext">Technovision Awards</h1> 
<p><strong>UPDATE:</strong> The shortlist for the competition can be viewed <a href="results.php">here</a></strong>.</p>
<p>The best innovations are the one percent that are helped into the limelight and brought in front of the world. What happens to the other ninety-nine percent? They usually go unnoticed and gradually fade away into oblivion….</p>

<p>We, at Techfest every year bear witness to numerous such innovations and small ideas which might change the way we live and progress forever. The trouble is that a platform has never been created to give recognition to only the “idea”, leaving aside participation and winning in competitions. </p>

<table border="0" cellpadding="10" cellspacing="5" width="90%">

<tr align="center"><td align="center"><img src="./img/technovision.gif" alt="" border="0" usemap="#technovision">
<map name="technovision" id= "technovision">
  <area shape="rect" coords="37,81,134,174" href="http://www.iitb.ac.in" target="_blank">

  <area shape="rect" coords="72,9,281,35" href="http://www.techfest.org" target="_self">
  <area shape="rect" coords="187,102,338,131" href="http://www.chip-india.com" target="_blank">
</map></td></tr>

</table>

<p>Taking a stride in the right direction we come up with a novel feature at this year’s Techfest. With CHIP-India’s premier Computing Magazine, Techfest this year comes at you with the Technovision Awards having been instituted to recognize and award innovations in an array of fields in Technology and Science. The root of these awards lies in recognizing innovations of far-reaching consequence at the conglomeration of the brightest minds in the country at the biggest technology festival there is! Do you have the innovative spark going in you to grab the biggest innovator awards for students this side of the earth? Don’t hold yourself back and let the innovator in you take control…</p>

<a name="award"></a>

<h1>Award Statement</h1>

<p>Call for original submissions on innovation in pure sciences and engineering.</p>

<br>

<a name="nom"></a>

<h1>Nominations</h1>

<p>All entries at Techfest will automatically be qualified for Technovision awards and hope to win a grand ensemble of prizes and get recognized as a Technovisionary. They will be judged at Techfest ’06 by a <strong><a href="./panel.php">Panel of Judges</a></strong> who will be short listing the best entries. The entries at Techfest will be judged at their venues, apart from the abstract/write-up which they submit while registering for the Technovision Awards. </p>

<p>For people who are not participants in other competitions at Techfest, they need to register and send the abstract/write-up within the deadline and they need to give a presentation in front of the panel of judges during Techfest ’06.</p>

<a name="gnrules"></a>

<h1>General Rules</h1>

<p><ul>

<li>The registrations for this competition has been <strong>closed</strong>.</li>

<li>Pre-event abstracts in a standard format need to be submitted for the competition for the screening round. The abstract should be e-mailed to <strong>technovision@techfest.org</strong>. For details visit the <a href="./index.php#abstract">‘Abstract Details’</a> section.</li>

<li>The abstract of their submission should reach us by <strong>December 30th, 2005</strong> and no entries will be entertained after this date. The short listed teams will be notified by <strong>January 5th, 2006</strong>. </li>

<li>Only the participants who qualify in the screening round based on judging of the abstracts shall be invited to IIT Bombay for the final presentation.</li>

<li>The short listed teams have to give a presentation in the final round. The presentation should reach us before <strong>20th January 2006</strong>, 2:00 PM IST. No changes can be made to the final presentation once it has been submitted.</li>

<li>The organizers reserve all rights to change any or all of the above rules as they deem fit. The decision of the judges and the organizers will be final and binding.</li>

</ul></p>

<a name="abstract"></a>

<h1>Abstract Details</h1>

<p><ul>

<li>The abstract must be mailed as an attachment to <strong>technovision@techfest.org</strong>, with the registration number as the subject preferably in ‘doc’ or ‘pdf’ format.</li>

<li>The abstract should be concise and to the point and should not exceed three A4 sheets of text with a font size of 12 excluding the first sheet containing the title. </li>

<li>First sheet should only contain title of the project, team registration number, names of the team members and their respective institutes.</li>

<li>The abstract may be supported by a maximum of five descriptive figures/graphs. Photographs are particularly welcome. Diagrams should be on additional sheets (photograph and graphic representation of the project is encouraged).</li>

<li>The abstract should be followed by a list of references - websites, books, etc which amply support the ideas or solutions implemented. The list of references shall not be taken into account for the word limit mentioned. </li>

<li>The information in the abstract should be very descriptive and not vague. It is recommended that vital aspects of the project that require special focus are mentioned as points. </li>

</ul></p>

<a name="imp"></a>

<h1>Important Dates</h1>

<p><ul>

<li>Last date for submission of abstracts: <strong>30th December, 2005</strong></li>

<li>Short listing of Abstracts: <strong>5th January, 2006</strong></li>

</ul></p>

<a name="elig"></a>

<h1>Eligibility</h1>

<p>Any student holding a valid identity card of his educational institution (school, college) is eligible for the Technovision Awards.</p>



<br>

For queries contact:<br>
Shashank Neelam<br>
Coordinator, Technoholix<br>
Email: <a href="http://www.techfest.org/mail.php?email=shashank@techfest.org" target="_blank">shashank@techfest.org</a><br>

Ph. +91-98696 98831<br>

<br><br><br><br><br><br><br>

</div>

<?

echo_content("footer.txt");

?>