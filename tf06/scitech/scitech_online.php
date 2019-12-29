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
?>
<div id="content">
<a name="onlineeliminationtest"></a>
<h1 id="toptext">SciTech - Online Elimination test</h1> 
<p>Only one team from each institute is eligible to participate in the online elims. This team is referred to as the <strong>Official Entry</strong> of that particular institute. If more than one team from a particular institute wants to participate in SciTech, some kind of elimination round can be conducted at the institute level itself to select one team representing the institute. Rest of the teams can participate in the elims round at Techfest '06 in January.</p>
<p>The advantage of being the <strong>Official Team</strong> is that eventually 4 teams will be selected for the SciTech Grand Finale from the teams participating in the Online Elimination Test. Only one or two teams will be selected from the teams that participate at the elims round conducted during Techfest '06. </p>
<a name="Registration"></a>
<h3>Registration Procedure </h3>
<p>Official entries from each institute must register online and fax us a signed form. The two step registration process is as follows. </p>

<p><strong>Step1:</strong> The registration has been closed and username and password for each team has been sent via e-mail. If any registered team hasn't received it, inform us at <strong>scitech@techfest.org</strong>. </p>
<p><strong>Step2:</strong> Download <a href="./form.zip">this</a> form, fill it, get it signed and sealed by the Dean/HOD/Principal of your institute and fax it to: +91-22-25723480. </p>
<a name="onlineelims"></a>
<h3>Online Elims Procedure</h3>
<p>The procedure for the Online Elimination Test for the official teams is as follows.</p>
<p><ol type="1">
<li>The Online Elims will start at <strong>00.30</strong> hours on <strong>30th December 2005</strong> and end at <strong>23.30</strong> hours on <strong>30th December 2005</strong>. But the duration of the test is only <strong>2 hours</strong>. </li>
<li>You will be e-mailed a username and a password, on <strong>27th Dec 2005</strong>. You have to use this username and password to login between the timings specified above. You can login at <strong>23.30</strong> hours on <strong>30th December 2005</strong>, but not even a minute after that. </li>
<li>You will have to submit the answers within <strong>2 hours </strong>of your logging in. The time you login and the time you submit your answers will be noted and if the time exceeds 2 hours, appropriate <strong>penalty</strong> will be laid on your score. </li>
<li>The answers/solutions of the test must be <strong>submitted online</strong> by filling appropriate forms (textboxes, radio buttons and dropdown menus) and finally clicking on a &quot;Submit&quot; button. You need not upload any files. </li>
<li>Each question will either have a <strong>textbox</strong> for writing your answer/solution or a <strong>dropdown</strong> menu to pick an answer (multiple choice questions with <strong>negative</strong> marking) from a set of options. The exact format of the question paper will be revealed only <strong>during the test</strong>. </li>
<li>The instructions will be clearly mentioned during the <strong>beginning</strong> of the test and they are to be read carefully before proceeding to the question paper. The instructions will also be availabe at any point of time during the test. </li>
<li>During the test, your queries will be answered online on Yahoo! Messenger. The Yahoo! id of the SciTech team will be mailed to you upon succesful registration. </li>
<li>If you accidentally close the window/logout/get disconnected in between the test, you can re-login and resume the test. But the time will be counted from the first time you login. You need not remain online for the entire duration of the test. </li>
</ol></p>
<a name="Requirements"></a>
<h3>Requirements</h3>
<p>The requirements for participating in the Online Elimination Test are as follows:</p>
<p><ol type="1">
<li>Internet connnection during logging in and while submitting your solutions. You may disconnect in between if you want to.</li>
<li>JavaScript enabled web browser. Preferably IE5.5+, Firefox 0.8+ or Opera7+.</li>
<li>The username and the password sent to you by e-mail on <strong>27th Dec 2005</strong>. If you do not have one by <strong>28th December 2005</strong>, please send a mail to <strong>scitech@techfest.org</strong>.</li>
</ol></p>
<br>
For queries see the <a href="./faq.php">FAQ</a> page or contact:<br>
Vamsi Krishna Peri<br>
Email: <a href="http://www.techfest.org/mail.php?email=scitech@techfest.org" target="_blank">scitech@techfest.org</a><br>
Ph. +91-98191 88890<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>