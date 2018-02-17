
<?php
/*8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'. Циклы while и for */

echo ' <t2>foreach:</t2><br>';
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $num){echo '-' . $num;
}

echo '-<br><br> <t2>while:</t2><br>';
$num = 1;
while ($num <= 9) {echo $num; $num++;
}

echo '<br><br> <t2>for:</t2><br>';
$num = 1;
while ($num <= 9) {echo $num; $num++;
}


