<?php
/*Название метода: array_divide()
Описание метода:
Функция array_divide возвращает два массива, один из которых содержит ключи, а другой, содержащий значения данного массива.
Пример вызова:
$array = array('foo' => 'bar', 'foo1' => 'bar1', 'foo2' => 'bar2');
list($keys, $values) = array_divide($array);
Результат вызова:
array('foo', 'foo1', 'foo2') // $keys
array('bar', 'bar1', 'bar2') // $values*/

$array = array('foo' => 'bar', 'foo1' => 'bar1', 'foo2' => 'bar2');
list($keys, $values) = array_divide($array);

function array_divide($arr) {
    $arr_values = array_values($arr);
    $arr_keys = array_keys($arr);
    $res = array();

    array_push($res, $arr_values);
    array_push($res, $arr_keys);

    return $res;
}

print_r($keys);
print_r($values);