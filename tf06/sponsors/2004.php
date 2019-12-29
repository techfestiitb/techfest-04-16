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
     <h1 id="toptext">Sponsors Techfest 2004</h1> 
	 
	<center>
		<table width="65%">
		<tr>
		<td></td>
		<td width="70%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/tata.gif" width=150 class="sponsors">

			</center>			
		</td>
		<td></td>
		</tr>
		</table>


		<table width="65%">
		
		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/veritas.jpg" width=150 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/verizon.jpg"width=150 border="0" class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/hcc.gif" height=50 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/servo.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>


		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/bcl.jpg" width=150 class="sponsors">

			</center>
		</td>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/nvidia2.jpg" height=60 class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/digit.gif" width=100 class="sponsors">


			</center>
		</td>

		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/dhruva.jpg" height=80 class="sponsors">

			</center>

		</td>
		</tr>
		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/week.gif" width=130 class="sponsors">
			</center>
		</td>
		<td width="50%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/airlines.jpg" width=150 class="sponsors">
			
			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/recreate.jpg" width=150 class="sponsors">
			</center>
		</td>
		<td width="50%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/indialinks.jpg"width=150 class="sponsors">
			
			</center>
		</td>
		</tr>

		</table>

		</center>







</div>
    

  
<?
echo_content("footer.txt");
?>