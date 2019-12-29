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
     <h1 id="toptext">Sponsors Techfest 2005</h1> 
	 
	<center>

                                
                        <img 
src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/rel.jpg" border=0 
class="sponsors" >




		<table width="65%">

		<tr>
		<td width="50%">
			<center>
			
 			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/veritas.jpg"  border=0 class="sponsors" >

			</center>
		</td>
		<td width="50%">
			<center>

 			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/tatamotors.jpg"  border=0 class="sponsors" >

			</center>


		</td>
		</tr>

		<tr>
		<td width="50%">


			<center>

<img src= "http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/microsoft.jpg" class="sponsors" border=0>





			</center>


		</td>
		<td width="50%">
			<center>


<img src= "http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/indianoil.gif" class="sponsors" border=0>





			</center>


		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>
<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/hcc.gif" class="sponsors" border=0>






			</center>


		</td>
		<td width="50%">

			<center>

<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/dhruva.jpg" class="sponsors" border=0>



			</center>


		</td>
		</tr>

		<tr>
		<td width="50%">
			<center>

			
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ibm.jpg"  class="sponsors" border=0>



			</center>
		</td>
		<td width="50%">
			<center>

			
			<img 
src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/honeywell.gif"
 class="sponsors" border=0>



			</center>
		</td>
		</tr>



<tr>
		<td width="50%">
			<center>

			
			<img 
src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/mastek.jpg"
 class="sponsors" border=0>



			</center>
		</td>
		<td width="50%">
			<center>

			
			<img 
src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/zeebusiness.jpg"
 class="sponsors" border=0>



			</center>
		</td>
		</tr>



		<tr>
		<td width="50%">

			<center>

			
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/chip.gif"
 class="sponsors" border=0 width=150 vspace=4>





			</center>

		</td>
		<td width="50%">
			<center>

			
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/ie.jpg"  border=0 class="sponsors" vspace=7>


			</center>


		</td>
		</tr>


		<tr>
		<td width="50%">
			<center>

			

			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/aramex.jpg"
 class="sponsors" border=0>



			</center>
		</td>
		<td width="50%">
			<center>

			
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/bcl.jpg"
 class="sponsors" border=0>



			</center>

		</td>
		</tr>
		<tr>
			<td width="50%">
			<center>
			
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/intel.gif" class="sponsors" border="0">
			
			
			
			
			
			</center>
			
			</td>
			<td width="50%">




			<center>

			
			<img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/indialinks.jpg"
 class="sponsors" border=0>



			</center></td>
			</tr>


</table>


</center>



     
<br><br><br>

</div>
    

  
<?
echo_content("footer.txt");
?>