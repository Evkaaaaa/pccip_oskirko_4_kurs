<?php 
    require_once '/OSPanel/domains/ITOG/include/connect.php';
    $query = "SELECT * FROM `news`;"; 
    $result = mysqli_query($connect, $query); 

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link rel="stylesheet" href="/assets/css/card.css">
    <link rel="stylesheet" href="/assets/css/mainpage.css">


</head>

<body>
    <?php require "users/blocks/header.php" ?>

    <div class="main">
        <br>
        <br>
        <h1>Изучай китайский язык с нами!</h1>
        <br>
        <br>

        <div class="cards">
            <!-- Карточка товара -->
            <div class="card">
                <!-- Верхняя часть -->
                <div class="card__top">
                    <!-- Изображение-ссылка товара -->
                    <a href="#" class="card__image">
                        <img src="/img/course.jpg" />
                    </a>
                    <!-- Скидка на товар -->
                    <div class="card__label">-10%</div>
                </div>
                <!-- Нижняя часть -->
                <div class="card__bottom">
                    <!-- Цены на товар (с учетом скидки и без)-->
                    <div class="card__prices">
                        <div class="card__price card__price--discount">135$</div>
                        <div class="card__price card__price--common">150$</div>
                    </div>
                    <!-- Ссылка-название товара -->
                    <a href="#" class="card__title">
                        Курсы китайского языка
                    </a>
                    <!-- Кнопка добавить в корзину -->
                    <button class="card__add">Записаться</button>
                </div>
            </div>

            <div class="card">
                <!-- Карточка товара .. -->
                <div class="card">
                    <!-- Верхняя часть -->
                    <div class="card__top">
                        <!-- Изображение-ссылка товара -->
                        <a href="#" class="card__image">
                            <img src="/img/books.jpg" />
                        </a>
                        <!-- Скидка на товар -->
                        <div class="card__label">-10%</div>
                    </div>
                    <!-- Нижняя часть -->
                    <div class="card__bottom">
                        <!-- Цены на товар (с учетом скидки и без)-->
                        <div class="card__prices">
                            <div class="card__price card__price--discount">135$</div>
                            <div class="card__price card__price--common">150$</div>
                        </div>
                        <!-- Ссылка-название товара -->
                        <a href="#" class="card__title">
                            Курсы китайского языка
                        </a>
                        <!-- Кнопка добавить в корзину -->
                        <button class="card__add">Перейти</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <!-- Карточка товара .. -->
                <div class="card">
                    <!-- Верхняя часть -->
                    <div class="card__top">
                        <!-- Изображение-ссылка товара -->
                        <a href="#" class="card__image">
                            <img src="/img/Genshin-Impact-leaks_05.jpg" />
                        </a>
                        <!-- Скидка на товар -->
                        <div class="card__label">-10%</div>
                    </div>
                    <!-- Нижняя часть -->
                    <div class="card__bottom">
                        <!-- Цены на товар (с учетом скидки и без)-->
                        <div class="card__prices">
                            <div class="card__price card__price--discount">135$</div>
                            <div class="card__price card__price--common">150$</div>
                        </div>
                        <!-- Ссылка-название товара -->
                        <a href="#" class="card__title">
                            Курсы китайского языка
                        </a>
                        <!-- Кнопка добавить в корзину -->
                        <button class="card__add">Перейти</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <!-- Карточка товара .. -->
                <div class="card">
                    <!-- Верхняя часть -->
                    <div class="card__top">
                        <!-- Изображение-ссылка товара -->
                        <a href="#" class="card__image">
                            <img src="/img/hfb.jpg" />
                        </a>
                        <!-- Скидка на товар -->
                        <div class="card__label">-10%</div>
                    </div>
                    <!-- Нижняя часть -->
                    <div class="card__bottom">
                        <!-- Цены на товар (с учетом скидки и без)-->
                        <div class="card__prices">
                            <div class="card__price card__price--discount">135$</div>
                            <div class="card__price card__price--common">150$</div>
                        </div>
                        <!-- Ссылка-название товара -->
                        <a href="#" class="card__title">
                            Курсы китайского языка
                        </a>
                        <!-- Кнопка добавить в корзину -->
                        <button class="card__add">Перейти</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <!-- Карточка товара .. -->
                <div class="card">
                    <!-- Верхняя часть -->
                    <div class="card__top">
                        <!-- Изображение-ссылка товара -->
                        <a href="#" class="card__image">
                            <img src="/img/man.jpg" />
                        </a>
                        <!-- Скидка на товар -->
                        <div class="card__label">-10%</div>
                    </div>
                    <!-- Нижняя часть -->
                    <div class="card__bottom">
                        <!-- Цены на товар (с учетом скидки и без)-->
                        <div class="card__prices">
                            <div class="card__price card__price--discount">135$</div>
                            <div class="card__price card__price--common">150$</div>
                        </div>
                        <!-- Ссылка-название товара -->
                        <a href="#" class="card__title">
                            Курсы китайского языка
                        </a>
                        <!-- Кнопка добавить в корзину -->
                        <button class="card__add">Перейти</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

</html>