<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar MAhasiswa</title>

    <style>

        table {
            background-color : lime;
        }
        TH {
            color : blue;
        }
    </style>
</head>
<body>
    
    <h2>DAFTAR MAHASISWA</h2>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>JURUSAN</th>
        </tr>

        <?php
        $servername ="localhost";
        $username ="root";
        $password ="";
        $dbname ="akademik";


        //part untuk membuat koneksi
        $koneksi = mysqli_connect($servername,$username,$password,$dbname);

        //cek koneksi
        if (!$koneksi) {
            die("Koneksi Gagal: ".mysqli_connect_error());
        }

        $sql = "select * from mahasiswa";
        $hasil = mysqli_query($koneksi,$sql); //  $hasil = mysqli_query($koneksi,"select * from mahasiswa");

        if (mysqli_num_rows($hasil) > 0) {
            //Output data tiap baris

            while ($baris = mysqli_fetch_assoc($hasil)) {
                $nim = $baris['nim'];
                $nama = $baris['nama'];
                $kelamin = $baris['kelamin'];
                $jurusan = $baris['jurusan'];
                echo "
                <tr>
                    <td>$nim</td>
                    <td>$nama</td>
                    <td>$kelamin</td>
                    <td>$jurusan</td>
                </tr>
                ";
            }
        } else {
            echo "Tidak ada record";
        }

        ?>
    </table>
</body>
</html>