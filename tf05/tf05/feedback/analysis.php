<?php
function file_get($file)
 {
	$d=filesize($file);
	$f=fopen($file,"r");
	$r='';
	if ($d!=0)
	 {
		$r=fgets($f,$d);
	 }
	fclose($f);
	return $r;
 }
//Publicity how did you come to know about techfest

echo "how did you come to know about techfest<br>";
echo "WEB SEARCH; ";
$result=file_get("./publi/1.txt");
echo "$result<br>";
echo "friends; ";
$result=file_get("./publi/2.txt");
echo "$result<br>";
echo "posters; ";
$result=file_get("./publi/3.txt");
echo "$result<br>";
echo "others; ";
$result=file_get("./publi/4.txt");
echo "$result<br>";


echo "When did you come to know about Techfest?<br>";
echo "Sep-Oct; ";
$result=file_get("./publi/time/1.txt");
echo "$result<br>";
echo "Dec-Jan; ";
$result=file_get("./publi/time/2.txt");
echo "$result<br>";



echo "How aware are people around you about Techfest<br>";
echo "Low; ";
$result=file_get("./publi/aware/1.txt");
echo "$result<br>";
echo "Moderate; ";
$result=file_get("./publi/aware/2.txt");
echo "$result<br>";
echo "Good; ";
$result=file_get("./publi/aware/3.txt");
echo "$result<br>";



//events


echo "Were you a member of your college contingent<br>";
echo "no answer; ";
$result=file_get("./events/0.txt");
echo "$result<br>";
echo "yes ";
$result=file_get("./events/1.txt");
echo "$result<br>";
echo "no; ";
$result=file_get("./events/2.txt");
echo "$result<br>";




echo "Learning experience<br>";
echo "0<br>";
$result=file_get("./events/learnex/0.txt");
echo "$result<br>";
echo "1<br>";
$result=file_get("./events/learnex/1.txt");
echo "$result<br>";
echo "2<br> ";
$result=file_get("./events/learnex/2.txt");
echo "$result<br>";
echo "3<br>";
$result=file_get("./events/learnex/3.txt");
echo "$result<br>";
echo "4<br>";
$result=file_get("./events/learnex/4.txt");
echo "$result<br>";
echo "5<br> ";
$result=file_get("./events/learnex/5.txt");
echo "$result<br>";
echo "6<br>";
$result=file_get("./events/learnex/6.txt");
echo "$result<br>";
echo "7<br>";
$result=file_get("./events/learnex/7.txt");
echo "$result<br>";
echo "8<br> ";
$result=file_get("./events/learnex/8.txt");
echo "$result<br>";
echo "9<br>";
$result=file_get("./events/learnex/9.txt");
echo "$result<br>";
echo "10<br>";
$result=file_get("./events/learnex/10.txt");
echo "$result<br>";








echo "Entertainment<br>";
echo "0<br>";
$result=file_get("./events/entertainment/0.txt");
echo "$result<br>";
echo "1<br>";
$result=file_get("./events/entertainment/1.txt");
echo "$result<br>";
echo "2<br> ";
$result=file_get("./events/entertainment/2.txt");
echo "$result<br>";
echo "3<br>";
$result=file_get("./events/entertainment/3.txt");
echo "$result<br>";
echo "4<br>";
$result=file_get("./events/entertainment/4.txt");
echo "$result<br>";
echo "5<br> ";
$result=file_get("./events/entertainment/5.txt");
echo "$result<br>";
echo "6<br>";
$result=file_get("./events/entertainment/6.txt");
echo "$result<br>";
echo "7<br>";
$result=file_get("./events/entertainment/7.txt");
echo "$result<br>";
echo "8<br> ";
$result=file_get("./events/entertainment/8.txt");
echo "$result<br>";
echo "9<br>";
$result=file_get("./events/entertainment/9.txt");
echo "$result<br>";
echo "10<br>";
$result=file_get("./events/entertainment/10.txt");
echo "$result<br>";



echo "Organisation<br>";
echo "0<br>";
$result=file_get("./events/organisation/0.txt");
echo "$result<br>";
echo "1<br>";
$result=file_get("./events/organisation/1.txt");
echo "$result<br>";
echo "2<br> ";
$result=file_get("./events/organisation/2.txt");
echo "$result<br>";
echo "3<br>";
$result=file_get("./events/organisation/3.txt");
echo "$result<br>";
echo "4<br>";
$result=file_get("./events/organisation/4.txt");
echo "$result<br>";
echo "5<br> ";
$result=file_get("./events/organisation/5.txt");
echo "$result<br>";
echo "6<br>";
$result=file_get("./events/organisation/6.txt");
echo "$result<br>";
echo "7<br>";
$result=file_get("./events/organisation/7.txt");
echo "$result<br>";
echo "8<br> ";
$result=file_get("./events/organisation/8.txt");
echo "$result<br>";
echo "9<br>";
$result=file_get("./events/organisation/9.txt");
echo "$result<br>";
echo "10<br>";
$result=file_get("./events/organisation/10.txt");
echo "$result<br>";







