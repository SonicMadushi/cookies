<?php

session_start();

$u = $_SESSION["u"];

echo "Welcome Back";

echo "&nbsp";

echo $u["name"];



?>