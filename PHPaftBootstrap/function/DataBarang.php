<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA BARANG</title>
</head>
<body>
    <form action="Barang.php" method="post">
        <H1>Data Barang</H1>
        <hr align="left" style="height: 1px; width:50%;">
        <p> Nama Barang <br>
        <input type="text" name="nama_barang" id=""> </p>
        <p>Jenis <br>
        <select name="jenis" class="dropdown">
            <option value="PC">PC Komputer</option>
            <option value="LP">Laptop</option>
            <option value="PR">Peripheral</option>
            <option value="SP">Smart Phone</option>
            <option value="IP">I-Pad</option>
        </select></p>
        <p>Nomor Seri <br>
        <input type="text" name="Nomor_Seri" id=""></p>
        <p>Merk <br>
        <input type="text" name="merk" id=""></p>
        <p>Negara Pembuat <br>
            <input type="text" name="origin" id=""></p>
            <fieldset style="width: 20%;">
                <legend>Tanggal Pembuatan</legend>
                Tgl 
                <select name="angka_hari" id="">
                <?php 
                for ($hari=1; $hari <=31 ; $hari++) { 
                    $htgl = str_pad($hari,2,"0",STR_PAD_LEFT);
                    echo "<option value='$htgl'>$htgl</option>";
                    }
                ?></select>
                Bulan 
                <select name="bulan" id="">
                <?php
                    for ($bulan=1; $bulan <= 12; $bulan++) { 
                    $bln = str_pad($bulan,2,"0",STR_PAD_LEFT);
                    echo "<option value='$bln'>$bln</option>";
                    }
                ?></select>
                Tahun 
                <select name="tahun" id="">
                    <?php 
                    $tahun_skrg = date("Y");
                    $tahun_awal = $tahun_skrg-40;
                    for ($tahun=$tahun_skrg; $tahun >= $tahun_awal; $tahun--) { 
                        echo "<option value='$tahun'>$tahun</option>";
                    }
                    ?>
                </select>
            </fieldset>
        <p>Harga Barang <br>
        Rp. <input type="number" name="harga" id=""></p>
        <p>Jumlah Stok <br>
        <input type="number" name="stok" id=""></p>
        <hr align="left" style="height: 1px; width:50%;">
        <button type="submit">SUBMIT</button> <button type="reset">RESET</button>
    </form>
</body>
</html>