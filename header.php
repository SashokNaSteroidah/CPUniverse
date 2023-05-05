<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPUniverse</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <ul>
        <li>
            <a href="main.php">
                <h1>CPUniverse</h1>
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="main.php">главная</a>
        </li>
        <li>
            <a href="catalog.php">каталог</a>
        </li>
        <li>
            <span id="signup">ЗАРЕГИСТРИРОВАТЬСЯ</span>
        </li>
        <li>
            <span id="signin">ВОЙТИ</span>
        </li>
    </ul>
    <div class="back_black" style="display: none"></div>
    <div class="signin" style="display: none">
        <h1>Вход</h1>
        <label for="">
            <input placeholder="Email" type="text">
            <input placeholder="Пароль" type="password">
            <input value="Войти" type="button">
        </label>
    </div>
    <div class="signup" style="display: none">
        <h1>Регистрация</h1>
        <label for="">
            <input placeholder="Email" type="text">
            <input placeholder="Никнейм" type="text">
            <input placeholder="Пароль" type="password">
            <input value="Зарегистрироваться" type="button">
        </label>
    </div>
</header>

