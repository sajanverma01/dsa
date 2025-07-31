
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


*/


function diamondPattern($rows){
    diamondPatternTop($rows);
    diamondPatternButtom($rows-1);
}
function diamondPatternTop($rows){
    for($i=1;$i<=$rows;$i++){
        for($k=$i;$k<=$rows-1;$k++){
            echo " ";
        }
        for($k=1;$k<=$i*2-1;$k++){
            if($k==1 || $k == $i*2-1){
                echo "*";
            }else{
                echo " ";
            }
            
        }
        echo PHP_EOL;
    }
}
function diamondPatternButtom($rows){
    for($i=$rows;$i>=0;$i--){

        for($k=$rows-$i+1;$k>=1;$k--){
            echo " ";
        }

        for($k=1;$k<=$i*2-1;$k++){
            if($k==1 || $k == $i*2-1){
                echo "*";
            }else{
                echo " ";
            }
            
        }
        echo PHP_EOL;
    }
}
diamondPattern(10);
