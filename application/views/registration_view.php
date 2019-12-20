<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<?php
echo <<<HTML
<p style="color: red">${data}</p>
HTML;
?>
<div class="reg">
    <form action="/registration/personal" method="post" style="">
        <input type="text" name="login" placeholder="login" class="form-control">
        <input type="password" name="password" placeholder="password" class="form-control">
        <input type="email" name="email" placeholder="email" class="form-control">
        <button type="submit" name="btn" class="btn btn-lg btn-primary btn-block">Зарегистрироваться</button>
    </form>
    <div align="center">
        <p>template не видит стили, а гит удаляет конфигурацию</p>
    <img src="/images/office-small.jpg" align="center">
    </div>
</div>
</body>
</html>

