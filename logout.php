<?php

session_start();
unset($_SESSION["user"]);
echo '<meta http-equiv="refresh" content= "1; url= index1.html" />';
die("You are logged out");
?>