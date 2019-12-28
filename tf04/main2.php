<?php
$f = $HTTP_GET_VARS['file'];
if($f == "") $f = "./base/home.php";
if(!file_exists("./".$f)){
?>
<style type='text/css'>
a:link{color:#0000FF; text-decoration: none};
a:visited{color:#0000FF; text-decoration:none};
a:hover{color:#CBAC59; text-decoration:underline;};
a:active{color:#0000FF; text-decoration: none};
</style>
<body bgcolor=#ffffff>
<div align="center">
<center>
<table border="1" cellpadding="12" cellspacing="0" style="border-collapse: collapse" bordercolor="#000000" width="85%">
 <tr>
 <td width="100%"><b>Sorry</b> ,<p>This link is a <b>broken link</b>. This might be due 
 to :<ul type="square">
<li>File you requested <u>does not exists</u>.</li>
<li>Or the file you asked for <u>has been deleted or moved</u>.</li>
</ul>
<p>Help us in maintaining site by <a href=<? print 'tell/report.php?url='.$f.'&ref='.$HTTP_REFERER ?>>Reporting</a> this broken link or <a href=<? print $HTTP_REFERER ?>>Continue</a>
  with Techfest Website 
  <p>Thanks<p><u><b>Techfest Web Team </b></u></td>
  </tr>
  </table>
    </center>
    </div>
    </body>

<?php
exit;
}else{
?>
<HTML>
<HEAD>
<TITLE>newtechfest2</TITLE>
<link rel="stylesheet" href="custom.css" type="text/css">
<style type="text/css">
p, table, tr, td, .inf, ul, ol, .dis
{
	font-family: "Arial";
	color: #000000;
}
body {
  scrollbar-arrow-color: #0000FF;
  scrollbar-3dlight-color: #000000;
  scrollbar-highlight-color: #E0E0E0;
  scrollbar-face-color: #d4d2d2;
  scrollbar-shadow-color: #808080;
  scrollbar-darkshadow-color: #000000;
  scrollbar-track-color: #E0E0E0;
} 
.ts, .duk { font-Size: 8pt; }
.inf { align: justify; }
.blacklink { font-Size: 8pt; color: #333333; text-decoration: none }
.blacklink:hover { color: #0000FF; text-decoration: underline }
.sidebar { font-size: 10px; color: #CCCCCC; text-decoration: none }
.sidebar:hover { color: #FFFFFF; text-decoration: none }
a:link{color:#0000FF; text-decoration: none};
a:visited{color:#0000FF; text-decoration:none};
a:hover{color:#CBAC59; text-decoration:underline;};
a:active{color:#0000FF; text-decoration: none};
.copyright { font-Size: 8pt; color: #CCCCCC; text-decoration: none }
.inf { align: justify; }
</style>
</HEAD>

<BODY width=280 bgcolor=#ffffff>
<?php
print("<font style='font-size:11pt; font-family:arial; font-weight:10'>");
include_once($f);
$f = "http://www.techfest.org/last.php" . "?f=" .$f;
include($f);
}
?>
