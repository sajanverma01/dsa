function reverse_arr(arr,l,r){

    if(l >  r ){
        return arr;
    }
    
    arr = swap(arr, l, r);
    return reverse_arr(arr,l+1,r-1);
}

function swap(arr, l, r){
    var temp = arr[l];
    arr[l] =  arr[r];
    arr[r] = temp;
    return arr;
}

var arr = [1,2,3,4,5,6,7,8,9];

console.table(reverse_arr(arr,0,arr.length-1));