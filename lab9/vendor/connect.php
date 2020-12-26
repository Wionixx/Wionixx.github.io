<?php

    $connect = mysqli_connect("web", 'root', 'root');

    if (!$connect) {
        die('Error connect to DataBase');
    }
