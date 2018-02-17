<?php
/*13. вывести таблицу умножения*/
$row = 10;
$col = 10;

echo '<table border="1">';

for ($tr = 1; $tr <= $row; $tr++) {

    echo '<tr>';

        for ($td = 1; $td <= $col; $td++){

            echo '<td>' . $tr * $td . '</td>';
        }
    echo '</tr>';
}
echo '</table>';