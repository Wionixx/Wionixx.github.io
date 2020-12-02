<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sneakers</title>
</head>
<body bgcolor="silver">

<table border="1" bordercolor="green">
  <tr>
    <th>Ціна</th>
    <th>Розмір</th>
    <th>Назва</th>
    <th>Фото</th>
  </tr>

<?php
$mysql = new mysqli('localhost','root','root','register');
$sneakers = $mysql->query("SELECT * FROM `sneakers`)");
 ?>
  <tr <?=$sneakers[0]?>>
    <td><?=$sneakers[0]?></td>
    <td><?=$sneakers[1]?></td>
    <td><?=$sneakers[2]?></td>
    <td><img src="../lab5/image/k2.jpg" width="150" height="150"></td>
  </tr>
  <?php


   ?>

  <tr>
    <td>4000 грн</td>
    <td>42</td>
    <td>Nike Air Force</td>
    <td><img src="../lab5/image/k2.jpg" width="150" height="150"></td>
  </tr>
  <tr>
    <td>4000 грн</td>
    <td>42</td>
    <td>Nike Air Force</td>
    <td><img src="../lab5/image/k2.jpg" width="150" height="150"></td>
  </tr>
</table>


</body>
</html>
