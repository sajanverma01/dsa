
<?php

// *
//  **
//   ***
//    ****
//     *****
//      ******
//       *******
//        ********
//         *********
//          **********
//           ***********
//            ************
//             *************
//              **************
//               ***************
//              **************
//             *************
//            ************
//           ***********
//          **********
//         *********
//        ********
//       *******
//      ******
//     *****
//    ****
//   ***
//  **
// * 

function patternArrow($rows){
    patternTop($rows);
    $rows--;
    patternButtom($rows);
}

function patternTop($rows){
    for($i=0;$i<$rows;$i++){
        for($k=0;$k<$i;$k++){
            echo " ";
        }
        for($k=0;$k<$i+1;$k++){
            echo "*";
        }
        echo PHP_EOL;
    }   
}

function patternButtom($rows){
   for($i=$rows;$i>0;$i--){
    for($k=$i-1;$k>0;$k--){
        echo " ";
    }
    for($k=$i;$k>0;$k--){
        echo "*";
    }
    echo PHP_EOL;
   }
}


patternArrow(15);

