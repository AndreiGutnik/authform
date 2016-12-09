<!doctype html>
<html lang="en">
<head>
    <title>Регистрация</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Описание" />
    <meta name="keywords" content="Ключевые слова" />
    <!--<link rel="stylesheet" type="text/css" href="css/style.css" /> -->
    <!-- <script type="text/javascript" src="js/jquery.form.js"></script> -->
</head>
<body>
    <h2>Регистрация</h2>
    <form action="save_user.php" method="POST">
        <p>
            <label>Ваш логин:<br />
            <input name="login" type="text" size="15" maxlength="15"></label>
        </p>
        <p>
            <label>Ваш пароль:<br />
            <input name="password" type="password" size="15" maxlength="15"></label>
        </p>
        <p>
            <input type="submit" name="submit" value="Зарегистрироваться">
        </p>
    </form>
</body>
</html>