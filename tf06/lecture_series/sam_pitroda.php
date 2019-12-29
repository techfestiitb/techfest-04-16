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
echo_content("side_lectures.txt");
echo_content("side_update.txt");
?>
 
 <!-- ##### Main Copy ##### -->

<div id="content">
<h1>Mr. Sam Pitroda</h1>
<p><img src="./img/sam_pitroda.jpg" alt="" align="right" hspace="5" vspace="5">Satyanarayan Gangaram Pitroda, better known as Sam Pitroda was born in Titlagarh, Orissa. India. After graduating from University of Illinois, Chicago with a masters in Electrical Engineering, he founded the company Wescom Switches. In the year 1984, Sam Pitroda returned to India and founded the Center for Development of Telematics and later became advisor to the PM of India on National Technology Missions. Mr. Pitroda currently lives in Chicago, USA.</p>
<p>It was largely because of the efforts of this inventor, technocrat, and social thinker that the telecom revolution took place in India. Through his efforts, Mr. Pitroda has brought telephones to some of the world's most isolated regions. In the field of telecom, Sam's emphasis was on accessibility rather than density. Along with being a pioneer in telecom, Mr. Sam Pitroda has made strong cases for food, clean water, and adequate shelter for the unprivileged section. </p>
<p>Currently, Mr. Pitroda is the Chairman and CEO of World-Tel Limited. Sam Pitroda is also the founding Chairman of a non-profit organization for 'Revitalization of Local Health Traditions in India’. As a result of his pioneering works, Sam Pitroda holds more than 50 patents and has lectured extensively on Telecom, Technology and Development, in almost all parts of the world. </p>


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


</div>
	 
<?
echo_content("footer.txt");
?>