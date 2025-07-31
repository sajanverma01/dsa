function count_of_digits(n){
    var count  = 0;
    while(n > 0){
        count++;
        n=  parseInt(n/10);
    }  
    return count; 
}

console.log(count_of_digits(34534534));