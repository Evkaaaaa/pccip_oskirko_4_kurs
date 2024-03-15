<?php
session_start();
require_once 'connect.php';

$FIO = $_POST['FIO'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    $path = 'uploades/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке файла ';
        header('Location: ../register.php');
    }
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$FIO', '$login', '$email', '$password', '$path')");
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../userreg.php');
} 
else {
    $_SESSION['message'] = 'Пароли не совпадают!';
    header('Location: ../register.php');
}
