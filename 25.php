<?php
/*Название метода: array_add()
Описание метода:
Функция array_add добавляет заданную пару ключ / значение в массив, если данный ключ еще не существует в массиве
Пример вызова:
$array = array_add(array('name' => 'Desk'), 'price', 100);
Результат вызова: array('name' => 'Desk', 'price' => 100)*/

function array_add(&$arr, $key, $value) {
    if (!array_key_exists($key, $arr)) {
        $arr[$key] = $value;
    } else {
        echo 'Ключ существует!';
    }
}
$arr = array('name' => 'Desk');
array_add($arr, 'price', 100);

print_r($arr);