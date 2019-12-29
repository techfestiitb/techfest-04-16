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
echo_content("side_char.txt");
echo_content("side_update.txt");
?>
 <div id="content">
<a name="prob"></a>
<h1 id="toptext">Character Recognition</h1> 
<p>The aim is to code a program, which can identify mouse drawn/stylus written on-screen characters most accurately.</p>
<p>Prizes worth <strong>Rs 12,000</strong> at stake.</p>
<p><strong>UPDATE:</strong> The shortlist of teams that can be viewed <a href="results.php">here</a>.</p>
<a name="comp"></a>
<h1>Competition Details</h1>
<p>The competition is divided into 2 stages</p>
<ol>
<li><h3>Software Testing</h3></li>
<p>The software will be tested for mouse-drawn/stylus-written** characters, which are drawn on-the-spot.</p>
<p> 
**By mouse-drawn/stylus-written, we mean, the characters shall be drawn on-screen by use of a mouse or a stylus. For example: Using mouse for drawing in MS Paint.</p>
<li><h3>Presentation</h3></li>
<p>All teams will be asked to give a small presentation about their codes. This shall be the Stage 2 of the competition. Here, the contestants will be required to present on the algorithms used, the salient features of the software, etc.</p>
</ol>
<a name="tech"></a>
<h1>Technical Details</h1>
<ol type="A">
<li>The use of MATLAB/MATHEMATICA/SCILAB or any environment similar to these is strictly prohibited. However, use of C/C++/VC++/VB/FORTRAN is permitted. Use of JAVA is strongly recommended for input/output console (SEE clause C).</li>
<li><h3>Input</h3></li>
	<ul>
		<li>Characters shall be written in DEVNAGARI script, primarily. Minimum requiredcharacter map (UNICODE) is provided in the Competition Data Section. The software is expected to recognize all 50 Devnagari characters, WITHOUT MATRAS, at the least.</li>
		<li>The software must comprise of a GUI or any other kind of console, so as to display the input on-screen.</li>
		<li>If software needs input through a file, it shall be permitted to use Bitmap files (.bmp files) ONLY.</li>
	</ul>
<li><h3>Output</h3></li>
	<ul>
		<li>The output must be on-screen, in a console (seperate or embedded in the software) in UNICODE format.</li>		
	</ul>
	<li><h3>Training</h3></li>
	<p>	User side training required (if any) should be clearly specified in the abstract of the software (See clause 4 in <a href="http://www.techfest.org/ai/char_recog/index.php#gnrules">General Rules</a>. The term "User Side training" is defined as any kind of requirement/pre-processing that user has to fulfill to give an input to the software.</p>
</ol>
<a name="resource"></a><br>
<h1>Unicode Resources</h1>
<br>
<a href="http://en.wikipedia.org/wiki/UNICODE">http://en.wikipedia.org/wiki/UNICODE</a><br>
<a href="http://en.wikipedia.org/wiki/Universal_Character_Set">http://en.wikipedia.org/wiki/Universal_Character_Set</a><br>
<a href="./cdm.zip">Complete Devanagri Mapping</a><br>
<a href="http://www.unicode.org/versions/Unicode4.1.0/">http://www.unicode.org/versions/Unicode4.1.0</a><br>
<a href="http://www.unicode.org/charts/">http://www.unicode.org/charts</a><br>
<a name="criteria"></a><br>
<h1>Judging Criteria</h1>
<p>Stage 1: Carries 50% weightage: Marks will be given by the judges based on </p>
<ol>
<li>Accuaracy of the code: The characters generated by the software should agree with the actual characters.</li> 
<li>  Efficiency: The algorithmic simplicity.</li> 
<li> Generalisation of the solution: Inclusion of as many parameters so as to ensure smooth adjustability of the code towards different situations. (Eg. recognition of as many different styles of characters as possible and so on.)</li> 
<li> Training: Amount training put on user side and the same put on the software side will be considered as judging criteria, SUBJECTIVELY.</li> 
</ol>
<p>Stage 2: Carries 50% weightage</p>
<p>The judging will be subject to the judges' discretion.</p>
<a name="gnrules"></a>
<h1>General Rules</h1>
<ol>
<li>Students currently enrolled for up to an undergraduate/postgraduate program at their institute are eligible for the competition.</li>
<li>Number of members per team should not exceed two.</li>
<li><li>Pre-event abstracts in a standard format need to be submitted for the competition for the screening round. The abstract should be e-mailed to <strong>abstract@techfest.org</strong> with the subject 'Character Recognition abstract � Reg. No. -------' or posted to us at our postal address (Use of PDFs is encouraged). Do not forget to mention the registration number. The last date to submit the abstracts is <strong>20th Dec 2005</strong>.  </li>
<li>In case the participants fail to submit the abstracts by the last date, their registration shall stand cancelled.</li>
<li>Only the participants who qualify in the screening round based on judging of the abstracts shall be eligible for the finals held in Techfest 2006 at IIT Bombay.</li>
<li>Participants who qualify after the screening round have to bring a soft copy of the software along with a well documented hard copy of the code for analysis by the judges.</li>
<li>Teams will be given only half an hour prior to the competition to set up their software at the venue for judging.</li>
<li>The team should explain their software with the help of flow charts, figures, diagrams and relevant material in their presntations. A detailed report about the software in support of the highlighted aspects should also be brought. The report will have to be submitted to the competition coordinator at the time of the competition.</li>
<li>Participants should submit their operating system and other requirements needed at the time of competition along with the abstract for the screening round.</li>
<li>Judges decision shall be treated as final and binding on all. </li>
<li>The source code should be made available for judging to the judges. Kindly mention if there are any Intellectual Property Rights issues related to your project. A care will be taken accordingly, for not revealing the code to anybody except the judges and the organizers.</li>
<li>Further details about the display of the entries at Techfest 2006 shall be given after the shortlisting.</li>
<li>The organizers reserve all rights to change any or all of the above rules as they deem fit. The decision of the judges and the organizers will be final and binding.</li>
</ol>
<a name="format"></a>
<h1>Abstract Format</h1>
<ol>
<li>A brief write up about the algorithm/technique you have used for recognition.</li>
<li>Mathematical treatment related to the software if any.</li>
<li>Algorithm and flowchart of the code.</li>
</ol>
<a name="instruction"></a>
<h1>Instructions</h1>
<ul>
<li>Abstracts can be submitted either handwritten or typed.</li>
<li>First sheet should only contain title of the project, team registration number, names of the team members and their respective institutes.</li>
<li>Typed abstract should not exceed three A4 sheets of text with a font size of 12 (font: Times New Roman) and 1.5 line spacing; excluding the first sheet containing the title. Handwritten abstracts should not exceed 1200 words.</li>
<li>Diagrams may be attached in additional sheets.</li>
<li>The information in the abstract should be very descriptive and not vague.</li>
<li>It is recommended that vital aspects of the project that require special focus are mentioned as points.</li>
<li>All changes that will be made in the problem statement at any later stage shall be intimated to the participants through e-mail. Please keep yourself updated regularly.</li>
</ul>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institutes are eligible to participate in "Character Recognition" competition at Techfest 06.</p>
<a name="tsize"></a>
<h1>Team size</h1>
<p>A team can consist of a maximum of two students.</p>
For queries contact:<br><br>
Sumedh Risbud<br>
Manager, A.I.<br>
<a href="http://www.techfest.org/mail.php?email=srrisbud@techfest.org" target="_blank">srrisbud@techfest.org</a><br>
Ph. +91 98193 51759<br>
<br><br><br><br><br><br><br>


</div>


<?
echo_content("footer.txt");
?>