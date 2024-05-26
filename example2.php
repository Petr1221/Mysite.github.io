<?php
    header ("Content-Type: text/html; charset=utf-8");
    require_once 'connect.php';
      if (isset($_POST["comment"])) {
          $comment = mysqli_real_escape_string($link, ($_POST["comment"]));
          $sql = "INSERT INTO comments (comment) VALUES ('$comment')";
          if (strlen($_POST["comment"]) < 1) {
            echo "Ошибка: Поле должно быть заполнено" . mysqli_error($link);
          }
          else if (mysqli_query($link, $sql)) {
            echo "Данные успешно добавлены";
          }
            mysqli_close($link);
      }
?>