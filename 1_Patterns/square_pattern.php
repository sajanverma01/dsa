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
    echo $str;
    echo PHP_EOL;
     $strLength = strlen($str);
    for($i=1;$i<$strLength-1;$i++){
        echo $str[$i];
        for($k=1;$k<=$strLength-2;$k++){
            echo " ";
        }
        echo $str[$strLength-$i-1];
        echo PHP_EOL;
    }

   for($l=0;$l<$strLength/2;$l++){
        $temp = $str[$l];
        $str[$l] = $str[$strLength-$l-1];
        $str[$strLength-$l-1] = $temp;
   }
   echo $str;

}   

pattern("Programming");