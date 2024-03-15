<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /');
 }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Профиль пользователя</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!--профиль-->
    <div class="profile">
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="400">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a><br>
        <a href="/user.php">На главную</a><br>
        <a href="include/logoutUser.php" class="logout">Выйти из аккаута</a>
    </div>
</body>

</html>