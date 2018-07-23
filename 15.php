<?php
/*Отсортировать двумерный массив пришедший из БД.
На входе
array(
    array('price'=>10,'count'=>2),
    array('price'=>5,'count'=>5),
    array('price'=>8,'count'=>5),
    array('price'=>12,'count'=>4),
    array('price'=>8,'count'=>4),
).
На выходе отсортированный массив по 'price' DESC и во вторую очередь по 'count' DESC.
    array(
        array('price'=>5,'count'=>5),
        array('price'=>8,'count'=>4),
        array('price'=>8,'count'=>5),
        array('price'=>10,'count'=>2),
        array('price'=>12,'count'=>4),
    ).*/

$arr = array(
    array('price'=>10,'count'=>2),
    array('price'=>5,'count'=>5),
    array('price'=>8,'count'=>5),
    array('price'=>12,'count'=>4),
    array('price'=>8,'count'=>4),
);

function compare($one, $two) {
    if ($one['price'] == $two['price']) {
        if ($one['count'] == $two['count']) return 0;
        return ($one['count'] < $two['count']) ? -1 : 1;
    }
    return ($one['price'] < $two['price']) ? -1 : 1;
}

usort($arr, 'compare');
print_r($arr);
