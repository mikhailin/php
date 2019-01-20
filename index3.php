<li>С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.<br>
    <br>
    <?php

    $i = 0;
    while($i < 100) {
        echo $i . PHP_EOL;
        $i+=3;
    }

?>
</li>
<br>
<li>С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
    <br>0 – это ноль.
    <br>1 – нечетное число.
    <br>2 – четное число.
    <br>3 – нечетное число.
    <br>…
    <br>10 – четное число.
    <br>
    <br>
    <?php
    $i = -1;
    do
    {
        $i++;

        if ($i == 0)
        {
            echo $i . ' - this is zero' . '<br>';
        }
        else
        {
            if ($i%2 == 0)
            {
                echo $i . ' - even number' . '<br>';
            }
            else
            {
                echo $i . ' - odd number' . '<br>';
            }
        }
    }
    while ($i <= 9);
?>
</li>
<br>
<li>Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
    <br>Московская область:
    <br>Москва, Зеленоград, Клин
    <br>Ленинградская область:
    <br>Санкт-Петербург, Всеволожск, Павловск, Кронштадт
    <br>Рязанская область … (названия городов можно найти на maps.yandex.ru)
    <br>
    <?php

    $data = array(
        'Московская область' => array(
            'Москва',
            'Зеленоград',
            'Клин' ,
            'Дмитров'
        ),
        'Ленинградская область' => array(
            'Санкт-Петербург',
            'Всеволожск',
            'Павловск' ,
            'Кронштадт'
        ),
        'Рязанская область' => array(
            'Рязань',
            'Шилово',
            'Рыбное' ,
            'Сапожок'
        ),
    );
    ?>
    <!DOCTYPE html>
    <html lang="ru" >
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <ul>
        <? foreach($data as $country => $cities): ?>
            <li><?=$country?></li>
            <ul>
                <? foreach($cities as $city): ?>
                    <li><?=$city?></li>
                <? endforeach ?>
            </ul>
        <? endforeach ?>
    </ul>
    </body>
    </html>

</li>

<li>Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).<br>
    <br>
    <?php

    function translit ($text) {

        $word = array(

            "а"=>"a",
            "б"=>"b",
            "в"=>"v",
            "г"=>"g",
            "д"=>"d",
            "е"=>"e",
            "ё"=>"e",
            "ж"=>"zh",
            "з"=>"z",
            "и"=>"i",
            "й"=>"i",
            "к"=>"k",
            "л"=>"l",
            "м"=>"m",
            "н"=>"n",
            "о"=>"o",
            "п"=>"p",
            "р"=>"r",
            "с"=>"s",
            "т"=>"t",
            "у"=>"u",
            "ф"=>"f",
            "х"=>"kh",
            "ц"=>"tc",
            "ч"=>"ch",
            "ш"=>"sh",
            "щ"=>"shch",
            "ы"=>"y",
            "э"=>"e",
            "ю"=>"iu",
            "я"=>"ia",
            "ь"=>""
        );

        return strtr($text, $word);
    }

    echo translit ("карлсон который живет на крыше");
    ?>


</li>
<br>
<li>
    Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
    <br>
    <br>
    <?php
    function delBackspace ($str) {
        $text = array (
        " " => "_",
        "!" => "",
        "?" => "",
        "%" => ""
                );
        return strtr($str, $text);
}
echo delBackspace("ПРОБЕЛ ПРОБЕЛ ПРОБЕЛ");
    ?>
</li>
<br>

<li>Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».<br><br>
    <?php

    $rossia = array (
        "Московская область" => array (
            'Москва',
            'Зеленоград',
            'Клин',
            'Дмитров'
        ),
        "Ленинградская область" => array (
            'Санкт-Петербург',
            'Всеволожск',
            'Павловск',
            'Кронштадт'
        ),
        "Рязанская область" => array (
            'Рязань',
            'Шилово',
            'Рыбное',
            'Сапожок'
        ),
    );



    foreach ($rossia as $oblast => $city){
        foreach ($city as $key => $value){
            if (mb_substr($value, 0, 2) == "К")
                echo $value . "<br/>";
        }
    }

    ?>

</li>
<br>
<li>Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «С».<br><br>
    <?php

    $rossia = array (
        "Московская область" => array (
            'Москва',
            'Зеленоград',
            'Клин',
            'Дмитров'
        ),
        "Ленинградская область" => array (
            'Санкт-Петербург',
            'Всеволожск',
            'Павловск',
            'Кронштадт'
        ),
        "Рязанская область" => array (
            'Рязань',
            'Шилово',
            'Рыбное',
            'Сапожок'
        ),
    );



    foreach ($rossia as $oblast => $city){
        foreach ($city as $key => $value){
            if (mb_substr($value, 0, 2) == "С")
                echo $value . "<br/>";
        }
    }
    ?>

</li>
<br>

<li>Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так:
    <br>for (…){ // здесь пусто}
    <br>
    <br>
    <?php
   for($i = 0; $i < 11; print $i, $i++)
?>
    </li>
<br>
<li>Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
    <br>
    <br>
    <?php
    function full_translit ($text) {

        $word = array(

            "а"=>"a",
            "б"=>"b",
            "в"=>"v",
            "г"=>"g",
            "д"=>"d",
            "е"=>"e",
            "ё"=>"e",
            "ж"=>"zh",
            "з"=>"z",
            "и"=>"i",
            "й"=>"i",
            "к"=>"k",
            "л"=>"l",
            "м"=>"m",
            "н"=>"n",
            "о"=>"o",
            "п"=>"p",
            "р"=>"r",
            "с"=>"s",
            "т"=>"t",
            "у"=>"u",
            "ф"=>"f",
            "х"=>"kh",
            "ц"=>"tc",
            "ч"=>"ch",
            "ш"=>"sh",
            "щ"=>"shch",
            "ы"=>"y",
            "э"=>"e",
            "ю"=>"iu",
            "я"=>"ia",
            "ь"=>"",
            " " => "_");

        return strtr($text, $word);
    }
    echo full_translit ("карлсон который живет на крыше");
    ?>
</li>
<br>
<li>В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.<br>
</li>
<?php
$menu = array ("Главная", "Услуги" => array ("Установка", "Настройка", "Сдача проекта"), "О компании" => array ("О нас", "История", "Клиенты"), "Контакты");



echo "<ul>";

foreach ($menu as $count => $itemname) {


    if (gettype($itemname) == "array" ) {

        echo "<li>".$count."<ul>";

        foreach ($itemname as $itemname2) {

            echo "<li>".$itemname2."</li>";

        }

        echo "</ul>";

    }

    else echo "<li>".$itemname."</li>";

}


?>


