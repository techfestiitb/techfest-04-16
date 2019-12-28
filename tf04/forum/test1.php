<?
/* Subject of the posted letter */
   $esub = "Feedback Form";
/* MySQL Configurations */
   $lhost = "localhost";
   $un = "xnitin";
   $pass = "s2imple";
   $dbas = "xnitin_uk_db";
/* Final message */
   $final = "<BR><BR><BR><CENTER><B>Thank you for signing up.</B></CENTER>";
?>

<? include("header.ini"); ?>
<HEAD>
<TITLE>Signup</TITLE>
</HEAD>
<BODY BGCOLOR=#FFFFFF>
<FONT FACE=Arial SIZE=-1>
<? 
                                            $host = "mysqldb.thinkquest.org"; 
                                            $user = "C001572"; 
                                            $pass = "g9zupdb3"; 
                                            mysql_connect($host, $user, $pass); 
                                            mysql_select_db("C001572");
$result = mysql_query("SELECT zusername FROM userinfo");
if (!$result) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    exit();
    }
while ( $row = mysql_fetch_array($result) ) {
    echo($row["zusername"]);
    }
                                            mysql_close();
                                            ?>


</B><? include("footer.ini"); ?>
</HTML>
