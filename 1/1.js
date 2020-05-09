function hitungKata(kata) {
   let jumlah = 1;
   for(let i in kata){
    if(kata.charAt(i) === kata.charAt(i).toUpperCase()){
      jumlah++
    }
   }
   return `Output : ${jumlah}`;
}

console.log(hitungKata("mamaMakanPepayaWaktuBuka"));
