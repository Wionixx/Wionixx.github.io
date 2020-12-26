<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'web');

$connect = mysqli_connect('localhost', 'root', 'root', 'web');

if (!$connect) {
    die('Error connect to database!');
}
