<?php
echo date("D dS M,Y h:i a");
echo $HTTP_X_FORWARDED_FOR;
echo "<br>";
list($ip1,$ip2) = split(",",$HTTP_X_FORWARDED_FOR);
echo $ip1."<br>";
echo gethostbyaddr($ip1);
echo $REMOTE_ADDR;

$hf = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo $hf;
echo gethostbyaddr($REMOTE_ADDR);
$f = checkdnsrr($REMOTE_ADDR);
if($f == TRUE)
echo "true";
else
echo "false";
echo "------------------";
 $ip = getenv('REMOTE_HOST'); 
 $host = @GetHostByAddr($ip); 

     $real_host=chop($host); 
    if($real_host){ 
       $host_arr=explode(".", $real_host); 
       $count=count($host_arr); 
       if($count > 1){ 
         if(intval($host_arr[$count-1])!=0){ 
          $host=substr($real_host,0,strrpos($real_host,".")).".*"; 
        } 
         else{ 
           $host = "*".strstr($real_host, "."); 
         } 
     } 
       else{ 
         $host=$real_host; 
       } 
    } 
     else{ 
       $host=""; 
    }
 echo $host;
echo "SAURABH BHANDARI";
?>
