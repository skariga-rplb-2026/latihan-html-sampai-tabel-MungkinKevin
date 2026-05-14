<?php
    Function koneksiAkademik() {
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
        return $koneksi;
    }
?>