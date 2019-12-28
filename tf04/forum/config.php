<?
$un = "techfest";
$pass = "tec45st";
$dbas = "techfest";
$lhost="207.235.6.88";

function generatepassword()
{
 $pass="";
 $length=8;
$all=explode(" ","a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z 0 1 2 3 4 5 6 7 8 9");

for($i=0;$i<$length;$i++) {
 srand((double)microtime()*1000000);
 $randy=rand(0,61);
 $r=$all[$randy];
 $pass ="$pass$r";
}
 $gpass = $pass;
 return $gpass;
}

?>
