<?php
setcookie('user', $user['name'], time() - 3600, "/");
header('Location: ../lab1/laba1.html');
 ?>
