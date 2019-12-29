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
echo_content("side_workshop.txt");
echo_content("side_update.txt");
?>
<!-- ##### Main Copy ##### -->

<div id="content">
<h1 id="toptext">Workshops</h1> 
<p><img src="./img/ws.jpg" align="right" hspace="5" vspace="5">Traditionally, it has been accepted that effective learning occurs with a display of knowledge and having the students engage in activities that make them think about the course content and transfer it to newer situations.</p>
<p>Workshops are an educational rendezvous emphasizing on the interaction and exchange of information among its participants and the speakers. The underlying theme behind workshops is "do while you learn". While no knowledge is worthless, the one which you learn by doing things yourself has no parallels. The workshops aim at showing you a path less traversed. They are designed to give impetus to the students with the familiarity, awareness, or understanding gained through experience or study. We bring you face to face with the most eminent personalities from various academic fields and industry, bringing forth the latest developments in the field of science and industry.</p>
<p>The topics which have featured in workshops in the past have varied from Robotics to Forensics, Network security to IPR, Smart material to GPS/GIS and topics as exhaustive as Astronomy, Cryptography, Aero Modeling and Gaming. Our aim is to expose students to the ever changing face of this world and to the technologies which are responsible for it. The hands on session at the end provide them with an opportunity to apply the concepts learnt during the workshop</p>
<p>As in the past, this year also workshops promise to open up new horizons for you to explore.</p>
<br>
<br><br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>