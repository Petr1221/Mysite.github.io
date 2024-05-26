<?php
    require_once 'connect.php';
      if (isset($_POST["login"]) && isset($_POST["password"])) {
          $login = mysqli_real_escape_string($link, (trim($_POST["login"])));
          $password = mysqli_real_escape_string($link, (trim(md5($_POST["password"]))));
          $sql = "INSERT INTO Users (login, password) VALUES ('$login', '$password')";
          $query = mysqli_query($link, "SELECT `password`, `user_id` FROM `users` WHERE `login` = '$login' LIMIT 1");
          $row = mysqli_fetch_array($query);
          if (mysqli_num_rows($query) > 0) {
            if($row['password'] != $password) echo "Ошибка: Пара логин - пароль не совпадает". mysqli_error($link);
            else if ($row['password'] == $password) {
              setcookie("login",$login, time()+3600*24);
              setcookie("password",$password, time()+3600*24);
              header("location: http://mysite/profile.php");
              die(); //вы вошли в систему
            }
          }
          else if (!preg_match("/^[\w\d_.+-]+@[\w\d-]+.[\w]+$/",$_POST['login'])) {
            echo "Ошибка: Логин может состоять только из букв английского алфавита и цифр" . mysqli_error($link);
          }
          else if ((strlen($_POST["password"]) < 7 || strlen($_POST["password"]) > 30)) {
            echo "Ошибка: Пароль должен быть длиной от 7 до 30 символов" . mysqli_error($link);
          }
          else if ((strlen($_POST["login"]) < 7 || strlen($_POST["login"]) > 30)) {
            echo "Ошибка: Логин должен быть длиной от 7 до 30 символов" . mysqli_error($link);
          }
          else if (mysqli_query($link, $sql)) {
            setcookie("login",$login, time()+3600*24);
            setcookie("password",$password, time()+3600*24);
            $message = 'Вы успешно зарегистрировались!';
            echo "<script type='text/javascript'>
              alert('$message')
              window.location.replace('http://mysite/profile.php');
            </script>";
          }
          mysqli_close($link);
      }
?>