<?php
/*
* * * * * 
* * * * * 
* * * * * 
* * * * * 
* * * * * 
*/
function print1($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo "* ";
        }
        echo PHP_EOL;
    }
}
//print1(5);



/*
* 
* * 
* * * 
* * * * 
* * * * * 
*/
function print2($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo "* ";
        }
        echo PHP_EOL;
    }
}
//print2(5);




/*
1 
1 2 
1 2 3 
1 2 3 4 
1 2 3 4 5 
*/

function print3($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo PHP_EOL;
    }
}
//print3(5);



/*
1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5 
*/
function print5($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i . " ";
        }
        echo PHP_EOL;
    }
}
//print5(5);


/*

* * * * * 
* * * * 
* * * 
* * 
* 

*/


function print6($n)
{
    for ($i = $n; $i > 0; $i--) {
        for ($j = $i; $j > 0; $j--) {
            echo "* ";
        }
        echo PHP_EOL;
    }
}
//print6(5);



/*
1 2 3 4 5 
1 2 3 4 
1 2 3 
1 2 
1 
*/

function print7($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n - $i + 1; $j++) {
            echo $j . ' ';
        }
        echo PHP_EOL;
    }
}
//print7(5);



/*
    *    
   ***   
  *****  
 ******* 
*********
*/

function print10($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($k = 1; $k <= $n - $i; $k++) {
            echo " ";
        }

        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        for ($k = 1; $k <= $n - $i; $k++) {
            echo " ";
        }
        echo PHP_EOL;
    }
}
// print10(5);




/*
*********
 ******* 
  *****  
   ***   
    *    
*/


function print11($n)
{
    for ($i = 1; $i <= $n; $i++) {
        // adding space
        for ($k = 1; $k < $i; $k++) {
            echo  " ";
        }

        for ($k = 1; $k <= ($n - $i) * 2 + 1; $k++) {
            echo  "*";
        }

        // adding space
        for ($k = 1; $k < $i; $k++) {
            echo  " ";
        }
        echo PHP_EOL;
    }
}
//print11(5);





/*
    *    
   ***   
  *****  
 ******* 
*********
*********
 ******* 
  *****  
   ***   
    *   
*/


function print12($n)
{
    print10($n);
    print11($n);
}
// print12(5);


/*
*
**
***
****
*****
****
***
**
*

*/

function print13($n)
{

    for ($i = 1; $i <= $n * 2; $i++) {
        $start = $i;
        if ($i > $n) {
            $start = 2 * $n - $i;
        }
        for ($k = 1; $k <= $start; $k++) {
            echo "*";
        }
        echo PHP_EOL;
    }
}
//print13(5);


/*
1 
0 1 
1 0 1 
0 1 0 1 
1 0 1 0 1 
*/



function print14($n)
{

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 1) {
            $start = 1;
        } else {
            $start = 0;
        }
        for ($k = 1; $k <= $i; $k++) {
            echo $start . ' ';
            $start = 1 - $start;
        }
        echo PHP_EOL;
    }
}
//print14(5);





/*
1      1
12    21
123  321
12344321
*/
function print15($n)
{

    for ($i = 1; $i <= $n; $i++) {
        for ($k = 1; $k <= $i; $k++) {
            echo $k;
        }
        for ($k = 1; $k <= ($n - $i) * 2; $k++) {
            echo ' ';
        }

        for ($k = 1; $k <= $i; $k++) {
            echo $i - $k + 1;
        }
        echo PHP_EOL;
    }
}
//print15(4);



/*
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
*/


function print16($n)
{
    $num = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($k = 1; $k <= $i; $k++) {
            echo $num . ' ';
            $num++;
        }

        echo PHP_EOL;
    }
}
//print16(5);


/*
A 
A B 
A B C 
A B C D 
A B C D E 

*/


function print17($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($k = ord('A'); $k < ord('A') + $i; $k++) {
            echo  chr($k) . ' ';
        }

        echo PHP_EOL;
    }
}
//print17(5);



