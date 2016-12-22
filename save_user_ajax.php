<?php
sleep(2);
require_once "lib/database_class.php";
require_once "lib/config_class.php";

$db = new DataBase();
$config = new Config();

if(isset($_POST["reglogin"])) {
    $reglogin = $_POST["reglogin"];
    $data = $db->select("users", array('*'), "", "", "`login`='$reglogin'");
    if ($data[0]) {
        echo "no";
    } else {
        echo "yes";
    }
}    