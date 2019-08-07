<?php
/**
 * Desc: 功能描述
 * Created by PhpStorm.
 * User: jason-gao
 * Date: 2018/3/9 11:32
 * array_shift — 将数组开头的单元移出数组
 * mixed array_shift ( array &$array )
 * http://php.net/manual/zh/function.array-shift.php
 */

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

/**
 * Array
 * (
 * [0] => banana
 * [1] => apple
 * [2] => raspberry
 * )
 */


function readEnvConfig($config = [])
{
    $envConf = preg_grep('/^PHPREDMIN_/', array_keys($_ENV));
    if (!empty($envConf)) {
        foreach ($envConf as $conf) {
            $keys = explode('_', $conf);
            if (!empty($keys)) {
                array_shift($keys);
                setConfig($config, $keys, $_ENV[$conf]);
            }
        }
    }
}

function setConfig(&$config, $keys, $value)
{
    $key = array_shift($keys);
    $key = strtolower($key);
    if (isset($config[$key])) {
        if (is_array($config[$key])) {
            return setConfig($config[$key], $keys, $value);
        } else {
            $config[$key] = $value;
            return True;
        }
    }
    return False;
}