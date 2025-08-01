/*
1
2
3
4
5
6
7
8
9
10
*/

// Print 1 to N

function print1(i,n){
    if(i > n){
        return;
    }
    console.log(i);
    print1(++i,n)
}
//print1(1,10);





