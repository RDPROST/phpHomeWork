<?php

//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести их разность;
//если $а и $b отрицательные, вывести их произведение;
//если $а и $b разных знаков, вывести их сумму;
//Ноль можно считать положительным числом.

$a = 5;
$b = 10;

if ($a >= 0 && $b >= 0){
    echo $a - $b;
} else if ($a < 0 && $b < 0){
    echo $a * $b;
} else {
    echo $a + $b;
}

//2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
switch ($a){
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
        echo 15;

}

//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

function sum($a,$b){
    return $a + $b;
}

function sub($a,$b){
    return $a - $b;
}

function mul($a,$b){
    return $a * $b;
}

function div($a,$b){
    return $a / $b;
}

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
// $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических
// операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case 'sum':
            return $arg1 + $arg2;
        case 'sub':
            return $arg1 - $arg2;
        case 'mul':
            return $arg1 * $arg2;
        case 'div':
            return $arg1 / $arg2;
    }
}

//5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
?>
<html>
<head>
</head>
<body>
<footer>
    <?= Date('Y')?>
</footer>
</body>
</html>
<?php
//6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
function power($val, $pow){
    if ($pow == 1){
        return ($val);
    }else {
        return ($val * power($val, $pow - 1));
    }
}


//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты

    function timeStr($num, $end){
        $num = $num % 100;
        if ($num>=11 && $num<=19) {
            $e=$end[2];
        }
        else {
            $i = $num % 10;
            switch ($i)
            {
                case (1): $e = $end[0]; break;
                case (2):
                case (3):
                case (4): $e = $end[1]; break;
                default: $e=$end[2];
            }
        }
        return "$num $e";
    }
$hours = date('H');
$minutes = date('i');
echo timeStr($hours,array('час', 'часа', 'часов')).' '.timeStr($minutes,array('минута', 'минуты', 'минут'));