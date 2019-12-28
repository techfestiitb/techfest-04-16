<?
$spg="logout";
include("config.php");
?>
<?
   $user = $HTTP_COOKIE_VARS["user"];
   setcookie("user", "", time()-604800);
?>
<? include("header.ini"); ?>

<?
echo("User $user succesfully signed out!");
?>

</B><? include("footer.ini"); ?>
