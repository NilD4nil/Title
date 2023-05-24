<?php
session_start();
echo $_SESSION['error'];
unset($_SESSION['error']);
?>
<form action="../php/registration.php" method="post">
    <label for="login">Логин:</label>
    <input type="text" id="login" name="login">
    <br>
    <label for="password"> Пароль:</label>
    <input type="text" id="password" name="password">
    <br>
    <label for="passrep">Повторите пароль:</label>
    <input type="text" id="passrep" name="passrep">
    <br>
    <label for="name">Ваше имя:</label>
    <input type="text" id="name" name="name">
    <br>
    <input type="submit" value="Войти">


</form>
<a href="./auth_form.php">Авторизация</a>