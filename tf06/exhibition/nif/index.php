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
<h1>NIF exhibition</h1>

<p>Coming from the propogators of innovative developments by the masses of the country, we have exhibitions by the National Innovation Foundation (NIF), Grassroots Innovation Augmentation Network (GIAN) and SRISTI.</p>
<p>The National Innovation Foundation (NIF) was set up in March 2000, by Department of Science and Technology (DST), Government of India (GOI), as an autonomous society under the chairpersonship of Dr R A Mashelkar, Director General, Council for Scientific & Industrial Research and Secretary, Dept. Of Scientific and Industrial Research, Government of India. NIF is pursuing the mission of making India Innovative and a global leader in sustainable technologies. The idea is to build upon Honey Bee philosophy and provide a nurturing platform to unsung heroes and heroines of our society who have solved a technological problem through their own genius without any outside help. The purpose is scouting, documenting, spawning, augmenting, adding value, protecting intellectual property rights, disseminating on commercial as well as non-commercial basis. Focus is on the contemporary unaided technological innovations as well as outstanding examples of traditional knowledge from individuals and communities. NIF is based at Ahmedabad, Gujarat.</p>
<p>Some of the exhibits are:</p>
<table border="0" width="90%" cellpadding="5">
<tr><td align="center"><a href="./img/img_l1.jpg" target="_blank"><img src="./img/img1.jpg" border="0" alt=""></a></td><td align="center"><a href="./img/img_l2.jpg" target="_blank"><img src="./img/img2.jpg" border="0" alt=""></a></td><td align="center"><a href="./img/img_l3.jpg" target="_blank"><img src="./img/img3.jpg" border="0" alt=""></a></td></tr>


</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?

echo_content("footer.txt");

?>