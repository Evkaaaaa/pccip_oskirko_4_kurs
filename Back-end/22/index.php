<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP скрипты</title>
</head>
<body>

<?php
//z2
    $p = "Программа";
    $b = "Работает";
    
    $result = $p . " " . $b;
    echo $result,"<br>";

    $result .= " хорошо"; 
    echo $result,"<br>";
?>

<?php
    $FIO = "Оскирко Эвелина Андреевна";
    for ($i = 0; $i < 12; $i++) {
        echo $FIO,"<br>";
    }
?>

<?php
// Создаем ассоциативный массив с товарами и их стоимостью
$products = [
    "Хлеб" => 5000,
    "Молоко" => 8000,
    "Сметана" => 7000
];

// Сортируем массив по убыванию стоимости товара
arsort($products);

// Выводим отсортированный массив
foreach ($products as $product => $price) {
    echo "$product: $price<br>";
}
?>

<?php
    $s1 = "Оскирко";
    $s2 = "Дом 45";
    
    //длина сироки
    $lenght = strlen($s1)/2;
    echo "Фамилия: $s1 <br>";
    echo "Длина фамилии равна $lenght <br>";
    
    //соединение строк
    $strings = $s1 . ' ' . $s2;
    echo "$strings <br>";

    //Преобразование строки к верхнему регистру:
    $regUp = mb_strtoupper($s2, 'utf-8');
    echo "$regUp <br>";
?>

<?php
function calculate_z($x, $y) {
     $z = sqrt(abs($x**2 - 0.1))/(sqrt($x**2 + 0.1)) + $x + $y**3 / log(1 + $x**2, 8);
    return $z;
}

// Пример использования функции
$x_value = 2; 
$y_value = 1.5; 

$result = calculate_z($x_value, $y_value);
echo "Значение z при x = $x_value и y = $y_value: $result";
?>
</body>
</html>