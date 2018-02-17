<?php
/*27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
$cols - кол-во столбцов в таблице. Есть список цветов, в массиве:
$colors = array('red','yellow','blue','gray','maroon','brown','green').
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все
ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное
число. */

$rows = 5;
$cols = 5;
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

echo "<table border = '2'>";

for ($r = 1; $r <= $rows; $r++){

    echo "<tr></tr>";

        for ($c = 1; $c <= $cols; $c++){

            $randcol = $colors[rand(0,6)];
            $randnum = rand();
            echo "<td style = background: bgcolor = '$randcol'>$randnum</td>";

}

}

echo "</style></table>";



//$randcol = array_rand($colors);
