<?php
/*
Programming
r         n
o         i
g         m
r         m
a         a
m         r
m         g
i         o
n         r
gnimmargorP
*/


function pattern($str){
    $n  = strlen(string: $str);
    echo $str;
    echo PHP_EOL;
    for($i=1;$i<=$n-2;$i++){
        echo $str[$i];
        $space = $n-2;
        while($space > 0){
            echo " ";
            $space--;
        }
        echo $str[$n-2-$i];
        echo PHP_EOL;
    }
    echo strrev($str);
}

pattern("Programming");