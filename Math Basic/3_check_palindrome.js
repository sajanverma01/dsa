function check_palindrome(n){
    var input = n;
    var rev = 0 ;
    while(n > 0){
        var ans = n%10;
        rev = rev*10 + ans;
        n = parseInt(n/10);
    }
    if(input == rev){
        return true;
    }
    return false;
}

console.log(check_palindrome(1441));