<?php
    require_once 'connect.php';
      $name = mysqli_real_escape_string($link, ($_REQUEST["name"]));
      $surname = mysqli_real_escape_string($link, ($_REQUEST["surname"]));
      $phone = mysqli_real_escape_string($link, ($_REQUEST["phone"]));
      $address = mysqli_real_escape_string($link, ($_REQUEST["address"]));
      $education = mysqli_real_escape_string($link, ($_REQUEST["education"]));
      $country = mysqli_real_escape_string($link, ($_REQUEST["country"]));
      $region = mysqli_real_escape_string($link, ($_REQUEST["region"]));
      $login = ($_COOKIE['login']);
        if (((!empty($name)) || (!empty($surname)) || (!empty($phone)) || 
        (!empty($address)) || (!empty($education)) || (!empty($country)) || 
        (!empty($region))) && (isset($_COOKIE["login"]) || (isset($_COOKIE["password"])))) {
          mysqli_query($link, "UPDATE users SET `name` = '$name', `surname` = '$surname', `phone` = '$phone', `address` = '$address', `education` = '$education', `country` = '$country', `region` = '$region' WHERE `login` = '$login' LIMIT 1");
          header("location: http://mysite/profile.php");
        }
        else if (((empty($name)) && (empty($surname)) && (empty($phone)) && 
        (empty($address)) && (empty($education)) && (empty($country)) && 
        (empty($region))) && (isset($_COOKIE["login"]) || (isset($_COOKIE["password"])))) {
          mysqli_query($link, "UPDATE users SET `name` = '$name', `surname` = '$surname', `phone` = '$phone', `address` = '$address', `education` = '$education', `country` = '$country', `region` = '$region' WHERE `login` = '$login' LIMIT 1");
          header("location: http://mysite/profile.php");
        }
        else if (!isset($_COOKIE["login"]) && (!isset($_COOKIE["password"]))) {
          header("location: http://mysite/main.php");
        }
    mysqli_close($link);
?>