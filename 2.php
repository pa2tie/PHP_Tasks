<?php

/* Вор пробрался в магазин и вскоре понял, что все товары унести не сможет. Нужно: положить в рюкзак такие товары,
чтобы в итоге суммарная стоимость товаров в рюкзаке была максимальной. На входе массив товаров и максимально допустимая
вместимость рюкзака в кг.
Пример:
На входе $array:
array(
      array('weight' => 6, 'price' => 30),
      array('weight' => 3, 'price' => 14),
      array('weight' => 4, 'price' => 12),
      array('weight' => 2, 'price' => 9),
);
И $max = 5
То, на выходе массив с общей стоимостью товаров в рюкзаке = 23 и сами товары:
array(
       'items'=> array(...),
       'total'=> 23
)

*/
function  bag_norep(array $array, $max) {
    $newArray = array('items' => array(), 'total' => 0);
    $maxByVolObj = array();
    $chooseList = array();
    $itemsChosen = array_fill(0, count($array), false);
    for ($i = 0; $i<= count($array); $i++) {
        $maxByVolObj[$i] = array();
        $maxByVolObj[$i][0] = 0;
        $chooseList[$i] = array_fill(0, $max+1, array());
    }
    $maxByVolObj[0] = array_pad($maxByVolObj[0], $max, 0);

    for ($i = 1; $i <= count($array); $i++) {
        for ($j = 1; $j <= $max; $j++) {
            $prevC = $j >= $array[$i-1]['weight'] ? $maxByVolObj[$i-1][$j- $array[$i-1]['weight']] + $array[$i-1]['price'] : 0;
            if ($prevC > $maxByVolObj[$i-1][$j]) {
                $maxByVolObj[$i][$j] = $prevC;
                $chooseList[$i][$j] = $chooseList[$i-1][$j- $array[$i-1]['weight']];
                array_push($chooseList[$i][$j], $array[$i-1]);

            }
            else {
                $maxByVolObj[$i][$j] = $maxByVolObj[$i-1][$j];
                $chooseList[$i][$j] = $chooseList[$i-1][$j];

            }
        }
    }
    $newArray['items'] = $chooseList[count($array)][$max];
    $newArray['total'] = $maxByVolObj[count($array)][$max];
    return $newArray;
}
$array = array(
    array('weight' => 5, 'price' => 3),
    array('weight' => 7, 'price' => 2),
    array('weight' => 4, 'price' => 10),
    array('weight' => 2, 'price' => 1),
);

print_r(bag_norep($array, 5));