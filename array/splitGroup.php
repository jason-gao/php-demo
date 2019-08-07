<?php

//记录顺序分组

$res = [];
$arr = [0,1,2,3,4,5,6,7,8,9,10,11];
foreach ($arr as $i){
    $res[$i] = floor($i/5);
}

echo $res;