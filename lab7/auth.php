<?php
$login = $_POST['login'];
$name = $_POST['name'];
$pass = $_POST['pass'];

  $pass = md5($pass."gasadhwegf48145");

  $mysql = new mysqli('localhost','root','root','register');

  $result = $mysql->query("SELECT * FROM `clients` WHERE `login` = '$login' AND `pass` = '$pass'");

  $user = $result->fetch_assoc();
  if(count($user) == 0) {
    echo "Користувач не знайден!";
    exit();
  }

setcookie('user', $user['name'], time() + 3600, "/");

  $mysql->close();

  header('Location: ../lab1/laba1.html');
 ?>
