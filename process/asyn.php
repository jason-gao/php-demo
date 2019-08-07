<?php


function main() {
//    while(1){
        for ($i = 0; $i < 3; $i++) {
            echo $i.'-';
        }
        echo PHP_EOL;
//        sleep(3);
//    }
}

for ($i = 1; $i <= 5; ++$i) {
    $pid = pcntl_fork(); // 创建子进程

    if (!$pid) {
        sleep(1);
        print "In child $i\n";
        main();
        exit($i);
    }
}

// pcntl_waitpid 第一个参数为 0 代表处理全部子进程

while (pcntl_waitpid(0, $status) != -1) {
    $status = pcntl_wexitstatus($status);
    echo "Child $status completed\n";

//    $pid = pcntl_fork(); // 创建子进程
//
//    if (!$pid) {
//        sleep(1);
//        print "In child-- $i\n";
//        main();
//        exit($i);
//    }
}