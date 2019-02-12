<?php

namespace  A\B;


class test{

    public function getClassName(){
        $cName = get_called_class();

        return $cName;
    }
}


$o = new test();

$res = $o->getClassName();

echo $res; // A\B\test