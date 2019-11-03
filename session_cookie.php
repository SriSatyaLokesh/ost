<?php
session_start();
$_SESSION['NAME']='VISSU';
echo "session started";
echo " ";
echo "cookie also started";
setcookie("uname","viswanath"); ?><?php
session_start();
echo "cookie value is : ";
echo $_COOKIE['uname'];
echo "session value is : ";
echo $_SESSION['NAME'];
session_destroy();
?>
