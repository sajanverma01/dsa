function armstrong_numbers(n) {
  var sum = 0;
  var input = n;
  var count = n.toString().length;

  while (n > 0) {
    var ans = n % 10;
    sum = sum + Math.pow(ans, count);
    n = parseInt(n / 10);
  }
  if (sum == input) {
    return true;
  }
  return false;
}
console.log(armstrong_numbers(371));
