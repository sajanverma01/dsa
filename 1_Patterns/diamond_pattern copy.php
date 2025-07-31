

<?php
//               * 
//              * * 
//             *   * 
//            *     * 
//           *       * 
//          *         * 
//         *           * 
//        *             * 
//       *               * 
//      *                 * 
//     *                   * 
//    *                     * 
//   *                       * 
//  *                         * 
// *                           * 
//  *                         * 
//   *                       * 
//    *                     * 
//     *                   * 
//      *                 * 
//       *               * 
//        *             * 
//         *           * 
//          *         * 
//           *       * 
//            *     * 
//             *   * 
//              * * 
//               * 

/*

i 

1 1
2 3
3 5
4 7
5 9
6 11
7 13


14 1 14
13 2 13
12 3
  *
 ***
*****

2 1
1 3
0 5
*/

function pattern1($n){
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$n-$i;$j++){
            echo " ";
        }
        for($j=1;$j<=2*$i-1;$j++){
            if($j == 1 || 2*$i-1 == $j){
                echo "*";
            }else{
                echo " ";   
            }
            
        }
        echo PHP_EOL;
    }
}

function pattern2($n){
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            echo " ";
        }


        for($j=(($n-$i)*2)+1;$j>=1;$j--){
            if($j== 1 || $j == (($n-$i)*2)+1){
                echo "*"; 
            }else{
                echo " ";
            }
        }
        echo PHP_EOL;
    }
}

function pattern($n){
    pattern1($n);
    pattern2($n-1);
}

pattern( 10);