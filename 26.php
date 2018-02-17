<?php
/*26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
*/

$arr = [];
for ($i = 0; $i <= 7; $i++){
    $rand = rand(1, 100);
    array_push($arr, $rand);
}
echo 'Рандомный массив от 1 до 100 такой : '; print_r($arr);

$pro = 1;
foreach ($arr as $key => $val) {

    if (($key % 2) == 0 and $key > 0 and $val > 0) {
        $pro = $pro * $val;
    }
}
foreach ($arr as $key => $val) {
    if (($key % 2) == 1 and $val > 0){
        echo '<br>[' . $key . '] => ' . $val;
    }
}

echo '<br><br><br>' . ' Воспроизведение чисел с парными индексами не считая нулевого : ' . $pro;