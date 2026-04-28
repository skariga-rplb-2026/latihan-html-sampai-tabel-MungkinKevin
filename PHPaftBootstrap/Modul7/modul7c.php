<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registrasi Peserta Kursus</h2> 
 
    <table> 
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <tr> 
                <td>Nama:</td><td><input type="text" name="nama" size="30"></td> 
            </tr> 
            <tr> 
                <td>E-mail</td><td><input type="text" name="email" size="30"></td> 
            </tr> 
            <tr>
                <td>Nama Kursus</td> 
                <td> 
                    <input type="checkbox" name="kursus[]" value="Csharp" >C# (Rp.1.000.000)<br> 
                    <input type="checkbox" name="kursus[]" value="Javascript" >JavaScript (Rp.1.100.000)<br> 
                    <input type="checkbox" name="kursus[]" value="Brainfuck" />Brainfuck (Rp.5.000.000)<br> 
                    <input type="checkbox" name="kursus[]" value="PHP" />PHP (Rp.500.000)<br> 
                </td>
            </tr> 
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr> 
        </form> 
    </table>

    <fieldset>
        <legend>WELCOME</legend>
    <?php
        $kursus = $_POST['kursus'] ?? null;
        $nama = $_POST['nama'] ?? "";
        $email = $_POST['email'] ?? "";

        function biaya($x) {
            
            
            $daftarHarga = [
                "Csharp" => 1000000,
                "Javascript" => 1100000,
                "Brainfuck" => 5000000,
                "PHP" => 500000
            ];

            $total =0;
            if(is_array($x)) {
                foreach ($x as $kursusTerpilih) {
                    //menambah harga berdasarkan value checkbox
                    if (isset($daftarHarga[$kursusTerpilih])) {
                        $total += $daftarHarga[$kursusTerpilih];
                    }
                }
            }

            return number_format($total,2,",","."); //format angka. liat catetan
        }

        if (!empty($nama)) { //mengecek apakah ada yang kosong atau tidak
            if (!empty($email)) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //mengecek validasi struktur email. wajib ada @ dan .com
                    if (!empty($kursus)) {
                        echo "Terimakasih "; echo $nama;
                        echo "<br> Data anda telah diterima.";
                        echo "<br> Kursus yang anda pilih :";
                        echo "<ul>";
                        foreach ($kursus as $k) {
                            echo "<li>$k</li>";
                        }
                        echo "</ul>";
                        echo "Total biaya kursus: Rp."; echo biaya($kursus);
                    } else {
                        echo "Pilih minimal 1 kursus!";
                    }
                } else {
                    echo "Alamat email tidak valid!";
                }
            } else {
                echo "Email tidak boleh kosong!";
            }
        } else {
            echo " tidak boleh kosong!";
        }
    ?>
    </fieldset>
</body>
</html>