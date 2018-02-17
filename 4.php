<?php
/*4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей,
 с помощью второго — столбец элементов.*/

$arr = array ('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $val) {
    echo $key . '<br>';
}
echo '<br><br>';
foreach ($arr as $key => $val) {
    echo $val . '<br>';
}