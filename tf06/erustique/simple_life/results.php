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
echo_content("side_simple.txt");
echo_content("side_update.txt");
?>
<div id="content">
<h1 id="toptext">Shortlisted Teams - The SimpleLife v1.1</h1> 
<p>The final list of selected teams for the Second Stage of the project and who should begin on the software development (if they haven't already) are:</p>
<table border="0" cellpadding="10" width="905">
<tr>
<td>SL06104<br>
Hiren Kotadiya<br>
Rakshit Menpara</td>
<td>Information Service for Baramati Village</td>
</tr>
<tr>
<td>SL06110<br>               
Akshat Shukla<br>
Abhinav Varshney<br>
Tarun Joshi<br>
Shalabh Saxena</td>
<td>Interactive Problem Solver and The Overdrive</td>
</tr>
<tr>
<td>SL06123 <br>                
Hrushikesh Mehendale<br>
Rahul Parundekar<br>
Chaitrali Amrutkar</td>
<td>Mobile Phone Solutions For Kiosks</td>
</tr>
<tr>
<td>SL06133<br>                 
Aroop Ganguly<br>
Ankit Das<br>
Sangeet Kumar Jha<br>
Ankur Singh</td>
<td>Integrated Information and Services Provider (IISP)</td>
</tr>
<tr>
<td>SL06144     <br>           
Malhar Gupta<br>
Mandar Hazare<br>
Sunil Ingle<br>
Rajiv Kedia</td>
<td> Weather Monitoring, Broadcasting and Forecasting</td>
</tr>
<tr>
<td>SL06149<br>                 
J.S.Rakesh<br>
Ritesh Phalak<br>
Dhiren K Patra<br>
Shulin Todkar</td>
<td>Video Conferencing Toolkit for Remote Healthcare in Rural India</td>
</tr>
<tr>
<td>SL06152<br>                
Alok Patnaik<br>
Vinay Kuruvilla<br>
Erinmel Priyesh Chandran<br>
Harish Surana</td>
<td> E-KRANTI (Knowledge Dissemination Service)</td>
</tr>
<tr>
<td>SL06153<br>                
Viren Shah<br>
Lave Gupta<br>
Vaibhav Patkar<br>
Vinod Naik</td>
<td> Sampoorna Gram-Vikas Pariyojana (Multiple Solutions)</td>
</tr>
<tr>
<td>SL06156  <br>              
Dhaval Giani<br>
Akshaya G<br>
Gautham Shenoy</td>
<td> The Language Translator - Apni Boli</td>
</tr>
<tr>
<td>SL06157 <br>                
Animesh Verma<br>
Nishit Ranjan<br>
Chandan Kumar<br>
K Tarun Babu</td>
<td>Information Kiosk for Form Filling & Procedures</td>
</tr>
<tr>
<td>SL06158 <br>               
Payal Bhat<br>
Nitish Suri<br>
Ajinkya Joshi</td>
<td> SANKALP.NET</td>
</tr>
<tr>         
<td>SL06162  <br>
Saurabh Jain<br>  
Arunjyoti Deori<br>  
Pulkit Goel<br>  
Rudrajit Tapada</td>
<td>Cattle and Crop Care Simplified (CCCS)</td></tr>
<tr>
<td>SL06165   <br>              
Mrunmai Mankar<br>
Monali Lodha<br>
Priyanka Patil<br>
Deepti Nalavade</td>
<td>Farming and Dairy Support Services</td>
</tr>
<tr>
<td>SL06167  <br>               
Sumit Ghosh<br>
Swaraj Ghosh<br>
Swayam Prakash<br>
Divya Rao</td>
<td>GYANSAGAR (Comprehensive Info Channel)</td>
</tr>
<tr>
<td>SL06172   <br>             
Shaurya Anand<br>
Subhamoy Mandal<br>
Anuj Sharma<br>
Praful Katta</td>
<td> Multilingual Client (Innovative Information Interchange)</td>
</tr>
<tr>
<td>
SL06176   <br>              
Abhijit Sen<br>
Saurabh Das</td>
<td>Generic Trading Service (Company Penetration Channel)</td>
</tr>
<tr>
<td>SL06181<br>                 
Satish TJ<br>
Vivek Kulkarni<br>
Ashutosh Sharma<br>
Varun Kudva</td>
<td>Vaidhya-Rogi Sahayak (Patient Database Handler)</td>
</tr>
<tr>
<td>SL06182 <br>                
Nishant Gulati<br>
Madhavshree<br>
Akshat Chowdhary</td>
<td>Moodle Module I (Library Module added with Plug-in for Indian Education System)</td>
</tr>
<tr>
<td>SL06183  <br>               
Kushal Agarwal<br>
Pratik P. Munot</td>
<td>Moodle Module II (Syllabus Module added with Unicode Support)</td>
</tr>
<tr>
<td>SL06184  <br>               
Shanker Keshavdas<br>
Akshay Bhat<br>
Siddharth Sharma<br>
Iqbal Hussein</td>
<td>Edutan India (Media and Internet for Education)</td>
</tr>
<tr>
<td>SL06187<br>                
RVRK Abhishek Sharma<br>
Shilpa Kasliwal<br>
Rachna Singh</td>
<td> Apna Bazaar (Online Agriculture Marketplace)</td>
</tr>
<tr>
<td>SL06191 <br>                
Ayush Nigam<br>
Shoban Preeth</td>
<td>Outsourcing Online</td>
</tr>
<tr>
<td>SL06193  <br>              
Mohit Vajpayee</td>
<td> Industry-Villager Mutual Benefiting Service</td>
</tr>
<tr>
<td>SL06195  <br>               
Abhishek Modi<br>
Amit Kumar Upadhyay<br>
Kush Meshram<br>
Abhishek Singh Rathore</td>
<td> Multiple Services Centre</td>
</tr>
</table>


<br>
For queries contact:<br><br>
Avinav Nigam<br>
Manager, e-Rustique<br>

<a href="http://www.techfest.org/mail.php?email=avinavnigam@techfest.org" target="_blank">avinavnigam@techfest.org</a><br>
Ph. +91-98673 86626<br>
<br><br>
 </div>
<?
echo_content("footer.txt");
?>
	 
	 
	 
	 
	