<?php
$add = $HTTP_GET_VARS['to'];
if ($add != ""){
list($l,$s) = split("@",$add);
if($s != "techfest.org"){
print $add."   ".$s;
print "Invalid access 1";
exit;
  }
}
if($add == "" && action ==""){
 print "No addres provided";
 exit;
}
if($action == "Send")
$add = $towhom;
include('http://www.techfest.org/box.php?text=Mail%20to%20'.$add);
$from = $REMOTE_ADDR;
$ip = $HTTP_X_FORWARDED_FOR;
if(ip != ""){
list($ip1,$ip2) = split(",",$ip);
}else
$ip1 = "";
IF ($action=="") {
?>
<br><br>
<div align="center">
<center>
<script language='javascript'>
function Cancelit(){
parent.midFrame.location="<? echo $HTTP_REFERER ?>";
} 

function deactivate(){
this.myForm.towhom.disable=true;
this.myForm.remoteip.disable=true;
if(this.myForm.realfrom!=null){
this.myForm.realfrom.disable=true;
}
}
</script>
<font face=Verdana size=4 color=#if3d55>

<table border="0" cellpadding="12" cellspacing="0" style="border-collapse: collapse" bordercolor="#000000" width="85%">
 <tr>
 <td class=mystyle wiidth="100%" align=left><b>
<FORM NAME=myForm METHOD=POST ACTION="<? echo "$PHP_SELF"; ?>">
<font face=Verdana size=2 px>

Mail To :&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name=towhom value=<? echo $add ?> size="20" onFocus="myForm.emailfrom.focus();">
<input type="hidden" name=remoteip value=<? echo $from ?>>
<?php
 if($ip1 != "")
 print "<input type=hidden name=realfrom value=".$ip1.">";
?><p align=left>
Your Email : <input type="text" name=emailfrom size=30><br> 
Subject &nbsp;&nbsp;&nbsp;&nbsp; : <input type="text" name=sub
size=30><br>
Message :<br><textarea name=mes rows=10 cols=60></textarea><br>
<INPUT
TYPE="submit" NAME="action" VALUE="Send">&nbsp;&nbsp;&nbsp;&nbsp;<INPUT
TYPE="reset" NAME="reset" VALUE="Reset">&nbsp;&nbsp;&nbsp;&nbsp;<INPUT
TYPE="button" NAME="action" VALUE="Cancel" onClick="Cancelit()">
</font>
</FORM>
 </td>
  </tr>
  </table>
	</font>
    </center>
    </div>
<?

} ELSEIF ($action=="Send") {

function SnowCheckMail($Email,$Debug=false) 
{ 
    global $HTTP_HOST; 
    $Return =array();   
    // Variable for return. 
    // $Return[0] : [true|false] 
    // $Return[1] : Processing result save. 

    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $Email)) { 
        $Return[0]=false; 
        $Return[1]="${Email} is E-Mail form that is not right."; 
        if ($Debug) echo "Error : {$Email} is E-Mail form that is not right.<br>";          
        return $Return; 
    } 
    else if ($Debug) echo "Confirmation : {$Email} is E-Mail form that is not right.<br>"; 

    // E-Mail @ by 2 by standard divide. if it is $Email this "lsm@ebeecomm.com".. 
    // $Username : lsm 
    // $Domain : ebeecomm.com 
    // list function reference : http://www.php.net/manual/en/function.list.php 
    // split function reference : http://www.php.net/manual/en/function.split.php 
    list ( $Username, $Domain ) = split ("@",$Email); 

    // That MX(mail exchanger) record exists in domain check . 
    // checkdnsrr function reference : http://www.php.net/manual/en/function.checkdnsrr.php 
    if ( checkdnsrr ( $Domain, "MX" ) )  { 
        if($Debug) echo "Confirmation : MX record about {$Domain} exists.<br>"; 
        // If MX record exists, save MX record address. 
        // getmxrr function reference : http://www.php.net/manual/en/function.getmxrr.php 
        if ( getmxrr ($Domain, $MXHost))  { 
      if($Debug) { 
                echo "Confirmation : Is confirming address by MX LOOKUP.<br>"; 
              for ( $i = 0,$j = 1; $i < count ( $MXHost ); $i++,$j++ ) { 
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Result($j) - $MXHost[$i]<BR>";   
        } 
            } 
        } 
        // Getmxrr function does to store MX record address about $Domain in arrangement form to $MXHost. 
        // $ConnectAddress socket connection address. 
        $ConnectAddress = $MXHost[0]; 
    } 
    else { 
        // If there is no MX record simply @ to next time address socket connection do . 
        $ConnectAddress = $Domain;          
        if ($Debug) echo "Confirmation : MX record about {$Domain} does not exist.<br>"; 
    } 

    // fsockopen function reference : http://www.php.net/manual/en/function.fsockopen.php 
    $Connect = fsockopen ( $ConnectAddress, 25 ); 

    // Success in socket connection 
    if ($Connect)    
    { 
        if ($Debug) echo "Connection succeeded to {$ConnectAddress} SMTP.<br>"; 
        // Judgment is that service is preparing though begin by 220 getting string after connection . 
        // fgets function reference : http://www.php.net/manual/en/function.fgets.php 
        if ( ereg ( "^220", $Out = fgets ( $Connect, 1024 ) ) ) { 
              
            // Inform client's reaching to server who connect. 
            fputs ( $Connect, "HELO $HTTP_HOST\r\n" ); 
                if ($Debug) echo "Run : HELO $HTTP_HOST<br>"; 
            $Out = fgets ( $Connect, 1024 ); // Receive server's answering cord. 

            // Inform sender's address to server. 
            fputs ( $Connect, "MAIL FROM: <{$Email}>\r\n" ); 
                if ($Debug) echo "Run : MAIL FROM: &lt;{$Email}&gt;<br>"; 
            $From = fgets ( $Connect, 1024 ); // Receive server's answering cord. 

            // Inform listener's address to server. 
            fputs ( $Connect, "RCPT TO: <{$Email}>\r\n" ); 
                if ($Debug) echo "Run : RCPT TO: &lt;{$Email}&gt;<br>"; 
            $To = fgets ( $Connect, 1024 ); // Receive server's answering cord. 

            // Finish connection. 
            fputs ( $Connect, "QUIT\r\n"); 
                if ($Debug) echo "Run : QUIT<br>"; 

            fclose($Connect); 

                // Server's answering cord about MAIL and TO command checks. 
                // Server about listener's address reacts to 550 codes if there does not exist   
                // checking that mailbox is in own E-Mail account. 
                if ( !ereg ( "^250", $From ) || !ereg ( "^250", $To )) { 
                    $Return[0]=false; 
                    $Return[1]="${Email} is address done not admit in E-Mail server."; 
                    if ($Debug) echo "{$Email} is address done not admit in E-Mail server.<br>"; 
                    return $Return; 
                } 
        } 
    } 
    // Failure in socket connection 
    else { 
        $Return[0]=false; 
        $Return[1]="Can not connect E-Mail server ({$ConnectAddress})."; 
        if ($Debug) echo "Can not connect E-Mail server ({$ConnectAddress}).<br>"; 
        return $Return; 
    } 
    $Return[0]=true; 
    $Return[1]="{$Email} is E-Mail address that there is no any problem."; 
    return $Return; 
} 
$emailfrom=trim($emailfrom);
$email1=$emailfrom;
list ( $Username, $Domain ) = split ("@",$email1);
if($emailfrom!="" && $mes!="" && $sub!="" && $Username!=$emailfrom){
//$tr = array();
//$tr = SnowCheckMail($emailfrom,false);
//if($tr[0] == FALSE){
//print "<br><br>";
//print "Your Email address ".$emailfrom." is <b>incorrect</b>.Press your browsers back button to return.";
//exit;
//}

// sending mail
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From: ".$emailfrom."\r\n";
$headers .= "Reply-To :".$emailfrom."\r\n";

$mes .= "\r\n------------------------\r\n
         This email has been send to you from http://www.techfest.org\r\n
         Send from ".$remoteip." ";
if($realfrom != "")
$mes .= "with real IP ".$realfrom;

$mes .= "\r\n";

$h = mail($towhom, $sub, $mes, $headers);
if($h == TRUE){
print "<br><br>";
print "Your mail has been sent to ".$towhom;
}
else
print "Unable to send mail.";
}else{
print "<br><br>";
print "You have not completed all the fields.Press your browsers back button to return.";
}

} ?>
