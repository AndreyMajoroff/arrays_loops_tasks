<?php
/*21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.

1
22
333
4444
55555
*/

for ($x = 1; $x <= 9; $x++){
    for ($s = 1; $s <= $x; $s++){
        echo $x;
    }
     echo "<br>";

}