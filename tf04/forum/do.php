<?
$fi = fopen("ab.htm","w");
fwrite($fi, stripslashes($te));
fclose($fi);

?>
<HTML>
<HEAD>
</HEAD>
<BODY>
Done
</BODY>
</HTML>
