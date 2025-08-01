function character_hasing(str){
    const arr  = precalculate(str);
    console.table(arr);
}

function precalculate(str){
    const arr = [];
    const n = str.length;
    for(let i=0;i<n;i++){
        if(arr[str.charAt(i)] != null){
            arr[str.charAt(i)]  = arr[str.charAt(i)]+1;
        }else{
            arr[str.charAt(i)]  = 1;
        }
    }
    return arr;
}

character_hasing('abcdabefc');