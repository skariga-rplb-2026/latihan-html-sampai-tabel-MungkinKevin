console.log("HEllo world"); 
console.log("abi"*"brian")
let nama; //inisialisasi diluar biar bisa dipake di dalem fungsi2 lain
function masukanNama() {
    nama = prompt("Masukan nama anda: ");
    document.getElementById("timpa").innerHTML = "halo " + nama;
}
document.getElementById("pertanyaan").onclick = function(){
    let eat = confirm( nama + ", have you breakfast?");
                
    if (eat) {
    document.getElementById("timpa").innerHTML = "nice"
    } else {
    document.getElementById("timpa").innerHTML = "Yawes"
    }
}
let tema = false;
document.getElementById("tema").onclick = function(){
    if(tema) {
        document.body.style.backgroundColor = "black"
        document.body.style.color = "red"
        document.body.style.fontFamily = "helvetica"
        tema = false
    } else {
        document.body.style.backgroundColor = "white"
        document.body.style.color = "black"
        document.body.style.fontFamily = "helvetica"
        tema = true
    }
    
}