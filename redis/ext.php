<?php

$b = extension_loaded("redis");

if (!$b){
    echo "redis extension not installed\n";
}else{
    echo "redis extension has installed\n";
}