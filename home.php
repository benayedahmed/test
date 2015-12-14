<?php
//Code written by: Robert c. Soriano
//sorianorobertc@gmail.com
//https://www.facebook.com/ThatixSC2
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Home - Login Box Shake Effect</title>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="main">
<h1>Welcome to Home Page</h1>
<a href="logout.php">Logout</a>
</div>
</body>
</html>