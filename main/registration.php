<?php
require "./set.php";
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if($password != $password_repeat){
    $_SESSION['error'] = 'Пароли не совпадают';
    header('Location: ../pages/registr_form');
}
else{
    $user = select("SELECT * FROM users WHERE login =:login ", ['login' => $login]);
    if(!empty($user)){
        $_SESSION['error'] = 'Такой пользователь уже существует';
        header("Location: ../pages/registr_form");
    }
    else{
        $user_id = insert("INSERT INTO users(login, password) values(:login, :password) ",[
            'login' => $login,
            'password' => $password]);
        header('Location: ../pages/auth_form');
    }
}
?>