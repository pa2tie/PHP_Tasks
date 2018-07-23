<?php
/*Название метода: array_pluck()
Описание метода:
Функция array_pluck извлекает значения из многоуровневого массива, соответствующие переданному ключу.
Пример вызова:
$array = array(array('name' => 'Taylor'), array('name' => 'Dayle'), array('a' => 'b'));
$array = array_pluck($array, 'name');
Результат вызова:
array('Taylor', 'Dayle');*/

$array = array(array('name' => 'Taylor'), array('name' => 'Dayle'), array('a' => 'b'));
$array = array_pluck($array, 'name');

function array_pluck($arr, $key_check) {
    $res = array();
    foreach ($arr as $k => $v) {
        if (is_array($v)) {
            $res = array_merge($res, array_pluck($v, $key_check));
        } elseif ($k == $key_check) {
            $res[] = $v;
        }
    }

    return $res;
}

print_r($array);