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
<p>The following teams have been shortlisted for Technovision Awards.</p>
<table border="0" cellpadding="6" cellspacing="">
<tr><td>CX06369</td></tr><tr><td>

TA06152</td></tr><tr><td>


TA06153</td></tr><tr><td>




TA06159</td></tr><tr><td>



TA06169</td></tr><tr><td>

TA06173</td></tr><tr><td>


TA06174</td></tr><tr><td>



TA06187</td></tr><tr><td>



TA06214</td></tr><tr><td>



TA06221</td></tr><tr><td>


TA06239</td></tr><tr><td>





TA06242</td></tr><tr><td>


TA06251</td></tr><tr><td>


TA06255</td></tr>



</table>
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