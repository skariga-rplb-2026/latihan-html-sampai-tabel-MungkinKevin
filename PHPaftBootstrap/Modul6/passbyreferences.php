<?php
function nilai_pertama(& $x) {
    $x += 200;
}
function nilai_kedua(& $x) {
    $x += 200;
}

$nilai_awal = 100;
echo $nilai_awal;
nilai_pertama($nilai_awal);
echo "Nilai Akhir Function Pertama : $nilai_awal<br/>";
echo $nilai_awal;
nilai_kedua($nilai_awal);
echo "Nilai Akhir Function kedua : $nilai_awal";
echo $nilai_awal;
?>