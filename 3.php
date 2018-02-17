<?php
/*3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
*/
$array = array (26, 17, 136, 12, 79, 15);
$resault = 0;
foreach ($array as $item){
    $resault = $item * $item + $resault;
}
echo $resault;
