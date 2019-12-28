<?php
include('http://www.techfest.org/box.php?');
IF ($action=="") {
?>
<p> <form METHOD=POST 
ACTION="http://www.techfest.org/competitions/quiz1.php">
<div align="center">
<h1>QUIZ 1</h1>
<hr>
<table cellspacing="10">
<tr>
<td class=mystyle><img src="competitions/1.jpg"><br>comments.</td>
<td class=mystyle><img src="competitions/1.jpg"><br>comments.</td>
<td class=mystyle><img src="competitions/1.jpg"><br>comments.</td>
</tr>
<tr>
<td class=mystyle><img src="competitions/1.jpg"><br>comments.</td>
<td class=mystyle><img src="competitions/1.jpg"><br>comments.</td>
<td class=mystyle><img src="competitions/1.jpg"><br>comments.</td>
</tr>
</table>
<hr>
<p><h3>Type in your answers:<h3><br><br>
1:-<input type="text" name="ans1" size="25"></input><br>
2:-<input type="text" name="ans2" size="25"></input><br>
3:-<input type="text" name="ans3" size="25"></input><br>
4:-<input type="text" name="ans4" size="25"></input><br>
5:-<input type="text" name="ans5" size="25"></input><br>
6:-<input type="text" name="ans6" size="25"></input><br>
</p>
<hr>
<p>What is your name?<br>
<input type="text" name="name" size="25"></input><br><br>
<input TYPE="hidden" NAME="referer" VALUE="<? echo $ref; ?>">
<input TYPE="hidden" NAME="time" VALUE="<? echo date('D dS M,Y h:i a'); ?>">
Your e-mail address:<br>
<input type="text" name="email" size="35"></input><br><br>
Your college:<br>
<input type="text" name="college" size="40"></input>
</p>
<hr>
<br><br>
<input type="submit" name="action" value="Submit"></input>
<input type="reset" name="action" value="Erase all"></input>
<input TYPE="button" NAME="action" VALUE="Cancel" onClick="Cancelit()">
</form></div>
<?
                                                                                
} ELSEIF ($action=="Send") {
if($name =="" ){
 print "<BR><p>You have not entered your name";
 print "<br>Click the browser back button and try again";
 exit;
 }
elseif($college == ""){
 print "<BR><p>You have not entered your college";
 print "<br>Click the browser back button and try again";
 exit;
 }
elseif($college == ""){
 print "<BR><p>You have not entered your college";
 print "<br>Click the browser back button and try again";
 exit;
 }
elseif($email == ""){
  print "<BR><p>You have not entered your email address";
  print "<br>Click the browser back button and try again";
  exit;
 }else{
$file = "result.txt";
if(!file_exists($file)){
 print "<br><p>ERROR : No file exist to write<br>Continue with the website by 
clicking
<a href=http://www.techfest.org/main.php?file=".$referer.">here</a>";
 exit;
}
                                                                                
$fl = fopen($file,"a+");
$message = $referer." | ".$name." | ".$college." | ".$time."\r\n";
fwrite($fl,$message);
fclose($fl);
print "<br>Thanks for participating in the online competition";
print "<br>Results of the online competition will be informed very soon.";
print "<br>You will be informed by mail.<br><br>";
 }
}
?>

