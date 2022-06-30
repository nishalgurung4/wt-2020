<?php 


var_dump($_COOKIE);
setcookie("username", "", time() - 3600, '/');

var_dump($_COOKIE);