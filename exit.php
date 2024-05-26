<?php
    require_once 'connect.php';
    if (isset($_COOKIE['login'])) {
        unset($_COOKIE['login']);
        setcookie("login",$login, time()-3600*24);
        setcookie("password",$password, time()-3600*24);
        header("location: http://mysite/profile.php");
        die();
    } else {
        return false;
    }
    mysqli_close($link);
?>