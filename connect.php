<?php
    $link = mysqli_connect('127.0.0.1', 'root', '', 'mysite');
    if (!$link) {
        die ("Ошибка: нет подключения к серверу" . mysqli_connect_error());
      }
?>
