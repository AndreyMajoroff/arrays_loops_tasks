<?php
/*14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте
есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!',
 иначе выведите 'Нет!'.
*/
$arr = array(4, 2, 5, 19, 13, 0, 10);
$err = array(2, 3, 4);
foreach ($arr as $a) {
    foreach ($err as $e) {
        if ($a == $e) {
            echo $a . ' - ' . $e . '  ---  Есть!' . '<br>';
        } else {
            echo $a . ' - ' . $e . ' ---  Нет...' . '<br>';
        }
    }
}

