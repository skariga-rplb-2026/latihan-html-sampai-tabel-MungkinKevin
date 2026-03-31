<?php
/** 
$awal = $_POST["awal"];
$akhir = $_POST["akhir"];
$henti = $_POST["henti"];
for ($i=$awal; $i<=$akhir ; $i++) { 
    echo "<br/> perulangan ke $i.";

    if ($i == $henti) {
        break;
    }
}
*/

$awal = $_POST["awal"];
$akhir = $_POST["akhir"];
$lanjut = $_POST["lanjut"];
for ($i=$awal; $i<$akhir ; $i++) { 
    
    if ($i == $lanjut) {
        continue;
    }

    echo "<br/> perulangan ke $i.";
}
?>

