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
echo_content("side_sap.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="intro"></a>
<h1 id="toptext">SAP Fellowship Contest</h1> 
<p>Winning teams will be eligible for the SAP fellowship programme which
will allot <strong>Rs. 1,00,000 (Rupees One Lakh)</strong> per person.</p>
<p>This includes prize money and internship based on pre approved formats
of individual colleges.</p>
<a name="prob"></a>
<h1>Problem Statements</h1>
<p>Participants can choose from the following problem statements:-</p>
<h3>Clean my name</h3>
<p>Design a system/algorithm to identify duplicate names that are phonetically similar sounding (in major Indian languages). The name could be that of a person/address/place.</p>
<h3>Tiger Trails</h3>
<p>Design a system to remotely track tigers in the national park. The system should include design for both the hardware and software.</p>
<h3>Manufacturing Problem</h3>
<p>Design a system (S/W and H/W) that will enable visibility to remote Manufacturing facilities to empower appropriate Business Users to take decisions that are based on near real time information.</p>
<p>In today's competitive Manufacturing world ability to
deliver on time with high quality is extremely critical for a
Manufacturer to be successful.</p><p>
Given the distribution of Manufacturing plants in remote locations,
visibility of  actual status at these locations from a centralized point
of view in near real time is a well known problem. Typical issues of exceptions happening on the
Manufacturing shop floor not reaching the planners and Business decision
makers as and when they happen, results in delayed resolution of the problem
that impacts the bottom-line of the organization. What is required is a
solution that enables this visibility from a H/W perspective to connect the locations
to a central point (should take care of the possibility that the remote
locations might not be well connected from a communication infrastructure point of view) and
a S/W perspective in terms of applications that would be required and
the kind of user interfaces one needs to provide to gather data and present data
(Keep in mind the different roles - shop floor operators, Plant
Supervisors, Planners, Plant Managers, CEO - that participate in realizing this solution). Some
example of exceptions and data that one can think of are -</p>
<p>
Exceptions - Bottleneck equipment going down, deviations from Benchmarks(Quality, equipment performance, product costing, material consumption), Material shortage.
</p><p>
Analytical Data  - Capacity Utilization, Equipment Efficiency, Root Cause Analysis of deviations.</p>
<a name="comp"></a>
<h1>Competition structure</h1>
<p><ul><li>Every team has to submit a solution of the problem in the form of a report. The report should be mailed as an attachment  in MS Word or MS power point document to <strong>sap_idp@techfest.org</strong>.</li>
<li>Every team has to register online. Upon registration a registration number will be provided which shall be mentioned by the team for any future correspondence. Click <a href="http://www.techfest.org/register/sap_idp.php">here</a> for registration</li>
<li>All submissions should list names of the members and their current education status (Degree being pursued, Year of graduation, College and Major) and a contact phone number.</li>

<li>The report should describe the solution to the problem (including the technology to be used if applicable), the detailed design approach and timeline/plan for execution.</li>

<li>Please note that a working prototype of the solution is not necessary for submission.</li>
<li>There is no limit on the size of the report. But it should be precise and complete.</li>
<li>The last date for submission of the report is <strong>20th January 2006</strong>. Once submitted, the reports can be refined till the final submission date. In case of multiple submissions, the latest report would be evaluated.</li>

<li>The list of  hardware/software required to implement the solution should be submitted in the report.</li>
<li>The report should list the references of books, websites etc used that support the idea/solution.</li>
<li>One person can be part of only one team to submit a solution for a problem. However, he/she is allowed to submit solution to multiple problems as part of same/different teams.</li>

<li>The evaluation would be done during Techfest. If discussion/clarification is required, the team members should be available in person during Techfest at IIT Bombay.</li>
</ul></p>
<a name="tsize"></a>
<h1>Team size</h1>
<p>A team can consist of a maximum of three students.</p>
For queries mail at <a href="http://www.techfest.org/mail.php?email=sap_idp@techfest.org" target="_blank">sap_idp@techfest.org</a><br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>