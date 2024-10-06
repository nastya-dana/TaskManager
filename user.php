<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['login'])) {
    $login = strip_tags($_POST['login']);
}
if (isset($_POST['password'])) {
    $password = strip_tags($_POST['password']);
}
echo "Приветствую тебя: $login! Регистрация прошла успешно!";
