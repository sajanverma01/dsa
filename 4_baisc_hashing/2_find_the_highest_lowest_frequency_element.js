function count_frequencies(arr, find) {
  const calculated = precalculate(arr);
  let min = Number.MAX_VALUE;
  let max = Number.MIN_VALUE;
  let minKey = null;
  let maxKey = null;
  calculated.forEach((v,k)=>{
   if(v < min ){
    min = v;
    minKey = k;
   }
   if(v > max){
    max = v;
    maxKey = k;
   }
  });

  console.table(calculated);
  console.log('min:'+minKey+' '+' max:'+maxKey);
}
function precalculate(arr) {
  const data = [];
  const n = arr.length;
  for (let i = 0; i < n; i++) {
    if (data[arr[i]] != null) {
      data[arr[i]] = data[arr[i]] +1
    } else {
      data[arr[i]] = 1;
    }
  }
  return data;
}
var arr = [3, 4, 6, 3, 5, 6, 4, 4, 5, 3, 4];
var find = [3, 6, 99, 12];
count_frequencies(arr, find);
