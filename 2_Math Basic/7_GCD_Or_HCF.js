function gcd_or_hcf(n1,n2){

}

function find_gcd(n1,n2){
    var ans = 0;
    for(var i=Math.min(n1,n2);i>=1;i--){
        if(n1%i ==0 && n2%i==0){
            ans = i;
            break;
        }
    }
    return ans;
}   

console.log(find_gcd(9,12));

//gcd_or_hcf(9,12);