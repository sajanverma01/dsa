
function isPrime(n) {
        if(n == 1){
            return false;
        }
        var count = 0;
        for(var i=1;i*i<=n;i++){
            if(n%i==0){
                count++;
                if(n%i != i){
                    count++;
                }
            }
        }
        if(count == 2){
            return true;
        }
        
        return false;
    }

console.log(isPrime(7));