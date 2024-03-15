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
    <title>Авторизация и регестрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!--форма авторизации-->
    <form action="include/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Пароль">
        <button type="submit">Войти</button>
        

        <p>
            У вас нет аккаута? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>

        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>

</html>