<?php
/*17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 Текущий месяц должен храниться в переменной $month.
*/
$month = 'Февраль';
$arr = array(
    'Январь',
    'Февраль',
    'Март',
    'Апрель',
    'Май',
    'Июнь',
    'Июль',
    'Сентябрь',
    'Октябрь',
    'Ноябрь',
    'Декабрь'
);
foreach ($arr as $it){
    if ($it == $month){
        echo '<b>' .  $it . '</b><br>';
    }
    else {echo $it . '<br>';
    }
}
