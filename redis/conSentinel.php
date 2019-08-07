<?php

$redis = new Redis();

$c = $redis->connect('172.16.100.39', 62341);

if($c){
    echo "connect sentinel ok\n";
}else{
    echo "connect sentinel fail\n";
}


$err = $redis->getLastError();
var_dump("err", $err);


$master = $redis->rawcommand('SENTINEL', 'get-master-addr-by-name', "yundunmaster");

var_dump("master", $master);


$err = $redis->getLastError();
var_dump("err", $err);

$c = $redis->connect($master[0], $master[1]);

if($c){
    echo "connect  ok\n";
}else{
    echo "connect  fail\n";
}


$err = $redis->getLastError();
var_dump("err", $err);


$pass = "AYpONe5EUXnY";
$a = $redis->auth($pass);

if($a){
    echo "auth ok\n";
}else{
    echo "auth fail\n";
}


$err = $redis->getLastError();
var_dump("err", $err);


$info = $redis->info();
$info = json_encode($info);

var_dump("info", $info);

$err = $redis->getLastError();
var_dump("err", $err);


$slowLog = $redis->slowLog('get');
$slowLog = json_encode($slowLog);

var_dump("slow log", $slowLog);

$err = $redis->getLastError();
var_dump("err", $err);

$s = $redis->set("test1", time());
if($s){
    echo "set test1 ok\n";
}else{
    echo "set test1 fail\n";
}

$err = $redis->getLastError();
var_dump("err", $err);

$test = $redis->get("test1");
var_dump("get test1", $test);

$err = $redis->getLastError();
var_dump("err", $err);