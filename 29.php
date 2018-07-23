<?php
/*Название метода: array_except()
Описание метода:
Функция array_except удаляет указанную пару ключ/значение из массива.
Пример вызова:
$array = array('name' => 'Desk', 'price' => 100);
$array = array_except($array, array('ключи', 'для', 'удаления', 'name'));
Результат вызова:
array('price' => 100)*/

$array = array('name' => 'Desk', 'price' => 100);
$array = array_except($array, array('ключи', 'для', 'удаления', 'name'));

function array_except($arr, $keys_del) {
    $keys_del = array_flip($keys_del);
    print_r($keys_del);
    return array_diff_key($arr, $keys_del);
}

print_r($array);