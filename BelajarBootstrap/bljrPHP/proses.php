File Proses <hr/>
<?php
    $jurusan = $_GET["jurusan"] ;

    switch ($jurusan) {
        case "TI":
            echo "Jurusan: Teknik Informatika <br>"; 
            break;
        case "SI":
            echo "Jurusan: Sistem Informasi <br>"; 
            break;
        case "MI":
            echo "Jurusan: Manajemen Informatika <br>"; 
            break;
        case "TK":
            echo "Jurusan: Teknik Komputer <br>"; 
            break;
        case "KA":
            echo "Jurusan: Komputerisasi Akuntansi <br>"; 
            break;
        default:
            echo "Jurusan tidak ada <br>"; 
    }

    $nilai = $_GET["angka"];
    echo "Nilai Anda = " . $nilai . "<br/>";

    if ($nilai > 100) {
        echo "KELAS KING";
    } elseif ($nilai > 70) {
        echo "Lulus. Kong-rats";
    } elseif ($nilai >= 40) {
        echo "Coba lagi";
    } else {
        echo "Gagal, Kong-Rats";
    }
?>