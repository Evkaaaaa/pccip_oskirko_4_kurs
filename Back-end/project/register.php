<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
 }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!--форма регистрации-->
    <form action="include/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="FIO" placeholder="Полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Почта">
        <label>Изображение профиля</label>
        <input type="file" name="avatar" placeholder="Выберете изображение">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаут? - <a href="/userreg.php">авторизируйтесь</a>!
        </p>

        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>

</html>