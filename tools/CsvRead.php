<?php


// update sql make
function read($file){
    ini_set('auto_detect_line_endings',TRUE);
    $csv = array_map('str_getcsv', file($file));
    array_walk($csv, function(&$a) use ($csv) {
        $a = array_combine($csv[0], $a);
    });
    array_shift($csv); # remove column header

    ini_set('auto_detect_line_endings',FALSE);
    return $csv;
}

$file = __DIR__.'/../data/a.csv';
$contents = read($file);


$sql = "";
foreach($contents as $c){
    $id = $c['id'];
    $cust_name = $c['cust_name'];
    $sql .= "update xx set cust_name='{$cust_name}' where id=$id;\n";
}
var_dump($sql);

$output = __DIR__.'/../data/b.csv';
file_put_contents($output, $sql);
