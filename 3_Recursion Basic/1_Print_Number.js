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


/*
sajan
sajan
sajan
sajan
sajan
*/
// Print Name N Times

function print2(i,n){
    if(i > n){
        return;
    }
    console.log('sajan');
    print2(++i,n)
}
//print2(1,5);


/*
Sum of number 5+4+2+1
*/

function print3(n){
    if(n == 0){
        return 0;
    }
   
    return n + print3(n-1)
}
console.log(print3(5));




