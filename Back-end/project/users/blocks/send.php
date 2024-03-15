<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обратная связь</title>
  <link rel="stylesheet" href="/assets/css/send.css">
</head>

<body>
  <h1>Связаться с нами!</h1>
  <div class="container">
    <div class="cta-form">
      <h2>Заполните форму</h2>
      <br>
    </div>
    <form action="/sendemail.php" method="post">

      <label for="name">ФИО</label>
      <input type="text" name = "FIO" placeholder="Введите аше ФИО" /> <br> <br>

      <label for="email">Email</label>
      <input type="email" name = "email" placeholder="Email" /> <br> <br>

      <label for="subject">Ваше сообщение</label> <br> 
      <textarea placeholder="Сообщение" name = "mess"></textarea>

      <input type="submit" value="Отправить">
    </form>
    <a href="/">На главную</a>
  </div>
</body>