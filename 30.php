<?php
/*Название метода: array_flatten()
Описание метода:
Функция array_flatten делает многомерный массив плоским.
Пример вызова:
$array = array('name' => 'Joe', 'languages' => array('PHP', 'Ruby'));
$array = array_flatten($array);
Результат вызова:
array('Joe', 'PHP', 'Ruby');*/

$array = array('name' => 'Joe', 'languages' => array('PHP', 'Ruby'));
$array = array_flatten($array);

function array_flatten($arr) {
    $arr = array_values($arr);
    $res = array();
    for ($i = 0; $i < count($arr); $i++) {
        if (is_array($arr[$i])) {
            $arr[$i] = array_flatten($arr[$i]);
            $res = array_merge($res, $arr[$i]);
        }
        else $res[] = $arr[$i];
    }
    return $res;

}

print_r($array);