<?php
/*23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
 Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.

По желанию можете сделать проверку на корректность введения данных пользователем.
*/
$chi = '123';
$res = 0;
for ($s = 0; $s <= strlen($chi); $s++){
    $res += $chi[$s];
}
echo 'Сумма  ' . $chi . ' = ' . $res;

//Выдает Notice но работает другие варианты были более не понятные, этот хоть понял как работает