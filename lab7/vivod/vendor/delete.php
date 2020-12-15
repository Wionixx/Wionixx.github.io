<?php
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `sneakers` WHERE `sneakers`.`id` = '$id'");

header('Location: /');
