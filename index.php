<?php
//echo file_get_contents('dom.html');
$title = 'Полиграфия - оборудование';
$h1 = 'Главная';
$year = 2019;

$a = 10;
$b = 20;

$a -= $b= ($a += $b) - $b;
var_dump($a, $b);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<header>
    <div class="container">
        <img src="images/en_color.png" alt="11" class="logo">
        <nav>
            <a href="dom.html" class="lin">Главная</a>
            <a href="product.html" class="lin">Каталог</a>
            <a href="contact.html" class="lin">Контакты</a>
        </nav>
    </div>
</header>
<div class="main">
    <hr>
    <h2><?= $h1 ?></h2>
    <h2><?= $year ?></h2>
    <p class="fon3"> Компания «Альфа-принт» с момента своего возникновения в 1999 году работает на рынке
        офисного
        оборудования и оперативной полиграфии. Мы предлагаем своим партнерам наилучшие цены, кратчайшие сроки поставки и
        оперативное сервисное обслуживание. Сотрудниками компании накоплен большой опыт по индивидуальным и комплексным
        решениям для полиграфии. <br>
    <p class="fig"><strong>Наши продукты и решения помогают клиентам сэкономить на затратах и увеличить прибыль.</strong>
    </p>
    <p><img src="images/poli1.jpg" alt="poli"></p>
    <p align="center" class="fon3"><strong>Главным своим достижением</strong> мы считаем доверие наших клиентов и стремимся оправдать его. Приоритетом в этой работе
        является постоянное повышение профессионализма наших сотрудников и высокая культура обслуживания.
    </p>
</div>
<div class="footer1">
    <p class="footer">&copy;Все права защищены</p>
</div>
</body>
</html>
