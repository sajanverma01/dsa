/*
Sum of number 5+4+2+1
*/

function print3(n) {
  if (n == 0) {
    return 0;
  }

  return n + print3(n - 1);
}
console.log(print3(5));
