<?php
/*28. Вывести таблицу умножения с помощью двух циклов for.*/

$row = 9;
$col = 9;

echo '<table border="1">';

for ($tr = 1; $tr <= $row; $tr++) {

    echo '<tr>';

    for ($td = 1; $td <= $col; $td++){

        echo '<td>' . $tr * $td . '</td>';
    }
    echo '</tr>';
}
echo '</table>';