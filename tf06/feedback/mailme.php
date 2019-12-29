<?php
	$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2006 <info@techfest.org>\r\n";
		$headers .= "Reply-To: info@techfest.org\r\n";
		$sub = "Techfest 2005 Feedback";
		$mes .= "\r\n\r\nHey";
		$mes .= "\r\n\r\nTechfest is scheduled to be held in its 9th avatar from 20-22
January, 2006. Over the years, it has grown into the largest of its
kind in Asia.";

		$mes.="\r\n\r\nOur databases inform us that you participated in Techfest 2005.
In our constant efforts to reach greater heights, we we would like
your valuable feedback.";
$mes.="\r\n\r\nPlease take time to fill this form by following this
http://www.techfest.org/feedback/index.php All your valuable
inputs/suggestions/requests will be given full attention.";
	$mes.="\r\n\r\nTechfest 2006 Team";
	$h = mail("siddharth@techfest.org", $sub, $mes, $headers);
?>