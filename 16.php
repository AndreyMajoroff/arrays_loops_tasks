<?php
/*16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран
столбец элементов массива, как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9
*/
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($arr as $it){
    if ($it < 10){echo $it . '<br>';}
}