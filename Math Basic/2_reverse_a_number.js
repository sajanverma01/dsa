function reverse_a_number(n){
    var rev = 0;
    while(n > 0){
        var ans = n%10;
        rev = rev * 10 + ans;
        n = parseInt(n/10);
    }
    return rev;
}

console.log(reverse_a_number(123456789));