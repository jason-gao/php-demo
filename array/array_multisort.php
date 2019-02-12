<?php

$list = [
    ['a' => 1, 'b' => 2],
    ['a' => 8, 'b' => 9],
    ['a' => 2, 'b' => 3],
    ['a' => 5, 'b' => 6],
];

//二维数组按某个字段排序
array_multisort(array_column($list, 'b'), SORT_ASC, $list);


$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);

//二维同时按多个字段排序
array_multisort(array_column($data, 'volume'), SORT_DESC, array_column($data, 'edition'), SORT_DESC, $data);

