<?php
/*25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
*/
$arr = [];
array_push($arr, rand(), rand(), rand(), rand(), rand(), rand(), rand());
echo 'Рандомный массив такой : '; print_r($arr);
echo '<br>' . 'min : ' . min($arr);
echo '<br>' . 'max : ' . max($arr);

$valmin = min($arr);
$valmax = max($arr);
$keymin = array_search(min($arr), $arr);
$keymax = array_search(max($arr), $arr);
$keymin2 = $keymin;
$keymax2 = $keymax;

echo '<br><br>' . ' Ключ min : ' . $keymin;
echo '<br>' . ' Ключ max : ' . $keymax;

foreach ($arr as $key => $val){

    if ($key == $keymin) {
        $keymin = $keymax;
        $keymax = $keymin2;
        break;
    }
    /*elseif ($key == $keymax) {
        $keymax = $keymin;
        $keymin = $keymax2;

    }*/
}

$arr[$keymin] = $valmin;
$arr[$keymax] = $valmax;

echo '<br><br>' . 'Новый ключ min: ' . $keymin . '<br>' . ' Новый ключ max: ' . $keymax .
     '<br>' . 'Измененный массив : ';

print_r($arr);


//мучительные поиски  перемены ключей в массиве

/*$keymin = $keymax;
$keymax = $keymin2;
*/

//$arr[$keymax] = $keymin;


/*
$arr = array('$keymax' => '$valmax');
$arr['$keymin'] = $arr['$keymax'];
unset($arr[$keymax]);
*/

//function change_key($keymax,$keymin,&$arr,$rewrite=true){}


//$minval//key($maxval)

