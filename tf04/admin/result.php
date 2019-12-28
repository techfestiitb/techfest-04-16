<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==''){
echo "INVALID ACCESS";
exit;
}
echo "Welcome <b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
include('header.php');

if($action == ""){
?>
<br><br><b>Select the category for which result to be published ..</b><br>
<FORM ACTION="publish.php" METHOD="POST">
<p>
  <input type="radio" value="SST" unchecked name="category"><b>Single Span Truss (44 met)</b><br>
  <input type="radio" value="TST" name="category" unchecked><b>Two Span Truss (48 met)</b><br>
  <input type="radio" value="AT" name="category" unchecked><b>Arch Truss (36 met)</b><br>
<!---  <input type="radio" value="SSA" name="category" unchecked><b>Single Span with Anchorages (48 met)</b><br>
  <input type="radio" value="TSA" name="category" unchecked><b>Two Span with Anchorages (56 met)</b></p>
-->  <p><br><br>
<INPUT TYPE="SUBMIT" NAME="action" VALUE="Select Category">
</FORM>
<?


}
