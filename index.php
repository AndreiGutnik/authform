<?php
session_start();
/*require_once "lib/database_class.php";
require_once "lib/config_class.php";

$config = new Config();
$db = new DataBase();

$data=$db->select("employ", array('name', 'sex', 'code', 'title'), "dep", "employ.id_dep=dep.id");
for($i=0; $i<count($data); $i++){
    echo $data[$i]['name']." ".$data[$i]['sex']." ".$data[$i]['code']." ".$data[$i]['title']."<br />";
}*/
?>
<!doctype html>
<html lang="en">
<head>
    <title>Главная страница сайта</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Описание" />
    <meta name="keywords" content="Ключевые слова" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- <script type="text/javascript" src="js/jquery.form.js"></script> -->
</head>
<body>
    <h2>Авторизация</h2>
    <form action="auth.php" method="POST">
        <p>
            <label>Ваш логин:<br />
            <input name="login" type="text" size="15" maxlength="15"></label>
        </p>
        <p>
            <label>Ваш пароль:<br />
            <input name="password" type="password" size="15" maxlength="15"></label>
        </p>
        <p>
            <input type="submit" name="submit" value="Войти">
            <br />
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