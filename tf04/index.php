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
      	   <frameset rows=96,*,45 border=0>
	      	  <frameset cols=*,795,* framespacing=0 border=0 marginwidth=0 frameborder=0>
				<frame src=lefttop.html marginwidth=0 scrolling=no noresize border=0>
            	  	<frame src=middletop_g.html marginwidth=0 
name="frTop" scrolling=no border=0 noresize>
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
              	<frame src=middlebottom_g.html marginwidth=0 name="bottom" scrolling=no border=0 noresize>
      	  	<frame src=rightbottom.html scrolling=no marginwidth=0 border=0 noresize>
		</frameset>

         </frameset>
</html>
<? } ?>
