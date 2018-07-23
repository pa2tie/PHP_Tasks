<?php
/*Нужно: обрезать строку и добавить в конец '...', если та больше заданной длинны.
На входе два параметра:$string - строка, $lenght - длинна.
Пример:
$string = 'John Doe', $lenght = 4.
То, на выходе должно быть 'John...'.*/

$string = 'John Doe';
$length = 4;

function substr_custom($string, $length) {
    $str = substr($string, 0,$length);
    if (strlen($string) > $length) {
        $str .= "...";
    }

    return $str;
}

echo substr_custom($string, $length);