<?php 
$nama_barang = $_POST['nama_barang'];
$no_seri = $_POST['Nomor_Seri'];
$merk = $_POST['merk'];
$origin = $_POST['origin'];
#--------bagian tgl
$tgl = $_POST['angka_hari'];
$bulan = $_POST["bulan"];
$tahun = $_POST["tahun"];
$angka_tanggal = mktime(0,0,0,$bulan,$tgl,$tahun);
$tanggal_buat = date("l, j F Y", $angka_tanggal);

$harga = $_POST['harga'];
$format = number_format($harga,2,",",".");
$stok = $_POST['stok'];
$harga_final = $harga*$stok;
$format1 = number_format($harga_final,2,",",".");

$kode = array();
if (isset($nama_barang) and !empty($nama_barang)) {
    $kode[] = substr($nama_barang,0, 3);
}
if (isset($no_seri) and !empty($no_seri)) {
    $kode[] = str_pad($no_seri,6,"0", STR_PAD_LEFT);
}
if (isset($merk) and !empty($merk)) {
    $kode[] = substr($merk,0, 3);
}
if (isset($origin) and !empty($origin)) {
    $kode[] = substr($origin,0, 3);
}
$banyak_array = count($kode);
if ($banyak_array == 4) {
   $set_kode = implode("/",$kode);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widtd style="strong", initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <Table>
        <tr>
            <td style="strong">Kode</td style="strong">
            <td>:</td>
            <td><?php echo $set_kode?></td>
        </tr>
        <tr>
            <td style="strong">Nama Barang</td style="strong">
            <td>:</td>
            <td><?php echo $nama_barang?></td>
        </tr>
        <tr>
            <td style="strong">Nomor Seri</td style="strong">
            <td>:</td>
            <td><?php echo $no_seri?></td>
        </tr>
        <tr>
            <td style="strong">Merk</td style="strong">
            <td>:</td>
            <td><?php echo $merk?></td>
        </tr>
        <tr>
            <td style="strong">Negara Pembuat</td style="strong">
            <td>:</td>
            <td><?php echo $origin?></td>
        </tr>
        <tr>
            <td style="strong">Tanggal Pembuatan</td style="strong">
            <td>:</td>
            <td><?php echo $tanggal_buat?></td>
        </tr>
        <tr>
            <td style="strong">Harga</td style="strong">
            <td>:</td>
            <td>Rp.<?php echo $format?></td>
        </tr>
        <tr>
            <td style="strong">Stok</td style="strong">
            <td>:</td>
            <td><?php echo $stok?></td>
        </tr>
        <tr>
            <td style="strong">Total Harga</td style="strong">
            <td>:</td>
            <td>Rp.<?php echo $format1?></td>
        </tr>
    </Table>
</body>
</html>
<!--echo "kode : ";


$merk = $_POST['merk'];
$merk = $_POST['merk'];
$merk = $_POST['merk'];

echo "   : ";
echo "No Seri       : $no_seri <br>";
echo "Merk          : $merk <br>";
echo "Buatan Dari   : $origin <br>";
echo "Tanggal Buat  : $tanggal_buat <br>";
echo "Harga         : $harga <br>";
echo "Stok          : $stok <br>";
echo "Total Harga   : $harga <br>";

$prt1 = 
$prt2 = 
$prt3 = 
$prt4 = 
$kode = "$prt1/$prt2/$prt3/$prt4";