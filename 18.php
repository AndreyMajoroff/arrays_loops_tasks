<?php
/*18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
*/
$arr = array(
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
);
foreach ($arr as $key => $it){
    if ($key >4 and $key<7){
        echo '<b>' .  $it . '</b><br>';
    }
    else {echo $it . '<br>';
    }
}
