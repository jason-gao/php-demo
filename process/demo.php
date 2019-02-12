<?php
/**
 * @node_name 权限节点名称
 * @link https://my.oschina.net/starlight36/blog/344986
 * http://php.net/manual/zh/function.pcntl-fork.php
 * http://php.net/manual/zh/function.pcntl-wait.php
 * https://juejin.im/entry/5a20cd3251882578da0daa2c
 * http://www.laruence.com/2009/06/11/930.html
 * https://www.cnblogs.com/coolworld/p/6606593.html
 * @desc
 */

function main() {
    for ($i = 0; $i < 1000; $i++) {
        echo $i.'-';
    }
    echo PHP_EOL;
}

for ($i = 0; $i < 3; $i++) {
    $pid = pcntl_fork();
    var_dump("i:".$i);
    var_dump("pid:".$pid);

    if($pid == -1) {
        //错误处理：创建子进程失败时返回-1.
        die('can not fork.');
    }else if ($pid) {
        var_dump("父进程逻辑");
        //父进程会得到子进程号，所以这里是父进程执行的逻辑
        pcntl_wait($status); //等待子进程中断，防止子进程成为僵尸进程。
    } elseif (!$pid) {
        //子进程得到的$pid为0, 所以这里是子进程执行的逻辑
        var_dump("子进程逻辑");
        main();
        echo 'quit'.$i.PHP_EOL;
        break;
    }
}


//=====================understand======================
echo "posix_getpid()=".posix_getpid().", posix_getppid()=".posix_getppid()."\n";

$pid = pcntl_fork();
if ($pid == -1) die("could not fork");
if ($pid) {
    echo "pid=".$pid.", posix_getpid()=".posix_getpid().", posix_getppid()=".posix_getppid()."\n";
} else {
    echo "pid=".$pid.", posix_getpid()=".posix_getpid().", posix_getppid()=".posix_getppid()."\n";
}

