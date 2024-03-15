<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if(mysqli_num_rows($check_user) > 0 && $login == 'admin'){
    $admin = mysqli_fetch_assoc($check_user );
    
    $_SESSION['admin'] = [
        "id" => $admin['id'],
        "full_name" => $admin['full_name'],
        "avatar" => $admin['avatar'],
        "email" => $admin['email']
    ];
    header('Location: ../admin/admin.php');
}

elseif(mysqli_num_rows($check_user) >0 ){
    $user = mysqli_fetch_assoc($check_user);
    
    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];

    header('Location: ../user.php');

}

else{
    $_SESSION['message'] = 'Неверный логин или пароль!';
    header('Location: ../userreg.php');
}
 