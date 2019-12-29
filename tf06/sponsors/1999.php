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
     <h1 id="toptext">Sponsors Techfest 1999</h1> 
	 <center>
		<table width="65%">
		<tr>
		<td width="50%">
			<center>			
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/att.jpg" class="sponsors">


			</center>			
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/bt.jpg" width=150 class="sponsors">

			</center>
		</td>
		</tr>
		



		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/cadbury.gif"  class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/discovery.gif" width=110 class="sponsors">


			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>


				<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/express.gif" height=50 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>


			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/i2.gif" width=100 class="sponsors">

			</center>
		</td>
		</tr>


		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ibm.jpg" width=100  class="sponsors">
			</center>
		</td>
		<td width="50%">


			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/infosys.jpg" width=110 class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/itppl.jpg"   class="sponsors">


			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/oracle.jpg" width= 150 class="sponsors">

			</center>

		</td>
		</tr>

		<tr>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/pepsi.gif" width=80 class="sponsors">


			</center>
		</td>
		<td width="50%">
			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/vsnl.jpg" class="sponsors">

			</center>

		</td>
		</tr>

		</table>

		</center>
	 
	









</div>
  
<?
echo_content("footer.txt");
?>