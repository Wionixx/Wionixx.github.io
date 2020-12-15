<?php
    require_once 'config/connect.php';
    $sneakers_id = $_GET['id'];

    $sneakers = mysqli_query($connect, "SELECT * FROM `sneakers` WHERE `id` = '$sneakers_id'");

    $sneakers = mysqli_fetch_assoc($sneakers);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Product</title>
</head>
<body>
    <h2>Ціна: <?= $sneakers['price'] ?></h2>
    <h4>Назва: <?= $sneakers['name'] ?></h4>
    <p>Розмір: <?= $sneakers['size'] ?></p>

    <hr>

    </form>

</body>
</html>
