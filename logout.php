<?php

session_start();
unset($_SESSION["user"]);
die("you have logout");
?>