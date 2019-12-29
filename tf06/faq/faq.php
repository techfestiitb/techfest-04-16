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

    <div id="content">
     <h1 id="toptext">FAQ</h1> 

<h3>What is Techfest?</h3>

<p>Techfest is the annual technological festival of Indian Institute of Technology (I.I.T.), Bombay. Techfest has become the foremost event of its kind enjoying the participation of over 30,000 students, faculty and about 1,500 corporate executives from all over the country.
Techfest includes a wide range of events including competitions, workshops, lectures and exhibitions. For details about the last 6 Techfests that have been, please  go through the lookbacks.
Techfest, in its 9th avatar, will be held from 20th - 22nd January, 2006. 
We invite you to share our dream and realize its fruition with us.</p>

<h3>What is the rough structure of events at Techfest?</h3>

<p>Events at Techfest are designed keeping in mind the diverse interests of students in different fields. This year we have divided the festival into six major themes which are <br>
-      <a href="../ai/index.php">Artficial Intelligence</a><br>
-      <a href="../cosmos/index.php">Cosmos</a><br>
-      <a href="../concreate/index.php">Concreate</a><br>
-      <a href="../erustique/index.php">E-Rustique</a><br>
-      <a href="../sixth_gear/index.php">Sixth Gear</a><br>
-      <a href="../smart_tech/index.php">Smart Tech</a><br>
</p>

<h3>How do I register for the competitions at Techfest?</h3>

<p>The details of all the competitions are provided on the web-site itself and this is the only way to register for the competitions and workshops. Please fill the respective form to register yourself. More details will be available once you register for your respective competition.</p>


<h3>How can I reach I.I.T. Bombay?</h3>

<p>Bombay (or Mumbai) is excellently linked by both rail and road with all parts of India. I.I.T. Bombay is situated in Powai and may be reached by both local trains and public road transport.</p>

<h3>What are the arrangements for food during Techfest?</h3>

<p>Food will not be provided with accommodation. However, there will be canteens at all major venues during Techfest to provide all snacks and drinks at reasonable prices.</p>

<h3>Can more than one team take part from one institute?</h3>

<p>Yes, any number of teams are welcome from one college. However, all the teams have to register online individually for the particular competition. </p>

<h3>Can school students also take part in Techfest?</h3>

<p>Students from all institutes, schools and colleges are invited at Techfest-2006. School students are also most welcome to attend Techfest, either as participants or visitors.</p>
<h3>Can one person participate in more than one competition?</h3>
<p>Yes, a person can participate in any number of competitions by registering for them online on our website.</p>

<br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>