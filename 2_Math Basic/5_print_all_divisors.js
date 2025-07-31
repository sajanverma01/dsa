function print_all_divisors(n) {
  var ans = [];
  for (var i = 1; i * i <= n; i++) {
    if (n%i == 0) {
      ans.push(i);
      if (n/i != i) {
       ans.push(n / i);
      }
    }
  }
  return ans.sort((a,b)=>a-b);
}

console.log(print_all_divisors(36));
