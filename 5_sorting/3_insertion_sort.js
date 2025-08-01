/*
takes an element & place it in its current order
*/
function insertion_sort(arr){
     console.log(arr);
    for(let i=0;i<arr.length;i++){
        let start = 0;
        let end = i+1;
        while(start < end){
            if(arr[start] > arr[end]){
                let temp = arr[start];
                arr[start] = arr[end];
                arr[end] = temp;
                
            }
            start++;
        }
        console.log(arr);
    }
}

insertion_sort([5,4,3,2,1]);

/*
[ 5, 4, 3, 2, 1 ]
[ 4, 5, 3, 2, 1 ]
[ 3, 4, 5, 2, 1 ]
[ 2, 3, 4, 5, 1 ]
[ 1, 2, 3, 4, 5 ]
*/