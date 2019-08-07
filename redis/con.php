<?php


$redis = new Redis();

//$c = $redis->connect('172.16.100.39', 62340);
$c = $redis->connect('localhost', 6379);

if($c){
    echo "connect ok\n";
}else{
    echo "connect fail\n";
}


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

/**
 * array(51) {
["redis_version"]=>
string(5) "3.2.3"
["redis_git_sha1"]=>
int(0)
["redis_git_dirty"]=>
int(0)
["redis_build_id"]=>
string(15) "2393856bd5c27ba"
["redis_mode"]=>
string(8) "sentinel"
["os"]=>
string(34) "Linux 2.6.32-573.el6.x86_64 x86_64"
["arch_bits"]=>
int(64)
["multiplexing_api"]=>
string(5) "epoll"
["gcc_version"]=>
string(5) "4.4.7"
["process_id"]=>
int(15485)
["run_id"]=>
string(40) "ea1816736510c705bb0287f551fb826dac138ee3"
["tcp_port"]=>
int(62341)
["uptime_in_seconds"]=>
int(72752394)
["uptime_in_days"]=>
int(842)
["hz"]=>
int(10)
["lru_clock"]=>
int(1514019)
["executable"]=>
string(20) "/root/redis-sentinel"
["config_file"]=>
string(28) "/root/sentinel/sentinel.conf"
["connected_clients"]=>
int(1)
["client_longest_output_list"]=>
int(0)
["client_biggest_input_buf"]=>
int(0)
["blocked_clients"]=>
int(0)
["used_cpu_sys"]=>
float(83698.76)
["used_cpu_user"]=>
float(49708.41)
["used_cpu_sys_children"]=>
float(0)
["used_cpu_user_children"]=>
float(0)
["total_connections_received"]=>
int(1907435)
["total_commands_processed"]=>
int(1875253)
["instantaneous_ops_per_sec"]=>
int(0)
["total_net_input_bytes"]=>
int(85767759)
["total_net_output_bytes"]=>
int(47767597)
["instantaneous_input_kbps"]=>
float(0)
["instantaneous_output_kbps"]=>
float(0)
["rejected_connections"]=>
int(0)
["sync_full"]=>
int(0)
["sync_partial_ok"]=>
int(0)
["sync_partial_err"]=>
int(0)
["expired_keys"]=>
int(0)
["evicted_keys"]=>
int(0)
["keyspace_hits"]=>
int(0)
["keyspace_misses"]=>
int(0)
["pubsub_channels"]=>
int(0)
["pubsub_patterns"]=>
int(0)
["latest_fork_usec"]=>
int(0)
["migrate_cached_sockets"]=>
int(0)
["sentinel_masters"]=>
int(1)
["sentinel_tilt"]=>
int(0)
["sentinel_running_scripts"]=>
int(0)
["sentinel_scripts_queue_length"]=>
int(0)
["sentinel_simulate_failure_flags"]=>
int(0)
["master0"]=>
string(76) "name=yundunmaster,status=ok,address=172.16.100.39:62340,slaves=0,sentinels=1"
}

 */

$slowLog = $redis->slowLog('get');
$slowLog = json_encode($slowLog);

var_dump("slow log", $slowLog);

$s = $redis->set("test", time());
if($s){
    echo "set ok\n";
}else{
    echo "set fail\n";
}

$test = $redis->get("test");

var_dump("get test", $test);