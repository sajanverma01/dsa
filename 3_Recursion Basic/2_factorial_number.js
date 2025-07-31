
/*
Factorial of number 5*4*2*1
*/

function print4(n){
    if(n == 1){
        return 1;
    }
   
    return n * print4(n-1)
}
console.log(print4(5));
