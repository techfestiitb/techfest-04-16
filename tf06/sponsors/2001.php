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
     <h1 id="toptext">Sponsors Techfest 2001</h1> 
	 
	<center>
		<table width="65%">
		<tr>
		<td width="50%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/selectica.jpg" width=150 class="sponsors">

			</center>			
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/webtek.gif" width=125 class="sponsors">

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

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/providian.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/reliance.gif" class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/juniper.gif" class="sponsors">

			</center>
		</td>
		</tr>


		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/adam.gif" width=60 class="sponsors">

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