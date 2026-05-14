<?php
require_once'koneksiAkad.php';

    //membaca (select) table mahasiswa
    //jika berhasil, hasil array dari baris baris data
    //dan setiap baris data berupa array dari nama nama field
    //jika tdk ada, hasil berupa nilai null

    Function bacaMhs($sql) {
        $data = array();
        $koneksi = koneksiAkademik();
        $hasil = mysqli_query($koneksi,$sql);

        //jika tidak adarecord, hasil berupa null
        if (mysqli_num_rows($hasil) == 0) {
            mysqli_close($koneksi);
            return null;
        }

        $i = 0;

        while ($baris = mysqli_fetch_assoc($hasil)) {
            $data[$i]['nim'] = $baris['nim'];
            $data[$i]['nama'] = $baris['nama'];
            $data[$i]['kelamin'] = $baris['kelamin'];
            $data[$i]['jurusan'] = $baris['jurusan'];
            $i++;
        }
        mysqli_close($koneksi);
        return $data;
    }
?>