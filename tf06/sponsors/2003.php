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
     <h1 id="toptext">Sponsors Techfest 2003</h1> 
	 
	<center>
		<table width="65%">
		<tr>
		<td></td>
		<td width="35%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/sun.jpg" width=150 class="sponsors">

			</center>			
		</td>
		<td width="35%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/wipro.gif" width=100  class="sponsors">

			</center>
		</td>
		<td></td>
		</tr>
		</table>
		<table width="65%">
		
		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/tata-broadband.jpg" width=150 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/philips.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/veritas.jpg" class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/hughes.jpg" width=144 class="sponsors">

			</center>
		</td>
		</tr>


		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/mastek.jpg" width=150 class="sponsors">

			</center>
		</td>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ge.jpg" height=75 class="sponsors">

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

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/htmt.jpg" width=120 class="sponsors">

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
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ngc.jpg" width=150 class="sponsors">
			
			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/enablee.jpg" width=150 class="sponsors">
			</center>
		</td>
		<td width="50%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/indialinks.jpg"width=150 class="sponsors">
			
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
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/rodas.jpg"width=150 class="sponsors">
			
			</center>
		</td>
		</tr>

		</table>

		</center>




</div>
    
  
<?
echo_content("footer.txt");
?>