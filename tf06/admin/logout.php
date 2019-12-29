<?php

setcookie("Cookie","muhaha",time()-3600);

?>
<html>
			<HEAD><SCRIPT LANGUAGE="JavaScript">
			redirTime = "1";
			redirURL = "index.php";
			function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
			</script>
			<BODY onLoad="redirTimer()">
			</body>
			</html>