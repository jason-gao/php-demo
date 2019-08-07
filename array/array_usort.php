<?php
/**
 * 浮点数排序
 */
date_default_timezone_set('Asia/Shanghai');

$arr = [2.2, 2.1, 3.33,1.123];

usort($arr, function($a, $b){
    return bccomp($a, $b, 2);
});

var_dump($arr);
