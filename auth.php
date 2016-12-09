<?php
    require_once "lib/database_class.php";

    $db = new DataBase();

    session_start();
    if (isset($_POST['login']))  {$login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password']))  {$password=$_POST['password']; if ($password =='') { unset($password);} }
    if (empty($login) or empty($password))
    {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);

    $myrow = $db->select("users", array("*"), `login`=='$login');

    if (empty($myrow[0]['password']))
    {
        exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
        if ($myrow[0]['password'] == md5($config->secret.$password)) {
            $_SESSION['login']=$myrow[0]['login'];
            $_SESSION['id']=$myrow[0]['id'];
            echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
        }
        else {
            exit ("Извините, введённый вами login или пароль неверный.");
        }
    }