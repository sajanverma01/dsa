/*
Selection Sort
find the min value and swap with current position 
*/
function selection_sort(n){
    console.log(n);
    for(let i=0;i<n.length-i;i++){
        let minKey = findMin(n,i,n.length);
        if(n[i] > n[minKey]){
            let temp = n[i];
            n[i] = n[minKey];
            n[minKey] = temp;
            console.log(n);
        }
        
    }
    return n;
}
function findMin(n,l,r){
    let min = Number.MAX_VALUE;
    let minKey = null;
    for(let i=l;i<r;i++){
        if(min > n[i]){
            min = n[i];
            minKey = i;
        }
    }
    return minKey;
}   

console.log(selection_sort([5,4,3,2,1]));

/*
[ 5, 4, 3, 2, 1 ]
[ 1, 4, 3, 2, 5 ]
[ 1, 2, 3, 4, 5 ]
*/