<?php
require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Товари</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>Ціна</th>
            <th>Розмір</th>
            <th>Назва</th>
        </tr>

        <?php

            $sneakers = mysqli_query($connect, "SELECT * FROM `sneakers`");

            $sneakers = mysqli_fetch_all($sneakers);

            foreach ($sneakers as $sneakers) {
                ?>
                    <tr>
                        <td><?= $sneakers[1] ?></td>
                        <td><?= $sneakers[2] ?></td>
                        <td><?= $sneakers[3] ?></td>            
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $sneakers[0] ?>">Видалити</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
