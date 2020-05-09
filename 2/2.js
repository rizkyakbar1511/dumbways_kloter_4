function balikArray(n) {
  var arrayBaru = [];
  for (var i = n.length - 1; i >= 0; i--) {
    arrayBaru.push(n[i]);
  }
  return arrayBaru;
}

console.log(balikArray([19,22,3,28,26,17,18,4,28,0]));
