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
echo_content("side_prayaas.txt");
echo_content("side_update.txt");
?>
 <a name="intro"></a>
<div id="content">
<h1 id="toptext">Prayaas - Shortlisted Teams</h1> 
<p>Here is the list of <strong>SHORTLISTED</strong> teams who have qualified the first round of Prayaas.</p>	 
<table border="0" cellpadding="6" cellspacing="">
<tr><td>
PR06103<br>
Harshada Ghodke		<br>
Lekha Bodhe	<br>
Pallavi Diddi	</td><td>
Pune University
		</td></tr><tr><td>
PR06113<br>
Sonal Gupta			<br>
Pushkar Raj Pande	</td><td>
IIT Roorkee
</td></tr><tr><td>
PR06119<br>
Varun Agarwal		</td><td>
IIT Madras
		</td></tr><tr><td>
PR06121<br>
Ashish Kumar Pandey		</td><td>
NITK, Surathkal
		</td></tr><tr><td>
PR06138<br>
Vikas Kansal		<br>	
Heena Mukhi			<br>
Sonam Gilhotra</td><td>
PICT<br> MITS
</td></tr><tr><td>
PR06156<br>
Bharath J			<br>
Nikhil Kulkarni<br>
T Vamsee Krishna</td><td>
NIT,SURAT
		</td></tr><tr><td>
PR06166<br>
Rohan M. Deliwala		<br>
Prerak Vachharajani	<br>
Anand Khamar	</td><td>
Hemchandracharya North Gujarat University
</td></tr><tr><td>
PR06167<br>
Sumeet S. Katariya		</td><td>
Govt. College of Engineering, Pune
		</td></tr><tr><td>
PR06168<br>
Sneha Goel			<br>
Ketki Kulkarni	<br>
Madhura Hirmukhe	</td><td>
Cummins College, Pune
</td></tr><tr><td>
		
PR06173<br>
Pallavi Tiwari			<br>
Dhruv Sakalley	</td><td>
SGSITS
</td></tr><tr><td>

PR06186<br>
Chandni Bijlani		<br>
Garima Oberai	<br>
Ritika Tondon	</td><td>
Rajasthan University
</td></tr><tr><td>
PR06201<br>
Parag salve			<br>
Navil Thul			<br>
Tushar Pimplapure</td><td>
N.U.
</td></tr><tr><td>
PR06209<br>
A.Siva Prasad			<br>
M Phanendra Kumar	<br>
T Hanuman</td><td>
Andhra University
</td></tr><tr><td>
PR06210<br>
Parmeshwar Patil		<br>
Bharat Patil<br>
Pradeep Patil	</td><td>
SRTMU, Nanded
</td></tr><tr><td>

PR06222<br>
Baliga B. Pranav		<br>
Harshad S. Baji	</td><td>
M.S University, Baroda
		</td></tr><tr><td>
PR06227<br>
Amrita Purkayastha		<br>
Bhavana Parekh	<br>
Tanvi Parikh	</td><td>
M.S University, Baroda
		</td></tr><tr><td>
PR06239<br>
Atul R. Jain			<br>
Saurabh A. Kunnawar	<br>
Amit M. Totade	</td><td>
Sant Gagde Baba, Amravati
		</td></tr><tr><td>
PR06258<br>
K.N.Surya Narayanan		<br>
G.V.Pradeep	</td><td>
Amrita Vishwa Vidyapeetham
		</td></tr><tr><td>
PR06260<br>
Praveen Jayant		<br>
Rishabh Kumar Singh	</td><td>
Narendra U.P.	
Visveswariah Technological University, Belgaum
		</td></tr><tr><td>
PR06262<br>
Abhisekh Kumar		<br>
Murtaza Lakdawala	<br>
Rohit Savaliya	</td><td>
Saurashtra
</td></tr><tr><td>
PR06286<br>
Suman Deb			</td><td>
IIT Kharagpur
		</td></tr><tr><td>
PR06298<br>
Vishal B Bansod		<br>
Hemant A Bobade	<br>
Amol E Belulkar</td><td>
Amravati
</td></tr>


</table>
<p>All shortlisted  participants please see <a href="index.php#instruc">Instructions</a> on the main page of the competition for the second round details</p>

<h3>Schedule</h3>
<p>Prayaas Exhibition is scheduled in SOM Foyer, IIT Bombay on 21st January ’06 from 9:00 AM – 4:00 PM. This will be followed by the prize distribution ceremony and ‘Meet with the Judges’ in IRCC Auditorium.</p>


For queries contact:<br><br>
Ayush Agrawal<br>
Manager, Smart Tech<br>
<a href="http://www.techfest.org/mail.php?email=ayush@techfest.org" target="_blank">ayush@techfest.org</a><br>
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