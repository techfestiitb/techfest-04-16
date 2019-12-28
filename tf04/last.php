<?php
$f = $HTTP_GET_VARS['f'];
?>
<!--stopprint--><hr>

<table width=100% border=0 cellspacing=0 cellpadding=0>
<tr><td align=left><font style="font-size:10px; font-face:arial">
<a href=<?php print "tell/comment.php?file=".$f; ?>><img src="images/comments.gif" border=0></a>
</td><td align=center><font style="font-size:10px; font-face:arial">
<a href="tell/recommend.php?filesend=<? echo $f?>" ><img src="images/send.gif" border=0></a>
</td><td align=right><font style="font-size:10px; font-face:arial">
<a href="phprint.php" target="_blank"><img src="images/print.gif" border=0></a>
</td></tr>
</table>
<br>
<font style="font-size:10px; font-face:arial">
<?php
print "This file was last modified on <b>".date("F j, Y, g:i a",filemtime($f));
?>
</b>

<br>
<B>&copy;Copyright Techfest 2004.</B>
For any queries relating to the website contact the <a class=greylink
href="tell/mailto.php?to=bhandari@techfest.org"><b>webmaster</a>.</b> 
<br>
Hosting courtesy - <B><a class=greylink
href="http://www.indialinks.com" target="_blank">Indialinks 
Managed Hosting</a></B>.<br>
</body>
</html>

