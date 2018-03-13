<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1><b>Вход в систему</b></h1>
<div>
    <form action="#" method="post">
        <input data-validation="letternumeric" data-validation-error-msg="Поле с логином является обязательным для заполнения" type="text" name="login" placeholder="Введите логин" class="input"><br>
        <input data-validation="length" data-validation-length="min8" data-validation-error-msg="Пароль должен быть не меньше 8 символов" type="password" name="password" placeholder="Введите пароль" class="input"><br>
        <input type="submit" value="Войти" class="button">
    </form>
    <a href="/">
        <p><button class="button">Назад</button></p>
    </a>
</div>
    <script type="text/javascript" src="/assets/js/jquery-3.1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script type="text/javascript" src="/assets/js/script.js"></script>
</body>
</html>