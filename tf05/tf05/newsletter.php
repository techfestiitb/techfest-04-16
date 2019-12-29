
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
 
if(!(isset($_POST['email']))||($_POST['email']==""))
 {
	echo "Please Enter an email Id";
	exit;
 }


$dbhost = '70.85.134.18';   
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
                
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="SELECT * FROM newsletter2006 WHERE (email LIKE '{$_POST['email']}')";     
$result=mysql_query($query);
$r=mysql_fetch_row($result);

if ($r)
 {
	print "<p>This entry already exists</p>";
 }
else
{
$query="INSERT INTO newsletter2006 (email) VALUES ('{$_POST['email']}')";
$result=mysql_query($query);
if (!$result)
        {
                echo "<p>Error writing to database. Please try again</p>";

        }

else
	{
		print "<p>Your Subscribtion was successful</p>";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: Techfest 2005 <info@techfest.org>\r\n";
$headers .= "Reply-To: info@techfest.org\r\n";
$sub = "Techfest 2005 Newsletter";
$mes = "Hey\r\n\r\n";
$mes .= "This newsletter is being sent to you because you have subscribed at The Techfest 2005 Website www.techfest.org..\r\n\r\nHere are the latest updates at Techfest :";


$mes.="\r\n\r\n Lecture by Dr. Gopalakrishnan @ Communique\r\n";
$mes.="\r\nDr. Gopalakrisnan is the director of the IBM India research Laboratory. He has over 16 years of experience in technology and research and is currently leading a group of researchers in developing innovative technologies for IBM products and addressing the unique issues faced by customers in the region. He also leads the worldwide research strategy for pervasive (ubiquitous) computing.";
$mes.="\r\n\r\n Lecture by Stephen Wolfram @ Communique\r\n";
$mes.="\r\nStephen Wolfram is the creator of Mathematica and the author of A New Kind of Science. Having had a distinguished academic career beginning at an early age, Stephen Wolfram founded Wolfram Research in 1986, and has been its CEO since.";

$mes.="\r\n\r\n Simulation Contest - Faculty Defined Problems @ ChemSplash\r\n";

$mes.="\r\nThis is a contest that would test the endurance and ability of the participant who would be presented by a problem statement related to simulation by the professors at IIT Bombay. It aims at exposing the student community to the latest and foremost in modelling and coding and the hurdles they can expect in chemical technology.";

$mes.="\r\n\r\n Under construction @ LastStraw\r\n";
$mes.="\r\nIt demands the contestants to design a scaled down model (1:50) of a flyover connecting two platforms of height 10m (20cm) and 15m (30cm) and going over a overhead tram network midway of the flyover span of height 15m (30cm), using only straws, satisfying the understated constraints and that can withstand a moving load passing the flyover.";

$mes.="\r\n\r\n Micromouse @ Yantriki\r\n";
$mes.="\r\nOne needs to create a robot capable of reaching the centre of a maze in the shortest possible time.This is not only a test for your robotics' skill but also a preparation for its popular international version.";

$mes.="\r\n\r\n Rescue @ Yantriki\r\n";
$mes.="\r\nYour primary aim in this event would be to build a 'metal' warrior capable of carrying blocks up a rugged incline, filling up a rectangular well with them and completing a path to cross over the deadly moat leading to the safety of the castle where a 'Queen' must be carried to, safely. Sounds like a fairy tale? It ain't that easy, bub!!!";

$mes.="\r\n\r\n Yantriki Junior @ Yantriki\r\n";
$mes.="\r\nFor the first time in the history of Techfest, we present to you - Yantriki Junior - an event aimed specifically and *only* for students of upto 10+2. The aim of the competition is as easy as playing with a bottle of Sprite...literally!!!";

$mes.="\r\n\r\n Open Hardware @ Competitions\r\n";
$mes.="\r\nInnovate to create. Transform your innovative ideas into reality and see your dreams realize. And Open Hardware is the ultimate platform to showcase your radical and unconventional hardware developments. Special emphasis is based on innovation creativity, marketability and technical superiority.";

$mes.="\r\n\r\n Open Software @ Competitions\r\n";
$mes.="\r\nThis event beckons software wizards to excite their grey cells and come up with innovative software and programs.";
$mes.="\r\n\r\n Open Design @ Competitions\r\n";
$mes.="\r\nOpen Design Contest endeavors to challenge your designing skills to come up with new products/ideas and stimulates your creative ability in coming up with improvements for existing products. Anything that might enhance the quality of life qualifies a genuine entry for this competition. So, let your ideas see the daylight and overawe others with your innovatory might.";
$mes.="\r\n\r\nIMPORTANT :\r\n\r\nPlease note that registration forms for the following events have been put up on the website :\r\n\r\n";
$mes.="Yantriki events\r\n- Survivor\r\n- MicroMouse\r\n- Rescue\r\n- Yantriki Junior\r\n\r\n";
$mes.="Last Straw\r\n- Under Construction\r\n\r\n";
$mes.="Competitions\r\n- Open Hardware\r\n- Open Software\r\n- Open Design\r\n\r\n";

$mes.="For more information about these and other events at Techfest 2005, visit www.techfest.org. Other events are in the planning stage and information regarding the same would be put up on the Techfest website as soon as possible. Just a way of saying that expect a lot more in our next newsletter.";
$mes.="\r\n\r\nPlease note that this newsletter does not contain details regarding intra events (for IIT Bombay students only). Please refer to the website for the same.";


$mes.="\r\n\r\nHoping to see you all in January at Techfest 2005,";

$mes .= "\r\n\r\nTeam Techfest ";


$mes.="\r\n\r\np.s. : This mail is being sent to you because you have subscribed to the 
Techfest 2005 newsletter on the website www.techfest.org . If that is not 
the case, then please send a polite mail to info@techfest.org requesting 
you to be taken off the mailing list. It shall be in effect from the next 
newsletter.";


$h = mail($_POST['email'], $sub, $mes, $headers);

	}
        $fp=fopen("./subscribe.txt","a+");
        fwrite($fp,$_POST['email']."\n"); 
        fclose($fp);
        
}
echo_content("footer.txt");
?>   

	