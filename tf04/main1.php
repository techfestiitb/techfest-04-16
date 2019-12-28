<?php
$f = $HTTP_GET_VARS['file'];
if($f == "") $f = "./base/home.php";
if(!file_exists("./".$f)){
?>
<style type='text/css'>
a:link{color:#0000ff; text-decoration: none};
a:visited{color:#0000ff; text-decoration:none};
a:hover{color:#CBAC59; text-decoration:none;};
a:active{color:#0000ff; text-decoration: none};
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
body, p, table, tr, td, .inf, ul, ol, .dis
{
	font-family: "Verdana";
	color: #23332c;
        font-size: 9pt;
        font-weight: 10pt;
        line-height: 13pt;
}

body
{
margin-right: 20px;
	text-align: justify;

}
blockquote,ol,ul
{
margin-right: 0px;
padding-right: 0px; 
padding-left: 0px;
margin-left: 25px;
}
.mystyle {
 font-family: "Verdana";
        color: #23332c;
        font-size: 9pt;
        font-weight: 10pt;
        line-height: 13pt;
        text-align: justify;

}
TD.mystyle {
 font-family: "Verdana";
        color: #23332c;
        font-size: 9pt;
        font-weight: 10pt;
        line-height: 13pt;
        text-align: justify;

}
TR TD.mystyle {
 font-family: "Verdana";
        color: #23332c;
        font-size: 9pt;
        font-weight: 10pt;
        line-height: 13pt;
}
TABLE TR TD.mystyle { font-family: "Verdana";
        color: #23332c;
        font-size: 9pt;
        font-weight: 10pt;
        line-height: 13pt;
}
TABLE TR TD.mystyle { font-family: "Verdana";
        color: #23332c;
        font-size: 9pt;
        font-weight: 10pt;
        line-height: 13pt;
	}


body {
  scrollbar-arrow-color: #293932;
  scrollbar-3dlight-color: #000000;
  scrollbar-highlight-color: #ffffff;
  scrollbar-face-color: #dddec1;
  scrollbar-shadow-color: #808080;
  scrollbar-darkshadow-color: #000000;
  scrollbar-track-color: #dde0ca;
} 
.ts, .duk { font-Size: 8pt; }
.inf { align: justify; }
.blacklink { font-Size: 8pt; color: #333333; text-decoration: none }
.blacklink:hover { color: #0000ff; text-decoration: underline }
.greylink:link { color: #7f8068; text-decoration: none}
.greylink:visited {color:#7f8068; text-decoration:none}
.greylink:hover {color:#293932; text-decoration:none}
.greylink:active {color:#7f8068; text-decoration: none}
.grey1link:link { color: #1f3d55; text-decoration: none}
.grey1link:visited {color:#1f3d55; text-decoration:none}
.grey1link:hover {color:#60666b; text-decoration:none}
.grey1link:active {color:#1f3d55; text-decoration: none}
.grey2link:link { color: #60666b; text-decoration: none}
.grey2link:visited {color:#60666b; text-decoration:none}
.grey2link:hover {color:#1f3d55; text-decoration:none}
.grey2link:active {color:#60666b; text-decoration: none}
.sidebar { font-size: 10px; color: #CCCCCC; text-decoration: none }
.sidebar:hover { color: #FFFFFF; text-decoration: none; }
a:link{color:#0000ff; text-decoration: none};
a:visited{color:#0000ff; text-decoration:none};
a:hover{color:#000000; text-decoration:none;};
a:active{color:#0000ff; text-decoration: none};
.copyright { font-Size: 8pt; color: #CCCCCC; text-decoration: none }
.inf { align: justify; }
</style>
</HEAD>

<BODY width=280 bgcolor=#ffffff>
<?php
print("<font
style='font-size:9pt; font-family:verdana; font-weight:10'>");
include_once($f);
$f = "http://www.techfest.org/last.php" . "?f=" .$f;
//include($f);
}
?>