/*
A B C D E 
A B C D 
A B C 
A B 
A 

*/
function print18($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($k = ord('A'); $k < ord('A') + $n - $i + 1; $k++) {
            echo  chr($k) . ' ';
        }

        echo PHP_EOL;
    }
}
//print18(5);




/*
A 
A B 
A B C 
A B C D 
A B C D E 

*/


function print19($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($k = ord('A'); $k < ord('A') + $i; $k++) {
            echo  chr(ord('A') + $i - 1) . ' ';
        }

        echo PHP_EOL;
    }
}
//print19(5);





/*
    A
   ABC
  ABCDC
 ABCDEDC
ABCDEFEDC

*/


function print20($n)
{
    for ($i = 1; $i <= $n; $i++) {

        for ($k = 1; $k <= $n - $i; $k++) {
            echo " ";
        }
        $start = ord('A');
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo chr($start);
            if (((2 * $i - 1) / 2 + 1) > $k) {
                $start++;
            } else {
                $start--;
            }
        }

        echo PHP_EOL;
    }
}
//print20(5);


/*
E 
E D 
E D C 
E D C B 
E D C B A 
*/


function print21($n)
{
    for ($i = 1; $i <= $n; $i++) {
        $start  = ord(character: "A") + $n - 1;
        for ($k = 1; $k <= $i; $k++) {
            echo chr($start) . ' ';
            $start--;
        }

        echo PHP_EOL;
    }
}
//print21(5);





/*
**********
****  ****
***    ***
**      **
*        *
*        *
**      **
***    ***
****  ****
**********
*/


function print22($n)
{
    $l = 0;
    for ($i = 1; $i <= $n; $i++) {
        for ($k = 1; $k <= $n - $i + 1; $k++) {
            echo "*";
        }
        for ($k = 1; $k <= $l; $k++) {
            echo " ";
        }
        for ($k = 1; $k <= $n - $i + 1; $k++) {
            echo "*";
        }
        $l += 2;
        echo PHP_EOL;
    }

    $l -= 2;
    for ($i = 1; $i <= $n; $i++) {
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        for ($k = 1; $k <= $l; $k++) {
            echo " ";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        $l -= 2;
        echo PHP_EOL;
    }
}

// 5 0 5
// 4 2 4
// 3 4 3
// 2 6 2
// 1 8 1

// 1 8 1
// 2 6 2 
// 3 4 3
// 4 2 4 
// 5 0 5
//print22(5);






/*

*        *
**      **
***    ***
****  ****
**********
****  ****
***    ***
**      **
*        *

*/

function print23($n)
{
    $l = $n * 2 - 2;
    for ($i = 1; $i <= $n; $i++) {
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }

        for ($k = 1; $k <= $l; $k++) {
            echo " ";
        }

        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }


        $l -= 2;
        echo PHP_EOL;
    }

    $l = 2;
    $n--;
    for ($i = 1; $i <= $n; $i++) {

        for ($j = 1; $j <= $n - $i + 1; $j++) {
            echo "*";
        }
        for ($j = 1; $j <= $l; $j++) {
            echo " ";
        }
        for ($j = 1; $j <= $n - $i + 1; $j++) {
            echo "*";
        }
        echo PHP_EOL;
        $l += 2;
    }
}



// 1 8 1
// 2 6 2
// 3 4 3
// 4 2 4
// 5 0 5

// 4 2 4
// 3 4 3
// 2 6 2
//print23(5);



/*

****
*  *
*  *
****

*/


function print24($n)
{

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($j == 1 || $n == $j || $i == 1 || $i == $n) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }
}


//print24(4);



/*

4444444
4333334
4322234
4321234
4322234
4333334
4444444
*/


function print25($n)
{

    for ($i = 1; $i <= 2*$n-1; $i++) {
        for($j = 1; $j <= 2*$n-1; $j++){
                $top = $i;
                $left = $j;
                $right = (2*$n)-$j;
                $bottom = (2*$n)-$i;

                echo $n - min(min($top,$bottom),min($left,$right))+1;

        }
        echo PHP_EOL;
    }
}





print25(n: 4);
