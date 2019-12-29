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

echo_content("side_asu.txt");
echo_content("side_update.txt");

?>

<div id="content">




<a name="isro"></a>
<h1>ISRO Exhibition: “India in Space”</h1>
<p><img src="./img/isro.jpg" border="0" hspace="5" vspace="5" alt="" align="right">The Govt. of India has announced that it plans to explore the Moon and will send an unmanned lunar probe by 2008. The Indian Space Research Organisation (ISRO) calls this project ‘Chandrayaan Pratham’, which has literally means ‘First Journey to the Moon’ or Moon shot one. </p>
<br>
<br><br><br><br>
<h1>Highlights of the exhibition</h1>
</p><ol type="1">
<li>Models of previous Space Vehicles launched by ISRO.</li>
<li>Story boards about India’s Moon Mission Chandrayaan-1.</li>
<li>Interactive sessions with Scientists of ISRO, the people in lead of India’s Moon Mission – <strong>Chandrayaan-1</strong>.</li>
</ol></p>


<table border="0" width="90%">
<tr><td align="center"><img src="./img/chandrayaan.jpg" border="0"><ol type="1"></td></tr>
</table>
<h1>About the speaker</h1>
<p><img src="./img/jaya.jpg" align="right" alt="" border="0" hspace="5" vspace="5">Dr. Jayati Datta is Programme Manager, Space Science Office, ISRO HQ at Bangalore. She is also Programme Manager of Chandrayaan-1 – ISRO’s first scientific mission to the Moon.</p>
<p>Dr. Datta did her Post Graduation in Physics from Calcutta University followed by Ph. D in Theoretical Physics, from Delhi University. After a postdoctoral position (Pool Officer, CSIR) for Indian Middle Atmosphere Programme (IMAP) in Indian Space Research Organisation (ISRO) she joined Indian Space Research Organisation HQ as Scientist.</p>
<p>Dr. Datta’s research interest mainly concern study of atmospheric composition and dynamics, specifically study of ion/aerosol composition/ concentration in troposphere and stratosphere using Ion-Chemical Model, Mesospheric dynamics using Mesosphere-Stratosphere-Troposphere (MST) Radar. She has a number of research publications  and Reports to her credit.  </p>

<br><br><br><br><br><br><br>
</div>

<?

echo_content("footer.txt");

?>