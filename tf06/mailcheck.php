<?php
	    $headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2006<hover.junior@techfest.org>\r\n";
		$headers .= "Reply-To: hover.junior@techfest.org\r\n";
		$sub = "Techfest 2006 - Important regarding Hover Junior ";
		$mes .= "\r\nHello there,";
		$mes .= "\r\n\r\nThis mail is being sent to u since our databases show that you have registered for the competition Hover Junior at Techfest 2006.";
		$mes .= "\r\n\r\nThis competition (as the name suggests) is for those students studying in schools or junior colleges for classes upto 10+2 only. As per the information filled in by you in the registration form, you are a college student and thus are not elligible for the competition. For the same reason your registration has been suspended. If thats not the case kindly drop a polite mail to hover.junior@techfest.org verifying your elligibilty. ";
		$mes .= "\r\n\r\nFor queries contact:
Amardeep
Manager, Sixth Gear
amar@techfest.org
Ph. +91-98201 91213

Aditya Chaoji
Manager, Sixth Gear
aditya@techfest.org
Ph. +91-98693 57291";
		
		$h = mail("mailsiddj@gmail.com", $sub, $mes, $headers);
		$h = mail("amardeep_s@iitb.ac.in ", $sub, $mes, $headers);
		
		
?>