echo "Level<br>";
echo "0<br>";
$result=file_get("./events/level/0.txt");
echo "$result<br>";
echo "1<br>";
$result=file_get("./events/level/1.txt");
echo "$result<br>";
echo "2<br> ";
$result=file_get("./events/level/2.txt");
echo "$result<br>";
echo "3<br>";
$result=file_get("./events/level/3.txt");
echo "$result<br>";
echo "4<br>";
$result=file_get("./events/level/4.txt");
echo "$result<br>";
echo "5<br> ";
$result=file_get("./events/level/5.txt");
echo "$result<br>";
echo "6<br>";
$result=file_get("./events/level/6.txt");
echo "$result<br>";
echo "7<br>";
$result=file_get("./events/level/7.txt");
echo "$result<br>";
echo "8<br> ";
$result=file_get("./events/level/8.txt");
echo "$result<br>";
echo "9<br>";
$result=file_get("./events/level/9.txt");
echo "$result<br>";
echo "10<br>";
$result=file_get("./events/level/10.txt");
echo "$result<br>";






echo "Canteen<br>";
echo "0<br>";
$result=file_get("./events/canteen/0.txt");
echo "$result<br>";
echo "1<br>";
$result=file_get("./events/canteen/1.txt");
echo "$result<br>";
echo "2<br> ";
$result=file_get("./events/canteen/2.txt");
echo "$result<br>";
echo "3<br>";
$result=file_get("./events/canteen/3.txt");
echo "$result<br>";
echo "4<br>";
$result=file_get("./events/canteen/4.txt");
echo "$result<br>";
echo "5<br> ";
$result=file_get("./events/canteen/5.txt");
echo "$result<br>";
echo "6<br>";
$result=file_get("./events/canteen/6.txt");
echo "$result<br>";
echo "7<br>";
$result=file_get("./events/canteen/7.txt");
echo "$result<br>";
echo "8<br> ";
$result=file_get("./events/canteen/8.txt");
echo "$result<br>";
echo "9<br>";
$result=file_get("./events/canteen/9.txt");
echo "$result<br>";
echo "10<br>";
$result=file_get("./events/canteen/10.txt");
echo "$result<br>";






echo "Overall<br>";
echo "0<br>";
$result=file_get("./events/overall/0.txt");
echo "$result<br>";
echo "1<br>";
$result=file_get("./events/overall/1.txt");
echo "$result<br>";
echo "2<br> ";
$result=file_get("./events/overall/2.txt");
echo "$result<br>";
echo "3<br>";
$result=file_get("./events/overall/3.txt");
echo "$result<br>";
echo "4<br>";
$result=file_get("./events/overall/4.txt");
echo "$result<br>";
echo "5<br> ";
$result=file_get("./events/overall/5.txt");
echo "$result<br>";
echo "6<br>";
$result=file_get("./events/overall/6.txt");
echo "$result<br>";
echo "7<br>";
$result=file_get("./events/overall/7.txt");
echo "$result<br>";
echo "8<br> ";
$result=file_get("./events/overall/8.txt");
echo "$result<br>";
echo "9<br>";
$result=file_get("./events/overall/9.txt");
echo "$result<br>";
echo "10<br>";
$result=file_get("./events/overall/10.txt");
echo "$result<br>";




echo "Will you participate again in Techfest in the coming years<br>";
echo "no answer; ";
$result=file_get("./events/again/0.txt");
echo "$result<br>";
echo "yes ";
$result=file_get("./events/again/1.txt");
echo "$result<br>";
echo "no; ";
$result=file_get("./events/again/2.txt");
echo "$result<br>";





echo "Which of the following events are you most inclined to participate in<br>";
echo "Competitions; ";
$result=file_get("./events/pref/1.txt");
echo "$result<br>";
echo "Workshops/Lectures";
$result=file_get("./events/pref/2.txt");
echo "$result<br>";
echo "Quizzes ";
$result=file_get("./events/pref/3.txt");
echo "$result<br>";
echo "Other on the spots";
$result=file_get("./events/pref/4.txt");
echo "$result<br>";



?>
