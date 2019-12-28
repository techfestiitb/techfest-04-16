<?
include('./testuser.php');
include('header.php');

if($B1==""){
exit;}

if($filename==""){
echo "<h3>No file specified</h3>";
exit;
}

if(!file_exists("../".$filename)){
echo "<h3>File Does not exists</h3>";
exit;
}

if(!is_writable("../".$filename)){
echo "<h3>File is not Writable, You will not be able to save the data</h3>";
}
$handle = fopen("../".$filename, "r");
$contents = fread($handle, filesize("../".$filename));
fclose($handle);
?>

<form method="POST" action="savefile.php">
  <p>
  <textarea rows="29" name="S1" cols="76"><? echo $contents;?></textarea></p>
  <p>&nbsp;</p>
  <input type=hidden name=filename value=<? echo $filename ?>>
  <p><input type="submit" value="Save File" name="B1">&nbsp;&nbsp;
  <input type="reset" value="Undo All changes" name="B2"></p>
</form>
