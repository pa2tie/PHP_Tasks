<?php
/*Числа прописью.
Во многих серьезных документах принято писать денежные суммы цифрами и прописью,
вот так: «триста двадцать шесть (326) рублей», «две тысячи один (2001) рубль».
Написать функцию вывода числа прописью.
Пример: num2str(878867.15) - восемьсот семьдесят восемь тысяч восемьсот шестьдесят семь рублей 15 копеек.*/

function assign_words(array $rubles, $kopeek = '0') {
    $thousands = array("", "тысяч", "миллион", "миллиард", "триллион");
    $hundreds = array(1=> "сто", "двести", "триста", "четыреста", "пятьсот", "шестьсот", "семьсот", "восемьсот", "девятьсот");
    $tens = array(2=>"двадцать", "тридцать", "сорок", "пятьдесят", "шестьдесят", "семьдесят", "восемьдесят", "девяносто");
    $ones = array(1=>"один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять", "десять", "одиннадцать",
        "двенадцать", "тринадцать", "четырнадцать", "пятнадцать", "шестнадцать", "семнадцать", "восемнадцать", "девятнадцать");
    $minus = "минус";
    $res_str = "";


    if (strpos($rubles[0], '-') === 0) {
        $res_str .= $minus.' ';
        $rubles[0] = substr($rubles[0], 1);
        if ($rubles[0] === "")
            array_shift($rubles);
    }
    $three_num = count($rubles);
    $rubles[0] = str_pad($rubles[0], 3, "0", STR_PAD_LEFT);
    for ($i = 0; $i < $three_num; $i++) {
        if ($rubles[$i][0] != 0)
            $res_str .= $hundreds[$rubles[$i][0]]." ";
        $is_second_one = false;
        if ($rubles[$i][1] != 0 && $rubles[$i][1] != 1)
            $res_str .= $tens[$rubles[$i][1]]." ";
        elseif ($rubles[$i][1] == 1) {
            $res_str .= $ones[substr($rubles[$i], 1)] . " ";
            $is_second_one = true;
        }
        if (!$is_second_one && $rubles[$i][2] != 0)
            $res_str .= $ones[$rubles[$i][2]]." ";
        $thousand_level = ($three_num-$i-1) % 5;
        if ($rubles[$i] != '000') {
            $res_str .= $thousands[$thousand_level];
            switch ($thousand_level) {
                case 0:
                    $res_str .= " ";
                    break;
                case 1:
                    if ($rubles[$i][1] != '1') {
                        if ($rubles[$i][2] == '1')
                            $res_str = substr($res_str, 0, strlen($res_str) - 15) . "на тысяча";
                        if ($rubles[$i][2] > '1' && $rubles[$i][2] < '5') {
                            if ($rubles[$i][2] == '2')
                                $res_str = substr($res_str, 0, strlen($res_str) - 13) . "е тысяч";
                            $res_str .= "и";
                        }
                    }
                    $res_str .= " ";
                    break;
                case 2:
                case 3:
                case 4:
                    if ($rubles[$i][1] == '1' || $rubles[$i][2] < '1' || $rubles[$i][2] > '4')
                        $res_str .= "ов";
                    elseif ($rubles[$i][2] > '1' && $rubles[$i][2] < '5')
                        $res_str .= "а";
                    $res_str .= " ";
                    break;
                default:
                    break;
            }
        }
    }
    $res_str .= "рубл";
    if ($rubles[$three_num-1][1] == '1' || $rubles[$three_num-1][2] < '1' || $rubles[$three_num-1][2] > '4')
        $res_str .= "ей ";
    elseif ($rubles[$three_num-1][2] > '1' && $rubles[$three_num-1][2] < '5')
        $res_str .= "я ";
    else $res_str .= "ь ";
    $kopeek = str_pad($kopeek, 2, "0");
    if ($kopeek !== "00") {
        $res_str .= $kopeek . " копе";
        if ($kopeek [0] == '1' || $kopeek[1] < '1' || $kopeek[1] > '4')
            $res_str .= "ек";
        elseif ($kopeek[1] > '1' && $kopeek[1] < '5')
            $res_str .= "йки";
        else $res_str .= "йка";
    }

    return $res_str;
}
function  print_out_num($num = 872867.15) {
    $values = explode(".", $num);
    $levs = array();
    $values0_len = strlen($values[0]);
    $first_len =$values0_len % 3 == 0 ? 3 : $values0_len % 3;
    $levs[] = substr($values[0], 0, $first_len);
    for ($i = $first_len; $i < $values0_len; $i+=3) {
        $levs[] = substr($values[0], $i, 3);
    }
    if (count($values) === 1)
        return assign_words($levs);
    else return assign_words($levs, substr($values[1], 0, 2));
}
echo print_out_num(80001001.76);
