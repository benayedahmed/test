<?php
//Code written by: Robert c. Soriano
//sorianorobertc@gmail.com
//https://www.facebook.com/ThatixSC2
session_start();
if (!empty($_SESSION['login_user']))
{
    $_SESSION['login_user'] = '';
}
header("Location:index.php");

?>
