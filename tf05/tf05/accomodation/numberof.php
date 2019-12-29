<?php
include_once("./validate.php");

if ($_GET['stat']=="part")
{
?>


<html><title>Accomodation Techfest 2005</title>
<body onLoad="focus();accomodate.regnum.focus()">
<form name='accomodate' method='post' action='final.php'>
<br><br>
<center><h2>Participants</h2></center>
<br><br><br><br><br><br>
<font size="+2">Enter the Registratio number of the team</font>
<input type='text' name='regnum' size="10"><br>
Number of boys accomodated<br>
<input type="text" name="males"  value='0' size="6"><br>
Number of girls accomodated<br>
<input type="text" name="females"  value='0'size="6"><br>
Place of accomodation for boys<br>
<input type="text" name="locationm" size="30"><br>
Place of accomodation for girls<br>
<input type="text" name="locationf" size="30"><br>
<input type='submit' name='action' value="Enter">

</form>

</body>

</html>
<?

}

else if ($_GET['stat']=="visit")
{
?>
<html><title>Accomodation Techfest 2005</title>
<body onLoad="focus();visitors.college.focus()">
<form  name='visitors' method='post' action='visitor.php'>
<br><br>
<center><h2>Visitors</h2></center>
<br><br><br><br><br><br>
Registratio number of the team   :NA<br>
Name of the College<br> 
<input type='text' name='college' size="30"><br>
Contingent Leader<br>
<input type='text' name='leader' size="30"><br>
Number of boys accomodated<br>
<input type="text" name="males" value='0' size="6"><br>
Number of girls accomodated<br>
<input type="text" name="females"  value='0'size="6"><br>
Place of accomodation for boys<br>
<input type="text" name="locationm" size="30"><br>
Place of accomodation for girls<br>
<input type="text" name="locationf" size="30"><br>
<input type='hidden' name='name' value='<? echo "{$_GET['t']}"; ?>'>
<input type='submit' name='action' value="Enter">

</form>

</body>

</html>
<?
}
?>


  

		
		
		
		