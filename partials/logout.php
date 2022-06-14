<?php


session_start(); // this starts the session

echo 'logging out';

session_destroy();
header("Location: /php_program/index.php");



?>