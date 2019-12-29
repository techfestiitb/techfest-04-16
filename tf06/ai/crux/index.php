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
echo_content("side_crux.txt");
echo_content("side_update.txt");
?>
 <div id="content">
 <a name="topic"></a>
     <h1 id="toptext">Crux</h1> 

<p>Techfest presents “Crux” the technical paper presentation competition. Take up any topic of your choice; related to Artificial Intelligence, write a technical paper on the topic and present it. </p>
<p>Prizes worth <strong>Rs 6,000</strong> at stake.</p>
<p>Click <a href="results.php">here</a> for shortlist.</p>
<p>Registration for this competition has been <strong>closed</strong>.</p>
<a name="topic"></a>
<h1>Topic</h1>
<p>The topic can be anything related to the field of Artificial Intelligence and its branches; such as Neural Networks, Natural Language Processing, etc.</p>
<a name="comp"></a>
<h1>Competition structure</h1>
<p><ol type="1">

<li>This competition is a strictly individual affair. For the first round of elimination, send in your papers latest by <strong>20th December 2005</strong>. The papers should be mailed at <strong>crux@techfest.org</strong> with the subject as your registration number. Use of PDFs is highly encouraged.</li>
<li>No entries will be entertained after the deadline mentioned above. </li>
<li>A few select entries will be called to IIT Bombay, during Techfest (20th-22nd Jan 2006) where they will face the final round in which they will have to make a presentation of their papers, on the basis of which, winners will be decided.</li>
</ol></p>
<a name="papaer"></a>
<h1>Paper Format</h1>
<p><ol type="1">
<li>Size limit on the paper is 10 A4 pages (excluding the title page, index and bibliography / references).</li>
<li>The content should be printed / written on only one side of the page.</li>
<li>Paper should be written in 10 pt Arial font, with 1.5 line spacing. Appropriate numbering should be done to all he pages. Please number the index pages separately in Greek numbering style (i,ii,iii,...), and main content separately in normal (Roman: 1,2,3,..) style.</li>
<li>A clear cut index of the chapters or topics covered should be provided at the beginning after the title page. A complete list of notations, figures, charts, tables, etc; if any; should follow the index. A comprehensive bibliography is expected at the end of the paper. </li>
<li>The title page should bear the Name and institute of the author, registration number of the author, and should clearly specify the topic of the paper. A sample title page is shown <a href="./sample.gif" target="_blank">here</a>.</li>
</ol></p>
<a name="props"></a>
<h1>Props.</h1>
<p>The participants can use audio and visual aids for the presentation part. We will provide you with a blackboard, a computer with MS- Office, an LCD projector and/or an OHP.</p>
<a name="final"></a>
<h1>Final Round</h1>
<p><ol type="1">
<li>Please note that the soft copies of the presentations shall be collected before the presentation sessions start.</li>
<li>The presentation must not exceed 30 minutes under any circumstance. Points will be deducted for exceeding the time limit. This will be followed by a brief cross examination by the judges, for a maximum of 10 minutes.</li>
</ol></p>
<a name="judging"></a>
<h1>Judging</h1>
<p>Marks will be awarded on the basis of the following schema:-</p>
<h3>Paper Scoring Criteria</h3>
<p><ol type="1">
<li>Adherence to topic (20%)</li>
<li>Presence of original ideas and research involved (15%)</li>
<li>Technical command of subject matter (10%) </li>
<li>Spelling and grammar (5%) </li>
<li>Length (10 page maximum) (5%) </li>
<li>Overall clarity, organization, quality of paper and references (15%)   ==>  Paper Sub-total = 70%</li>
</ol></p>
<h3>Presentation Scoring Criteria</h3>
<p><ol type="1">
<li>Evaluation based on Q-A session (15%)</li>
<li>Overall clarity and quality of presentation (10%)</li>
<li>Presentation style (reading, memorized, conversational, pronunciation and proper use of technical language) (5%)          ==>   Presentation Sub-Total = 30%</li>
</ol></p>
<a name="tips"></a>
<h1>A few tips</h1>
<p><ul>
<li>All changes that will be made in the problem statement at any later stage shall be intimated to the participants through e-mail. Please keep yourself updated regularly.</li>
<li>Keep your presentation within the time limit; a long presentation does not go well. </li>
<li>Novelty in the topic helps in rousing the judges' interest.</li>
</ul></p>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institute are eligible to participate in Crux at Techfest 2006</p>



<br>




For queries contact:<br><br>
Sumedh Risbud<br>
Manager, A.I.<br>
<a href="http://www.techfest.org/mail.php?email=srrisbud@techfest.org" target="_blank">srrisbud@techfest.org</a><br>
Ph. +91-98193 51759<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>
