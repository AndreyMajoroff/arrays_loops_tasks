<?php
/*20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.

x
xx
xxx
xxxx
xxxxx
*/
$s = 'x';
for ($x = 1; $x <= 20; $x++){
    echo $s . '<br>';
    $s =  $s .= 'x';
}