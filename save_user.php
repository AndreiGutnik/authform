<?php
require_once "lib/database_class.php";
require_once "lib/config_class.php";

$db = new DataBase();
$config = new Config();

if(!isset($_POST['reglogin']) && $_POST['regpassword']) {
    echo "Поля Логин или Пароль не заполнены!";
}
else {
    $reglogin = $_POST['reglogin'];
    $regpassword = md5($config->secret.$_POST['regpassword']);
    $data = $db->select("users", array("reglogin"));
    for($i=0; $i<count($data); $i++){
        if($data[$i]['reglogin'] == $reglogin){
            exit("Данный логин уже существует. Введите другое имя пользователя.<br /> <a href = $config->address>Вернуться на главную</a>");
        }
    }
	$db->insert("users", array('login'=>$reglogin, 'password'=>$regpassword));
    header("Location: $config->address");
    exit;
}