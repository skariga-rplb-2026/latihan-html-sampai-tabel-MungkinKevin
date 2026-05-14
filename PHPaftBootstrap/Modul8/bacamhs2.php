<?php
include('crudmhs.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <style>
        table {
            background-color: pink;
        }
        th {
            color: crimson;
        }
    </style>
</head>
<body>
    
    <h2>DAFTAR MAHASISWA</h2>

    <?php
        $sql = 'select * from mahasiswa';
        $data = bacaMhs($sql);
        if ($data === null) {
            echo "Tidak ada data mahasiswa";
        } else {
    ?>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>JURUSAN</th>
        </tr>
        <?php
        
        foreach ($data as $mhs) {
            $nim = $mhs['nim'];
            $nama = $mhs['nama'];
            $kelamin = $mhs['kelamin'];
            $jurusan = $mhs['jurusan'];
            echo "
            <tr>
                <td>$nim</td>
                <td>$nama</td>
                <td>$kelamin</td>
                <td>$jurusan</td>
            </tr>
            ";
        }
    }
        ?>
</body>
</html>