<?php 

setcookie("username", "nishal", time() + (86400 * 30), "/");

header("location:dashboard.php");

echo "login form here";



