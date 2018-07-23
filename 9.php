<?php
/*Нужно сгенерировать случайным образом пароль заданной длинны и из указанных символов.
Входные параметры: $symbols - строка с символами, $lenght - длинна пароля
Пример:
на входе: $symbols = 'abcdsrRGHK12345', $lenght = 5
на выходе строка: 'bR41s'*/

$symbols = 'abcdsrRGHK12345';
$lenght = 5;

function password_gen($symbols, $length) {
    $arr_symb = str_split($symbols);
    $result = '';
    for($i = 0; $i < $length; $i++) {
        $result.=$arr_symb[rand(0, count($arr_symb) - 1)];
    }
    return $result;
}

echo password_gen($symbols, $lenght);