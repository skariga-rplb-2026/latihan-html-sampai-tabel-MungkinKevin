<?php
include('crudmhs.php');

//logika menentukan data apa yg akan ditampilkan
$data = null;
$judul_jurusan = "";

//mengecek apkh tombol ok dan radio sudah dipilih
if (isset($_POST['jurusan'])) {
    $pilihan = $_POST['jurusan'];
    $data = bacaMhsPerjurusan($pilihan);
    $judul_jurusan = "Jurusan : ". $pilihan;
}
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
    <div class="container mt-5 card shadow">
        <h2>DAFTAR MAHASISWA</h2>

        <p>Pilih Jurusan :</p>
        <form action="bacamhs3.php" method="post" class="mb-4">
            <?php
            $opsi = ["TI","SI","MI","TK","KA"];
            foreach ($opsi as $o) {
                echo "
                <div class='form-check form-check-inline'>
                    <input type='radio' name='jurusan' class='form-check-input' value='$o' id='$o'>
                    <label for='$o' class='form-check-label'>$o</label>
                </div>";
            }
            ?>
            <br>
            <button type="submit" class="btn btn-secondary btn-sm mt-2"> - OK - </button>
        </form>

        <h4 class="mb-3"><?php echo $judul_jurusan; ?></h4>

        <?php if ($data != null): ?>
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-light">
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>JENIS KELAMIN</th>
                        <th>JURUSAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $mhs): ?>
                        <tr>
                            <td><?php echo $mhs['nim']; ?></td>
                            <td><?php echo $mhs['nama']; ?></td>
                            <td><?php echo $mhs['kelamin']; ?></td>
                            <td><?php echo $mhs['jurusan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php elseif(isset($_POST['jurusan'])):?>
            <div class="alert alert-warning"> Tidak ada data untuk jurusan ini</div>
        <?php endif; ?>
    </div>
</body>
</html>