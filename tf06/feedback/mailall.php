<?		
		
		$table[0]="digitalcert2k5";
		$table[2]="decathalon2k5";
		$table[1]="design2k5";
		$table[3]="cro2k5";
		$table[4]="viscometer2k5";
		$table[5]="survivor2k5";
		$table[6]="securecoding2k5";
		$table[7]="rescue2k5";
		$table[8]="powerboats2k5";
		
		print_r($table);
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2006 <info@techfest.org>\r\n";
		$headers .= "Reply-To: info@techfest.org\r\n";
		$sub = "Techfest 2005 Feedback";
		$mes .= "\r\n\r\nHey";
		$mes .= "\r\n\r\nTechfest is scheduled to be held in its 9th avatar from 20-22
		January, 2006. Over the years, it has grown into the largest of its
		kind in Asia.";

		$mes.="\r\n\r\nOur databases inform us that you participated in Techfest 2005.
		In our constant efforts to reach greater heights, we would like
		your valuable feedback.";
		$mes.="\r\n\r\nPlease take time to fill this form by following this
		http://www.techfest.org/feedback/index.php. All your valuable
		inputs/suggestions/requests will be given full attention.";
		$mes.="\r\n\r\nTechfest 2006 Team";
		$mes.="\r\nEmail:info@techfest.org";
		$mes.="\r\nPh:+91-22-25764045";
		$dbhost = '70.85.134.18';
		$dbname = 'techfest';
		$dbuser = 'techfest';
		$dbpasswd = 'tec45st';
		$index=0;
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		
	for ($k=0;$k<9;$k++)
	{		

		$file=$table[$k];
		echo "<br><br><br><br><br><br>".$file."<br>";
		$query="SELECT * FROM ".$file;
		$result=mysql_query($query,$link);
		$len=mysql_num_fields($result);
		echo "no of fields".$len."<br>";
		for($i=0;$i<$len;$i++)
		{
			$str=mysql_field_name($result,$i);
			echo $str."<br>";
			if(!(stristr($str, 'email') === FALSE))
			{
				$fields[$index]=$i;
				$index++;
			}

		}
		print_r($fields);
		echo "<html><body>";
		/*$nof=count($fields);
		$query="SELECT * FROM ".$file;
		$result=mysql_query($query,$link);
		while($row=mysql_fetch_row($result))
		{
			for($i=0;$i<$nof;$i++)
			{	
				$j=$fields[$i];
				$email=$row[$j];
				$email=trim($email);
				$h = mail($email, $sub, $mes, $headers);
				if($h == TRUE)
				{
					echo " <p>Your mail was sent successfully to ".$email." .</p>";
	 			}
			}

		}	*/
	}
?>
