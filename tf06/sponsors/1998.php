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
<div id="content">
     <h1 id="toptext">Sponsors Techfest 1998</h1> 
	 
	<center>
		<table width="65%" >
		<tr>
		<td width="50%">
			<center>			
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/att.jpg"  class="sponsors">

			</center>			
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/amd.gif" width=60 class="sponsors">

			</center>
		</td>
		</tr>
		



		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/cadbury.gif" width=95 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ie.jpg" class="sponsors">


			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>


			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/mbt.gif" width=60 class="sponsors">

			</center>
		</td>
		<td width="50%">
			<center>


			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/novell.jpg" width=60  class="sponsors">

			</center>
		</td>
		</tr>


		<tr>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/siemens.jpg" width=150 class="sponsors">
			</center>
		</td>
		<td width="50%">


			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/pepsi.gif" width=80  class="sponsors">

			</center>
		</td>
		</tr>

		<tr>
		<td width="50%">

			<center>
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/radiostar.gif" width=70 class="sponsors">


			</center>
		</td>
		<td width="50%">
			<center>

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/informix.jpg" width=150 class="sponsors">

			</center>

		</td>
		</tr>
		</table>

		</center>


</div>
<?
echo_content("footer.txt");
?>