<?php
if($HTTP_GET_VARS['open']==""){
print "Illegal Access";
exit;
}
else
{ ?>

<html>
<head><title>T E C H F E S T  2 0 0 4</title>
<script language='javascript'>
window.name='techfest';
</script>
<script language="JavaScript1.2">
window.moveTo(0,0);
</script>
      	   <frameset rows=96,*,45 border=0>
	      	  <frameset cols=*,795,* framespacing=0 border=0 marginwidth=0 frameborder=0>
				<frame src=lefttop.html marginwidth=0 scrolling=no noresize border=0>
            	  	<frame src=middletop.html marginwidth=0 name="frTop" scrolling=no border=0 noresize>
      		 	 <frame src=righttop.html scrolling=no marginwidth=0 border=0 noresize>
			</frameset>
		<frameset cols=*,800,* framespacing=0 border=0 
marginwidth=0 frameborder=0>
			<frame src=noname.html marginwidth=0 scrolling=no noresize border=0>
   	<frame src=main.php?file=<? echo $HTTP_GET_VARS['open'] ?>  name="midFrame" scrolling=auto noresize>
			<frame src=noname.html marginwidth=0 scrolling=no noresize border=0>
		</frameset>
	        <frameset cols=*,795,* name="s3" framespacing=0 border=0 marginwidth=0 frameborder=0>
			<frame src=leftbottom.html marginwidth=0 scrolling=no noresize border=0>
              	<frame src=middlebottom.html marginwidth=0 name="bottom" scrolling=no border=0 noresize>
      	  	<frame src=rightbottom.html scrolling=no marginwidth=0 border=0 noresize>
		</frameset>

         </frameset>
<noframes>
<!-- Begin Free-Banners v2.1 HTML Tag. All Rights Reserved. Patent 
Pending. -->
<center>
<iframe 
src="http://ads.free-banners.com/cgi-bin/adserver/banner?iid=355259&istatus=1&iogeography=34406400&iocategory=302120960&iolanguage=26&ifilter=2&type=2&page=1" 
hspace=0 vspace=0 width=468 height=60 marginwidth=0 marginheight=0 
frameborder=0 scrolling=no>
<a 
href="http://ads.free-banners.com/cgi-bin/adserver/click?iid=355259&istatus=1&iogeography=34406400&iocategory=302120960&iolanguage=26&ifilter=2" 
target="_top"><img
src="http://ads.free-banners.com/cgi-bin/adserver/banner?iid=355259&istatus=1&iogeography=34406400&iocategory=302120960&iolanguage=26&ifilter=2&type=1&page=1" 
width=468 height=60 border=0 alt="Free-Banners"></a></iframe><br>
<table border=0 cellpadding=0 cellspacing=0 width=468><tr><td 
align=right><a 
href="http://www.friendsearch.com/dating/dating.love/40724/" 
target="_top"><img 
src="http://ads.free-banners.com/images/textbar_blue.gif"
border=0></a><a href="http://www.free-banners.com/" target="_top"><img 
src="http://ads.free-banners.com/images/fbbar.gif" 
border=0></a></td></tr></table>
</center>
<!-- End Free-Banners v2.1 HTML Tag. All Rights Reserved. Patent Pending. 
-->

</noframes> </html>
