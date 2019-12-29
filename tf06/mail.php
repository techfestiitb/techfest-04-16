
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
echo_content("side_no.txt");
echo_content("side_update.txt");
?>
<!-- ##### Main Copy ##### -->
<?php
if ($_POST['action']=="")
 {
?>
   <div id="content">
     <h1 id="toptext">Compose</h1> 

	<form method="POST" ENCTYPE="multipart/form-data" action="./mail.php">
	<table>
   	 <tr>
    	  	<td width="50%">Subject :</td>
      	  	<td width="50%"><input type="text" name="subject" value="Subject" size="20" onblur="if (this.value == '') this.value = 'Subject';" onfocus="if (this.value == 'Subject') this.value = '';" /></td>
    	</tr>
    	<tr>
      		<td width="50%">From :</td>
      		<td width="50%"><input type="text" name="from" value="Your Email Address" size="20" onblur="if (this.value == '') this.value = 'Email';" onfocus="if (this.value == 'Your Email Address') this.value = '';" /></td>
    	</tr>
    	<tr>
      		<td width="50%">To :</td>
      		<td width="50%"><? print "{$_GET['email']}"; ?></td>
    	</tr>
    	
	</table>
<input type="hidden" name ="to"  value=<? print "{$_GET['email']}"; ?>>
  	<textarea rows="9" name="mesg" cols="52"></textarea>
  	<p><input type="submit" value="Submit" name="action"></p>
	</form>
<br><br>
</div>



<?
 }
else
 {
 
 	function checkEmail($email) 
	{
		$flag=0;
   		if(eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]", $email)) 
   		{
			$flag=1;
      		return FALSE;
			
   		}

   		list($Username, $Domain) = split("@",$email);

   		if(getmxrr($Domain, $MXHost)) 
   		{
      		return TRUE;
			
   		}
   		else if ($flag==1)
   		{	
			$errstr="";
			$l=fsockopen($Domain, 25, $errno, $errstr, 30);
      		if($l) 
      		{
         		return TRUE; 
      		}
      		else 
      		{
         		return FALSE; 
      		}
   		}
		
	}
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: ".$_POST['from']."\r\n";
	$headers .= "Reply-To: ".$_POST['from']."\r\n";
	$headers.="Content-Transfer-Encoding: 8bit"."\r\n";
	$email=$_POST['to'];
	$email = trim($email);
	$m=checkEmail($email);
	$fmail=$_POST['from'];
	$fmail=trim($fmail);
	$k=checkEmail($fmail);
	$dbhost = '70.85.134.18';   
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
    
 
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());

	$query="SELECT * FROM validid WHERE (email LIKE '{$email}')";     
	$result=mysql_query($query);
	$r=mysql_fetch_row($result);
	if (!$r)
	{
	
	
		echo "<div id=content>";
		echo "<h1 id=toptext>Compose</h1>";
		echo " <p>You are not allowed to mail to this email address.</p>"; 
		echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>";
		
	}
	
	
	else if(!$k)
	 {
	 	echo "<div id=content>";
		echo "<h1 id=toptext>Compose</h1>";
		echo " <p>The email address in the from field is wrong. You must enter your email address so that we can reply you back.</p>"; 
		echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>";
	 }
	 
	  
	else 	
	{
		$h = mail($_POST['to'], $_POST['subject'], $_POST['mesg'], $headers);
		echo "<div id=content>";
		echo "<h1 id=toptext>Compose</h1>"; 
		if($h == TRUE){
		echo " <p>Your mail was sent successfully.</p>";
	 	}
		else
	 	{
		print "<p>Unable to send mail to ".$_POST['to']."</p>";
	 	} 
		echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>";
	}
	
	
 }
?>
<?
echo_content("footer.txt");
?>
