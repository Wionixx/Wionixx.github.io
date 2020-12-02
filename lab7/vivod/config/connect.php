<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'register');

$connect = mysqli_connect('localhost', 'root', 'root', 'register');

if (!$connect) {
    die('Error connect to database!');
}
