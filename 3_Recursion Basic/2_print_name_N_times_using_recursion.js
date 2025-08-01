
/*
sajan
sajan
sajan
sajan
sajan
*/
// Print Name N Times

function print2(i,n){
    if(i > n){
        return;
    }
    console.log('sajan');
    print2(++i,n)
}
print2(1,5);