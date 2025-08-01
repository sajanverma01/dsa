function character_hasing(str){
    const arr  = precalculate(str);
    console.table(arr);
}

function precalculate(str){
    const arr = new Array(26);
    const n = str.length;
    for(let i=0;i<n;i++){
    if(arr[str.charCodeAt(i)-'a'.charCodeAt(0)] == null){
        arr[str.charCodeAt(i)-'a'.charCodeAt(0)] =1;
    }else{
        arr[str.charCodeAt(i)-'a'.charCodeAt(0)] = arr[str.charCodeAt(i)-'a'.charCodeAt(0)]+1;
    }
       
    }
    return arr;
}

character_hasing('abcdabefc');