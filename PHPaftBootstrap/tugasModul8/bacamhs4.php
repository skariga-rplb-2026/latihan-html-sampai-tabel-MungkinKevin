<?php
include ('crudmhs.php');

$data = null;
$judul_jurusan = "Semua Jurusan";
$Dipilih = "ALL"; //pilihan default dan juga awal

//cek apakah adadata yg dikirim
if (isset($_POST['jurusan']) && $_POST['jurusan'] != "ALL") {
    $Dipilih = $_POST['jurusan'];
    $data = bacaMhsPerjurusan($Dipilih);
    $judul_jurusan = "Jursuan : " . $Dipilih;
} else {
    //Aktif ketika baru buka dan pilih "semua"
    $data = bacaSemuaMhs();
    $judul_jurusan = "Semua Jurusan";
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
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white py-3">
                <h2 class="mb-0 h4">DAFTAR MAHASISWA</h2>
            </div>
            <div class="card-body">
                <form action="bacamhs4.php" method="post" class="mb-4">
                    <div class=" row g-2 align-items-center">
                        <div class="col-auto">
                            <label for="jurusan" class="fw-bold"> Pilih Jurusan : </label>
                        </div>
                        <div class="col-md-3">
                            <select name="jurusan" id="jurusan" class="form-select form-select-sm">
                                <option value="ALL" <?php echo ($Dipilih == "ALL") ? "selected": ""; ?>>TAMPILKAN SEMUA</option>
                                <?php
                                $opsi = ["TI","SI","MI","TK","KA"];
                                foreach ($opsi as $o) {
                                    $selected = ($Dipilih === $o) ? "selected": "";
                                    echo "<option value ='$o' $selected>$o</option>";
                                }
                                ?>
                            </select>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-warning btn-sm fw-bold text-dark px-4">OK</button>
                            </div>
                        </div>
                    </div>
                </form>

                <hr>
                    <div class="px-3 pb-3">
                        <h5 class="mb-3 text-seconday italic"><?php echo $judul_jurusan; ?></h5>

                        <?php if($data != null):  ?>
                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="table-dark text-center">
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
                                                <td class="text-center"><?php echo $mhs['nim']; ?></td>
                                                <td><?php echo $mhs['nama']; ?></td>
                                                <td class="text-center"><?php echo $mhs['kelamin']; ?></td>
                                                <td class="text-center"><?php echo $mhs['jurusan']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                            <div class="alert alert-warning text-center">
                                Data tidak Ditemukan untuk kriteria ini.
                            </div>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>