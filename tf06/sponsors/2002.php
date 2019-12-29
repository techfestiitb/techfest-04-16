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
echo_content("side_sponsors.txt");
echo_content("side_update.txt");
?>
 
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Sponsors Techfest 2002</h1> 
	 
	<center>
		<table width="65%">
		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/merc.jpg" width=145 class="sponsors">

			</center>			
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/caldera.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>
		
		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/veritas.jpg"  class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/citi.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/servo.jpg" width=150 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/fe2.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>


		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/hcc.gif" width=90 class="sponsors">

			</center>
		</td>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/i2.gif" width=120 class="sponsors">

			</center>
		</td>
		</tr>

		</table>

		</center>









</div>
    
  
<?
echo_content("footer.txt");
?>