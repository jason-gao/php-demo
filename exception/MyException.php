<?php
/**
 * Desc: 功能描述
 * Created by PhpStorm.
 * User: jason-gao
 * Date: 2019/2/13 17:53
 *
 * 抛异常没机会执行__destruct
 *
 */

class  MyException{

    public function __construct()
    {
        echo 111;
    }

    public function test(){
        throw new Exception("test exception");
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.

        echo 222;
    }
}


$me = new MyException();

$me->test();