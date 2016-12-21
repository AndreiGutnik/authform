<?php
require_once "lib/database_class.php";
require_once "lib/config_class.php";

$db = new DataBase();
$config = new Config();

if(!isset($_POST['login']) && $_POST['password']) {
    echo "Поля Логин или Пароль не заполнены!";
}
else {
    $login = $_POST['login'];
    $password = md5($config->secret.$_POST['password']);
    $data = $db->select("users", array("login"));
    for($i=0; $i<count($data); $i++){
        if($data[$i]['login'] == $login){
            exit("Данный логин уже существует. Введите другое имя пользователя.<br /> <a href = $config->address>Вернуться на главную</a>");
        }
    }
	$db->insert("users", array('login'=>$login, 'password'=>$password));
    header("Location: $config->address");
    exit;
}