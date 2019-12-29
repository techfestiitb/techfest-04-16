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
<a name="intro"></a>
<h1 id="toptext">FAQ - SciTech</h1> 
<p><b>Q.</b> Who all are eligible to participate in SciTech?</p>
<p><b>A.</b> All students from schools and colleges are eligible to
participate in SciTech at Techfest ’06.</p>
<br>
<p><b>Q.</b> How do I know if my team is the official team from my institute?</p>
<p><b>A.</b> That is for your institute to decide. If more than one team from
your institute wants to participate in SciTech, you can have some
kind of elimination round at your institute level itself to select
one team representing your institute.</p>
<br>
<p><b>Q.</b> I am the official entry from my institute. How do I participate
in SciTech?</p>
<p><b>A.</b> First of all, you need to form a team of two. Next, you have to
register <a href="http://www.techfest.org/register/scitech.php">here</a>. You also must fill <a href="./form.zip">this</a> form and Fax to:
+91-22-25723480. This form must be signed and sealed by the
Dean/HOD/Principal to be accepted for SciTech. You must make sure
that your team is the only “official” team representing your
institute.</p>
<br>
<p><b>Q.</b> I am not the official team from my institute. How do I
participate in SciTech?</p>
<p><b>A.</b> Come to IIT Bombay during Techfest ’06. Form a team of two with
someone from your institute, register on the spot and participate
directly in the Second Stage at Techfest ‘06.</p>
<br>
<p><b>Q.</b> Can an institute be represented by two or more official teams?</p>
<p><b>A.</b> No. Each institute can be represented by only one official team.</p>
<br>
<p><b>Q.</b> What will be the format of the rounds?</p>
<p><b>A.</b> The format and the details of the online round for the official
teams will be put up soon. The format for the Second Stage and the
Grand Finale will not be revealed till the last minute.</p>
<br>
<p><b>Q.</b> What will be the nature of the quiz?</p>
<p><b>A.</b> Its hard to say because it will not be confined to a particular
type. There will be logic/reasoning questions, scientific
phenomenon, facts and trivia, questions on latest technology, etc.
The number of trivia questions will be very less compared to other
questions.</p>


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