<?php
/*Название метода: array_collapse()
Описание метода:
Функция array_collapse сворачивает заданный массив массивов в один массив.
Пример вызова:
$array = array_collapse(array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)));
Результат вызова: array(1, 2, 3, 4, 5, 6, 7, 8, 9)*/

$array = array_collapse(array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)));

function array_collapse($arr) {
    $res = array();
    for ($i = 0; $i < count($arr); $i++) {
        if (is_array($arr[$i])) {
            $arr[$i] = array_collapse($arr[$i]);
            $res = array_merge($res, $arr[$i]);
        }
        else $res[] = $arr[$i];
    }
    return $res;

}

print_r($array);