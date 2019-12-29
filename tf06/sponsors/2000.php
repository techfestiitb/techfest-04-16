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
     <h1 id="toptext">Sponsors Techfest 2000</h1> 
	 
	<center>
		<table width="65%">
		<tr>
		<td width="50%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/schlumberger.jpg" width=150  class="sponsors">

			</center>			
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/tcs.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>
		
		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/selectica.jpg" width=150 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/enron.gif" width=60 class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/i2.gif" width=80 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/cypress.gif" width=150 class="sponsors">

			</center>
		</td>
		</tr>


		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/wipro.gif" class="sponsors">

			</center>
		</td>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ti.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/itppl.jpg" width=150  class="sponsors">


			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/smart.jpg" width=110 class="sponsors">

			</center>

		</td>
		</tr>
		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/vsnl.jpg" width=200  class="sponsors">
			</center>
		</td>
		<td width="50%">
			
		</td>
		</tr>
		</table>

		</center>




</div>
    

  
<?
echo_content("footer.txt");
?>