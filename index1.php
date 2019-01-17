<li>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
    <br>если $a и $b положительные, вывести их разность;
    <br>если $а и $b отрицательные, вывести их произведение;
    <br>если $а и $b разных знаков, вывести их сумму;
    <br>ноль можно считать положительным числом.
    <br>
    <?php

$a = 5;
$b = 3;

if($a >= 0 && $b >= 0)
    echo $a - $b;
elseif ($a < 0 && $b < 0)
    echo $a * $b;
elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0))
    echo $a + $b;

?>
</li>
<li>Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
    <br>
    <?php
$a = 0;
switch ($a)
{
    case 0:
        echo 0;
    case 1:
        echo 1;
    case 2:
        echo 2;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5;
    case 6:
        echo 6;
    case 7:
        echo 7;
    case 8:
        echo 8;
    case 9:
        echo 9;
    case 10:
        echo 10;
    case 11:
        echo 11;
    case 12:
        echo 12;
    case 13:
        echo 13;
    case 14:
        echo 14;
    case 15:
        echo ($a);
        break;

}
?>
</li>
<li>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
    <br>
    <?php
$n = rand( 0, 999);
echo "первый параметр это переменная n = ", $n, "<br>";
$l = rand( 0, 999);
echo "второй параметр это переменная l = ", $l, "<br>";
function pribav($n, $l)
{
    return $n+$l;
}
echo pribav($n, $l), " <br>" ;

function minus($n, $l)
{
    return $n-$l;
}
echo minus($n, $l), "<br>"  ;

function umnoj($n, $l)
{
    return $n*$l;
}
echo umnoj($n, $l), "<br>"  ;

function deli($n, $l)
{
    return $n/$l;
}
echo deli($n, $l), "<br>"  ;

?>
</li>
<li>функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
<br>
    <?php
echo "Первый аргумент: ", $arg1 = rand( -99, 99), "
";
echo "Второй аргумент: ", $arg2 = rand( -99, 99), "
";
echo "Выбранная операция ", $operation = "/", "
";
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation){

        case "+":
            return $arg1+$arg2;
            break;

        case "-":
            return $arg1-$arg2;
            break;

        case "*":
            return $arg1*$arg2;
            break;

        case "/":
            return $arg1/$arg2;
            break;
    }

}
echo $arg1, $operation, $arg2, " = ", mathOperation($arg1, $arg2, $operation) ;

?>
</li>
<li>
    <?php echo date("d.m.Yг"); ?>
</li>
<li>С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
    function power($val, $pow), где $val – заданное число, $pow – степень.<br>
    <?php

        function power($val, $pow) {
        if ($pow == 0) {
            return 1;
        } elseif ($pow < 0) {
            return power(1/$val, -$pow);
        } else {
            return $val * power($val, $pow-1);
        }
    };

    echo power(2, 3);

    ?>
</li>