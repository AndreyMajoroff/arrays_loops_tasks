<?php
/*19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
*/
$day = 'Воскресенье';
$arr = array(
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
);
foreach ($arr as $it){
    if ($it == $day){
        echo '<em>' .  $it . '</em><br>';
    }
    else {echo $it . '<br>';
    }
}
