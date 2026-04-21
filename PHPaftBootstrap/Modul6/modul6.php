<?php 
function judul() {
    echo "<h2 align=''>Praktikum Pemrograman Web</h2>";
}
function garis(){
    echo "======================================= <br/>";
}

judul();
garis();

function siswa($nis,$nama,$kelas) {
    echo "NIM : $nis <br/>";
    echo "NAMA : $nama <br/>";
    echo "Kelas : $kelas <br/>";
}

siswa("#1", " Awu", " 10A");
garis();
siswa("#1", " Awu", " 10A");
garis();
siswa("#1", " Awu", " 10A");
garis();
siswa("#1", " Awu", " 10A");
garis();
siswa("#1", " Awu", " 10A");
garis();
?>