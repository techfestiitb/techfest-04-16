<html>
<head><title>Accomodation Desk</title></head>
<br><br><br><br><br>
<style type="text/css">
a {color:#FFFFFF; text-decoration:none;}
a:link {color:#FFFFFF; text-decoration:none;}
a:visited {color:#FFFFFF; text-decoration:none;}
a:hover {color:#D0D0D0; text-decoration:underline;}
</style>




<?php 

if ($_GET['stat']=="part")
{
?>

<body onLoad="focus();accomodate.regnum.focus()" style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
<form name='accomodate' method='post' action='final.php'>
<br><br>
<center><h2>Participants</h2></center>
<br><br><br><br><br><br>
Registration number of the team</font><br>
<input type='text' name='regnum' size="30"><br>
Number of males to be accomodated<br>
<input type="text" name="males"  value='0' size="6"><br>
Number of females to be accomodated<br>
<input type="text" name="females"  value='0' size="6"><br>
Other Details<br>
<textarea name="details" rows="5" cols="30"></textarea><br>
<input type='submit' name='action' value="Enter">

</form>

</body>

</html>
<?

}

else if ($_GET['stat']=="visit")
{
?>

<body onLoad="focus();visitors.college.focus()" style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
<form  name='visitors' method='post' action='visitor.php'>
<br><br>
<center><h2>Visitors</h2></center>
<br><br><br><br><br><br>
Registration number of the team   :NA<br>
Name of the College<br> 
<input type='text' name='college' size="30"><br>
Contingent Leader<br>
<input type='text' name='leader' size="30"><br>
Number of males to be accomodated<br>
<input type="text" name="males" value='0' size="6"><br>
Number of females to be accomodated<br>
<input type="text" name="females" value='0' size="6"><br>
Other Details<br>
<textarea name="details" rows="5" cols="30"></textarea><br>
<input type='hidden' name='name' value='<? echo "{$_GET['t']}"; ?>'>
<input type='submit' name='action' value="Enter">

</form>

</body>

</html>
<?
}
?>


  

		
		
		
		