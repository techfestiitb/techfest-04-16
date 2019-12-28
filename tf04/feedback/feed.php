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

	//Publicity - how did u come to know bout techfest
if ((@$_POST['howtech']==1)||(@$_POST['howtech']==2)||(@$_POST['howtech']==3)||(@$_POST['howtech']==4))
 {
	$data=file_get("./publi/".$_POST['howtech'].".txt");
	$data=$data+1;
	$fp=fopen("./publi/".$_POST['howtech'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);
	if ($_POST['howtech']==4)
 	 {
		$siz=filesize("./publi/others.txt");
		$fp=fopen("./publi/others.txt","r+a");
		fseek($fp,$siz);	
		fwrite($fp,$_POST['others']."\n");
		fclose($fp);
	 }
}
	//Publicity - Time
if ((@$_POST['publitime']==1)||(@$_POST['publitime']==2))
 {
	$data=file_get("./publi/time/".$_POST['publitime'].".txt");
	$data=$data+1;
	$fp=fopen("./publi/time/".$_POST['publitime'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);
 }

	//Publicity - Awareness
if ((@$_POST['aware']==1)||(@$_POST['aware']==2)||(@$_POST['aware']==3))
 {
	$data=file_get("./publi/aware/".$_POST['aware'].".txt");
	$data=$data+1;
	$fp=fopen("./publi/aware/".$_POST['aware'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);
 } 


	//Events - No of participants that were a part of a contigent
	$data=file_get("./events/".$_POST['contigent'].".txt");
	$data=$data+1;
	$fp=fopen("./events/".$_POST['contigent'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);

	//Events participated in
	$siz=filesize("./events/events.txt");
	$fp=fopen("./events/events.txt","r+a");
	fseek($fp,$siz);	
	fwrite($fp,$_POST['participate']."\n");
	fclose($fp);

	//Events impression
	$siz=filesize("./events/impression.txt");
	$fp=fopen("./events/impression.txt","r+a");
	fseek($fp,$siz);	
	fwrite($fp,$_POST['impression']."\n");
	fclose($fp);

	//Events Competitive
	$siz=filesize("./events/comp.txt");
	$fp=fopen("./events/comp.txt","r+a");
	fseek($fp,$siz);	
	fwrite($fp,$_POST['comp']."\n");
	fclose($fp);

	//Events impression
	$siz=filesize("./events/noncomp.txt");
	$fp=fopen("./events/noncomp.txt","r+a");
	fseek($fp,$siz);	
	fwrite($fp,$_POST['noncomp']."\n");
	fclose($fp);

	//Events - Learn ex.
	$data=file_get("./events/learnex/".$_POST['learnex'].".txt");
	$data=$data+1;
	$fp=fopen("./events/learnex/".$_POST['learnex'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);


	//Events - Entertainment
	$data=file_get("./events/entertainment/".$_POST['entertainment'].".txt");
	$data=$data+1;
	$fp=fopen("./events/entertainment/".$_POST['entertainment'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);

	//Events - Organisation
	$data=file_get("./events/organisation/".$_POST['organisation'].".txt");
	$data=$data+1;
	$fp=fopen("./events/organisation/".$_POST['organisation'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);

	//Events - Level
	$data=file_get("./events/level/".$_POST['level'].".txt");
	$data=$data+1;
	$fp=fopen("./events/level/".$_POST['level'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);

	//Events - Canteen
	$data=file_get("./events/canteen/".$_POST['canteen'].".txt");
	$data=$data+1;
	$fp=fopen("./events/canteen/".$_POST['canteen'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);

	//Events - Overall
	$data=file_get("./events/overall/".$_POST['overall'].".txt");
	$data=$data+1;
	$fp=fopen("./events/overall/".$_POST['overall'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);

	//Events - Participate again
	$data=file_get("./events/again/".$_POST['again'].".txt");
	$data=$data+1;
	$fp=fopen("./events/again/".$_POST['again'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);

	//Events - Preference
if ((@$_POST['pref']==1)||(@$_POST['pref']==2)||(@$_POST['pref']==3)||(@$_POST['pref']==4))
 {
	$data=file_get("./events/pref/".$_POST['pref'].".txt");
	$data=$data+1;
	$fp=fopen("./events/pref/".$_POST['pref'].".txt","r+a");
	fwrite($fp,$data);
	fclose($fp);
 }
	//Accomodation
	$siz=filesize("./acco/acco.txt");
	$fp=fopen("./acco/acco.txt","r+a");
	fseek($fp,$siz);	
	fwrite($fp,$_POST['acco']."\n");
	fclose($fp);

	//Suggestions
	$siz=filesize("./suggest/suggest.txt");
	$fp=fopen("./suggest/suggest.txt","r+a");
	fseek($fp,$siz);	
	fwrite($fp,$_POST['suggest']."\n");
	fclose($fp);
	echo "Your Form has been Submitted";

?>  