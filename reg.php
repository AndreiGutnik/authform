<!doctype html>
<html lang="en">
<head>
    <title>Регистрация</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Описание" />
    <meta name="keywords" content="Ключевые слова" />

    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    <h2>Регистрация</h2>
    <form action="save_user.php" method="POST">
        <p>
            <label for="reglogin"><font color="red">*</font> Ваш логин:</label><br />
            <input id="reglogin" name="reglogin" type="text" size="15" maxlength="15">
            <span></span>
        </p>
        <p>
            <label for="regpassword"><font color="red">*</font> Ваш пароль:</label><br />
            <input id="regpassword" name="regpassword" type="password" size="15" maxlength="15">
            <span></span>
        </p>
        <p>
            <input type="submit" id="regsubmit" name="regsubmit" value="Зарегистрироваться" disabled>
        </p>
    </form>
</body>
</html>