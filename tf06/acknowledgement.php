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
echo_content("side_no.txt");
echo_content("side_update.txt");

?>
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Acknowledgement</h1> 

<p>We thank following faculty members for their contribution and support without which Techfest '06 wouldn't have scaled the heights, it did.</p> 

<ul type="" style="list-style-type:none;"><li><b>Prof. Abhijit Mukherjee</b></li>
<li><b>Prof. C.Amarnath</b></li>
<li><b>Prof Vishwanadham</b></li>
<li><b>Prof AW Date</b></li>
<li><b>Prof Krithi Ramamithram</b></li>
<li><b>Prof BG Fernandes</b></li>
<li><b>Prof AG Rao</b></li>
<li><b>Prof Narendra Shah</b></li>
<li><b>Prof. George Mathew</b></li>
<li><b>Prof. D.S Mishra</b></li>
<li><b>Prof. Girish Kumar</b></li>
<li><b> Prof. Dulal Panda</b></li>
<li><b>Prof. P. Bhattacharya</b></li>
<li><b>Prof. R.D.Gudi</b></li>
<li><b>Prof. S. Bhartiya</b></li>
<li><b>Prof. S. Biswas</b></li>
<li><b>Prof. Nagaraja</b></li>
<li><b>Prof. A. Ranade</b></li>
<li><b>Prof. H Narayanan</b></li>
<li><b>Dr. Siddhartha Ghosh</b></li>
<li><b>Prof Alok Goyal</b></li>
<li><b>Dr. R.S. Jangid</b></li>
<li><b>Dr. B V S Viswanadham</b></li>
<li><b>Dr. Tom V. Mathew</b></li>
<li><b>Prof. K. V. Krishna Rao</b></li>
<li><b>Mr. Nissar Khan</b></li>
<li><b>Prof. GR Shevare</b></li>
<li><b>Prof. RK Pant</b></li>
<li><b>Prof S. Suryanarayanan</b></li>
<li><b>Prof. V.M.Gadre</b></li>
<li><b>Prof. G.G.Ray</b></li>
<li><b>Prof. Kiran Kulkarni</b></li>
</ul>

<p>We also thank following PHD and MTECH students for their invaluable contribution.</p>
<ul style="list-style-type:none">
<li><b>Abhishek Thakkar</b></li>
<li><b>Omkar Marathe</b></li>
<li><b>Sanjeev</b></li>
<li><b>Vivek Jha</b></li>
</ul>

<p>And last but not the least a special thanks to <strong>Mr. Raikar</strong> for his contribution in the making all the competiion boards and arenas not only this year but past many years.

<p>Techfest Team</p>
<br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>
