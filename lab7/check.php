<?php
  $login = $_POST['login'];
  $name = $_POST['name'];
  $pass = $_POST['pass'];

  if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недоступна довжина логіна";
    exit();
  } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Недоступна довжина імені";
    exit();
  } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 20) {
    echo "Недоступна довжина паролю";
    exit();
  }

$pass = md5($pass."gasadhwegf48145");

  $mysql = new mysqli('localhost','root','root','register');
  $mysql->query("INSERT INTO `clients` (`name`,`login`,`pass`)
  VALUES('$name','$login','$pass')");

  $mysql->close();

  header('Location: ../lab1/laba1.html');
 ?>
