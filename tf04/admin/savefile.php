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
$handle = fopen("../".$filename, "w");
$r = fwrite($handle,$S1);
fclose($handle);
if($r){
echo "<h3>File Saved</h3>";
}else
{
echo "Unable to save the file";
}
