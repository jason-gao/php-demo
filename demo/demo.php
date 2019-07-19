<?php

// idn_to_ascii php7 我们不一样～
$domain = "www.baidu.com";
$res1 = idn_to_ascii($domain, IDNA_DEFAULT, INTL_IDNA_VARIANT_UTS46, $idna_info);
//$res2 = idn_to_utf8($domain);
var_dump($res1);
var_dump($idna_info);
//var_dump($res2);

// strpos
$hostname = "@.baidu.com";
$hostname2 = "baidu@.com";
$hostname3 = "baidu.com";
$r1 = strpos($hostname, '@');
$r2 = strpos($hostname2, '@');
$r3 = strpos($hostname3, '@');
var_dump("r1", $r1);
var_dump("r2", $r2);
var_dump("r3", $r3);

//str
$str = "afbb中12";
var_dump("first s", $str[0]);
var_dump("last s", $str[strlen($str) - 1]);


// array_column
$list = [
    [
        'name' => 'aa',
    ],
    [
        'name' => 'bb',
    ]
];

$views = array_column($list, 'view');
var_dump("views:", $views);

// break 2 continue 2
$data = array(
    array(
        'seller_id' => '商家1',
        'product_id' => '001'
    ),
    array(
        'seller_id' => '商家1',
        'product_id' => '002'
    ),
    array(
        'seller_id' => '商家1',
        'product_id' => '003'
    ),
    array(
        'seller_id' => '商家2',
        'product_id' => '001'
    ),
    array(
        'seller_id' => '商家3',
        'product_id' => '001'
    ),
    array(
        'seller_id' => '商家3',
        'product_id' => '002'
    ),
    array(
        'seller_id' => '商家3',
        'product_id' => '003'
    ),
);
$result = array();
foreach ($data as $key => $value) {

    foreach ($value as $k => $val) {
        if ($val == '商家1') {
            continue 2;
//            continue;
        }

        var_dump($val);
        //die;// continue 2 执行最外层的下一层循环，所以下面不会有输出，此处输出“商家2”
    }
    var_dump($value);
    //die;
}


for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $m = $i * $i + $j * $j;
        echo $m, "<br/>";
        if ($m < 90 || $m > 190) {
            // break 2;
            break;
        }
    }
}

// ipv4
$value = '1.1.1.1';
$r = filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);

var_dump("r", $r);


// validator

$value = ".a-.-www-_a";

$invalid_chars = preg_replace('/[a-zA-Z0-9-_.*@\s]/', '', $value);
var_dump($invalid_chars);
if (!empty($invalid_chars)) {
    var_dump("invalid00");
} else {
    var_dump("valid00");
}

if (!preg_match("/^[a-zA-Z0-9\-\_\.\*\s]+$/", $value)) {
    var_dump("invalid01");
} else {
    var_dump("valid01");
}


if (preg_match("/^[\.-]/", $value)) {
    var_dump("invalid02");
} else {
    var_dump("valid02");
}

if (in_array($value[0], ['-', '.']) || in_array($value[strlen($value) - 1], ['-', '.'])) {
    var_dump("invalid03");
} else {
    var_dump("valid03");
}

// dns_get_record
//$result = dns_get_record("baidu.com");
//print_r($result);

$authns = [];
$result = dns_get_record("yundun.com", DNS_TXT, $authns);
print_r($result);
var_dump($authns);

// preg_replace
//$broker = "brokerv5a_##aa";
$broker = 'brokerv5_aa_#a$#a';
$res = preg_replace('/[_\W]+/', '_', strtolower($broker));
var_dump($res);

//rand
var_dump(rand());
var_dump(getrandmax());
var_dump(rand(0, getrandmax()));

//
$hexadecimal = 'A37334';
echo base_convert($hexadecimal, 16, 2);
var_dump(base_convert($hexadecimal, 16, 36));

// serialize

//$str = 'sso_user|s:9:"xx@qq.com";';
$str1 = 's:26:"sba73ocmaovhsoaat03ufoiu29";';
//$str2 = 'sub_user_id|s:3:"100";sub_user_name|s:10:"testmaster";member_id|s:5:"27541";';
$str3 = 'a:1:{s:13:"adminV3Verify";s:32:"7effe368dace6405ddee825c0707c434";}crystal@crystaldeMac';

//var_dump(unserialize($str));
var_dump(unserialize($str1));
//var_dump(unserialize($str2));
var_dump(unserialize($str3));


$a = ["sso_user" => "xx@qq.com"];
var_dump(serialize($a));

// php.ini
echo PHP_INT_MAX;


//
$data = 1;
$data = htmlspecialchars(trim($data), ENT_COMPAT, 'UTF-8');
var_dump($data);

//array_merge

$a1 = ["a" => 1, "b" => 2];
$a2 = ["a1" => 1, "b1" => 2];
$a3 = [$a1, $a2];
$a4 = ["a" => 1, "b" => 2, $a2];
$a5 = array_merge($a1,$a2);
var_dump("a3", $a3);
var_dump("a4", $a4);
var_dump("a5", $a5);

//
$arr = [1,2,'a', "b"=>1];
echo print_r($arr, 1);
echo var_export($arr, 1);