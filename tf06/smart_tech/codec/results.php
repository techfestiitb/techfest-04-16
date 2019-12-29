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
echo_content("side_codec.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<a name="intro"></a>
<h1 id="toptext">Codec - Shortlist</h1> 
<p>The following have been shortlisted for Codec Workshop.</p>
<table border="0" cellpadding="5">
<tr><td>CD06129</td><td>Shalin Mehta</td></tr>
<tr><td>CD06151	</td><td>Yogesh Assudani 		</td></tr>
<tr><td>CD06153	</td><td>Mandalia Hemang R		</td></tr>
<tr><td>CD06170	</td><td>P.S.K. Balaji			</td></tr>
<tr><td>CD06238 	</td><td>Rohit Deshpande 		</td></tr>
<tr><td>CD06263	</td><td>Balla S. Arunkumar 		</td></tr>
<tr><td>CD06266	</td><td>Kumar Ashutosh 		</td></tr>
<tr><td>CD06278	</td><td>Kavit S. Vaishnav 		</td></tr>
<tr><td>CD06288	</td><td>Rakesh Peter 			</td></tr>
<tr><td>CD06319</td><td>	Harsh Soni 			</td></tr>
<tr><td>CD06361	</td><td>Maulik Adhia 			</td></tr>
<tr><td>CD06398	</td><td>Abhay Mavalankar 		</td></tr>
<tr><td>CD06402 	</td><td>Vibhor Tayal 			</td></tr>
<tr><td>CD06404	</td><td>Lilesh Bhade 			</td></tr>
<tr><td>CD06407	</td><td>Alok Patnaik 			</td></tr>
<tr><td>CD06412	</td><td>Umesh Pandey	 	</td></tr>
<tr><td>CD06421	</td><td>Piyush Bihani 			</td></tr>
<tr><td>CD06499</td><td>	Mayur Dixit 			</td></tr>
<tr><td>CD06500	</td><td>Sumeet Kale 			</td></tr>
<tr><td>CD06529	</td><td>Rupali Shah			</td></tr>
<tr><td>CD06589	</td><td>Shaikh Sharique 		</td></tr>
<tr><td>CD06635	</td><td>Sanket Goswami 		</td></tr>
<tr><td>CD06637	</td><td>Saurabh Sane 			</td></tr>
<tr><td>CD06645	</td><td>Dube Rahul S. 		</td></tr>
<tr><td>CD06646	</td><td>V.Sundeep 			</td></tr>
<tr><td>CD06648	</td><td>Abhignyan Nagisetti 		</td></tr>
<tr><td>CD06654	</td><td>Ranna Parekh 			</td></tr>
<tr><td>CD06715	</td><td>Ruchi Shah 			</td></tr>
<tr><td>CD06716	</td><td>Ankita Sanwal 		</td></tr>
<tr><td>CD06728	</td><td>Arohi Thakkar		 	</td></tr>
<tr><td>CD06733	</td><td>Abhishek.S.Gandhi 		</td></tr>
<tr><td>CD06735</td><td>	R Karthik 			</td></tr>
<tr><td>CD06756	</td><td>Monajit Dey 			</td></tr>
<tr><td>CD06757 	</td><td>Kavitha Annamalai		</td></tr>
<tr><td>CD06763 	</td><td>Jatan Vyas 			</td></tr>
<tr><td>CD06769	</td><td>Mukul Sharma 		</td></tr>
<tr><td>CD06771	</td><td>T.Meenakshi 			</td></tr>
<tr><td>CD06791	</td><td>Nitin Agrawal 			</td></tr>
<tr><td>CD06792	</td><td>Nikhil Agarwal 		</td></tr>
<tr><td>CD06793	</td><td>Saureen D Bhatt 		</td></tr>


</table> 
<br>
For queries contact:<br><br>
Ayush Agrawal<br>
Manager, Smart Tech<br>
<a href="http://www.techfest.org/mail.php?email=ayush@techfest.org">ayush@techfest.org</a><br>
Ph. +91-98699 22308<br>
<br><br>
<br>
<br>
<br>
<br>
</div>


  
<?
echo_content("footer.txt");
?>