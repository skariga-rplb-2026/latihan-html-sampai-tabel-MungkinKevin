<?php
include('crudmhs.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5 ms-5 card shadow"><h2 class="text-danger">DAFTAR MAHASISWA</h2>

        Pilih jurusan: <br>
        <form action="#" method="post">
            <div class="form-check form-check-inline">
                <input type="radio" name="jurusan" class="form-check-input" value="TI" id="ti">
                <label for="ti" class="form-check-label">TI</label>
                <!-- Funct for -> untuk merujuk kpd id dari suatu input. efek lain; user hanya perulu meng-klik pada tulisan dan button akan ikut terpilih-->
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="jurusan" class="form-check-input" value="SI" id="si">
                <label for="si" class="form-check-label">SI</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="jurusan" class="form-check-input" value="MI" id="mi">
                <label for="mi" class="form-check-label">MI</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="jurusan" class="form-check-input" value="TK" id="tk">
                <label for="tk" class="form-check-label">TK</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="jurusan" class="form-check-input" value="KA" id="ka">
                <label for="ka" class="form-check-label">KA</label>
            </div>
        </form>
        

        <?php
            //$sql = 'select * from mahasiswa'; <--diindah ke funct bacaSemuaMhs
            $data = bacaSemuaMhs();  //<-- jwban no-1
            if ($data == null) {
                echo "Tidak ada data mahasiswa";
            } else {
        ?>
        <div class="container">
        <table class="table table-bordered table-striped table-hover">
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

        </div>
    </div>
    </table>
        
</body>
</html>