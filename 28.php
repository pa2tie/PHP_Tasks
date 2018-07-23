<?php
/*Название метода: array_dot()
Описание метода:
Функция array_dot делат многомерный массив одномерным, объединяя вложенные массивы с помощью точки в именах.
Пример вызова:
$array = array('foo' => array('bar' => 'baz'));
$array = array_dot($array);
Результат вызова:
array('foo.bar' => 'baz')*/

$array = array('foo' => array('bar' => 'baz'));
$array = array_dot($array);

function array_dot($arr) {
    $res = array();
    foreach ($arr as $k => $v) {
        if (is_array($v)) {
            $v = array_dot($v);
            foreach ($v as $key => $value) {
                $res[$k.".".$key] = $value;
            }
        }
        else $res[$k] = $v;
    }

    return $res;
}

print_r($array);


