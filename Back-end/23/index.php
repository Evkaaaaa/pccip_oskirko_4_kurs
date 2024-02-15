<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 23</title>
</head>
<body>

<?php
//Устанавливаем временную зону (замените на свою)
date_default_timezone_set('Europe/Minsk');

// Получаем текущую дату и время
$currentDate = date('j. m. Y');
$currentTime = date('H:i:s');
$dayOfWeek = date('l');

// Выводим результат
echo "Дата: $currentDate<br>";
echo "Время: $currentTime<br>";
echo "День недели: $dayOfWeek<br>";
?>

<?php
// Устанавливаем временную зону
date_default_timezone_set('Europe/Minsk');

// Функция для получения дня недели на русском языке
function getDayOfWeek($date) {
    $daysOfWeek = array(
        'воскресенье',
        'понедельник',
        'вторник',
        'среда',
        'четверг',
        'пятница',
        'суббота'
    );

    // Получаем текущий день недели (0 - воскресенье, 6 - суббота)
    $dayOfWeekNumber = date('w', strtotime($date));

    // Возвращаем день недели на русском языке
    return $daysOfWeek[$dayOfWeekNumber];
}

// Пример вызова функции для текущей даты
$текущая_дата = date('Y-m-d');
$день_недели = getDayOfWeek($текущая_дата);

echo "Сегодня " . $день_недели . ".";

// Если форма отправлена
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Вызываем функцию и выводим результат
    $russianDayOfWeek = getDayOfWeek($currentDate);
    echo "Сегодня $russianDayOfWeek.\n";
}

?>
<form method="post">
        <input type="submit" value="Показать день недели">
    </form>
</body>
</html>
