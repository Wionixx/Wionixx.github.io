<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Реєстрація</title>
</head>
<body>
</body>
<div class="container mt-4">
  <?php
    if($_COOKIE['user'] == ''):
   ?>
  <div class="row">
    <div class="col">
      <h2>Авторизація</h2>
      <form action="auth.php" method="post">
          <input type="text" name="login" class="form-control"
          id="login" placeholder="Введіть логін: ">
          <input type="password" name="pass" class="form-control"
          id="pass" placeholder="Введіть пароль: "><br>
          <button class="btn btn-success">Авторизація</button>
      </form>
    </div>

  </div>
  <div class="col">
    <h2>Реєстрація</h2>
  <form action="check.php" method="post">
    <input type="text" name="login" class="form-control"
    id="login" placeholder="Введіть логін: ">
    <input type="text" name="name" class="form-control"
    id="name" placeholder="Введіть ім'я: ">
    <input type="password" name="pass" class="form-control"
    id="pass" placeholder="Введіть пароль: "><br>
    <button class="btn btn-success">Зареєструватись</button>


  </form>
</div>
<?php else: ?>
<p>Привіт, <?=$_COOKIE['user']?>! Для виходу натисніть<a href="exit.php"> сюди</a></p>
<?php endif; ?>
</html>
