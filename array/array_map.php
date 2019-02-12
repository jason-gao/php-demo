<?php
/**
 * Desc:
 * Created by PhpStorm.
 * User: jason-gao
 * Date: 2018/3/9 11:44
 */

//使用场景1
$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$toArr = [
    [1,4,7],
    [2,5,8],
    [3,6,9]
];


//function format(){
//    return func_get_args();
//}
array_unshift($arr, "format");
//print_r(call_user_func_array('array_map', $arr));

print_r(array_map(null, ...$arr));
//使用场景2
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);