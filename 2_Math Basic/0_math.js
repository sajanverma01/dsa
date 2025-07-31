function extractDigits(n){
    while(n>0){
        var ans =  n%10;
        console.log(ans);
        n = parseInt(n/10);
    }
}
extractDigits(34534534)