<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Форма авторизации</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Описание" />
    <meta name="keywords" content="Ключевые слова" />
</head>
<body>
    <h2>Авторизация</h2>
    <form action="auth.php" method="POST">
        <p>
            <label for="login">Ваш логин:</label><br />
            <input id="login" name="login" type="text" size="15" maxlength="15">
            <span></span>
        </p>
        <p>
            <label for="password">Ваш пароль:</label><br />
            <input id="password" name="password" type="password" size="15" maxlength="15">
            <span></span>
        </p>
        <p>
            <input id="submit" type="submit" name="submit" value="Войти" disabled><br />
            <a href="reg.php">Зарегистрироваться</a>
        </p>
    </form>
    <br />
    <?php    
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
        echo "Вы вошли на сайт, как гость<br /><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {
        echo "Вы вошли на сайт, как ".$_SESSION['login']." <a href='logout.php'>Выйти</a><br /><a  href='http://tvpavlovsk.sk6.ru/'>Теперь можете перейти по ссылке</a>";
    }
    ?>
</body>
</html>