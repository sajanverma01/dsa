function count_frequencies(arr, find) {
  const calculated = precalculate(arr);
  console.table(calculated);
  for (let i = 0; i < find.length; i++) {
    console.log(calculated.get(find[i]) ?? 0);
  }
}
function precalculate(arr) {
  const data = new Map();
  const n = arr.length;
  for (let i = 0; i < n; i++) {
    if (data.get(arr[i])) {
      data.set(arr[i], data.get(arr[i]) + 1);
    } else {
      data.set(arr[i], 1);
    }
  }
  return data;
}
var arr = [3, 4, 6, 3, 5, 6, 4, 4, 5, 3, 4];
var find = [3, 6, 99, 12];
count_frequencies(arr, find);
