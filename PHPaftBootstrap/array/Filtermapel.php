<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            background-color: blue;
        }
        /* --- BAGIAN YANG DITAMBAHKAN: Style Warna Baris --- */
        .grade-a { background-color: blue; color: white; }
        .grade-b { background-color: yellow; color: black; }
        .grade-c { background-color: red; color: white; }
        /* ----------------------------------------------- */
    </style>
</head>
<body>
    <?php
    if (isset($_POST["mapel"])) {
        $filter = $_POST["mapel"];  
      } else {
          $filter = "semua";
      }

    $data = [
        ["Nama" => "Satria", "mapel" => "Matematika", "Nilai" => "91", "Grade" => "A"],
        ["Nama" => "Fulan", "mapel" => "Fisika", "Nilai" => "88", "Grade" => "B"],
        ["Nama" => "Sokhib", "mapel" => "Bahasa_Inggris", "Nilai" => "90", "Grade" => "A"],
        ["Nama" => "Bayu", "mapel" => "Fisika", "Nilai" => "75", "Grade" => "C"],
        ["Nama" => "Awu", "mapel" => "Matematika", "Nilai" => "85", "Grade" => "B"],
    ];
    
    ?>

    <form action="" method="POST">

    <select name="mapel" id="" onchange="this.form.submit()"> #untuk pilihan
        <option value="" >semua</option>
        <option value="Matematika" <?php echo ($filter == "Matematika")? "selected" : ""; ?>>Matematika</option>
        <option value="Fisika" <?php echo ($filter == "Fisika")? "selected" : ""; ?>>Fisika</option>
        <option value="Bahasa_Inggris" <?php echo ($filter == "Bahasa_Inggris")? "selected" : ""; ?>>Bahasa Inggris</option>
    </select>
    </form>

    <table border="1" width="700">

    <tr>
        <th>Nama</th>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
        <th>Grade</th>
    </tr>

    <?php 

        $dataTampil = [];
        if (isset($_POST["mapel"])) { #filter form pemilihan
            $filter = $_POST["mapel"];
            if ($filter == "") {
                $dataTampil = $data;
            } else {
                foreach($data as $d) {
                    if($d["mapel"] == $filter) {
                        $dataTampil[] = $d;
                    }
                }
            }
        } else  {
            $dataTampil[] = $data;
        }
        foreach($dataTampil as $d) { #menampilkan tiap2 isi array $data
            
            /* --- BAGIAN YANG DITAMBAHKAN: Logika Penentuan Class --- */
            $bg_color = "";
            if ($d["Grade"] == "A") {
                $bg_color = "grade-a";
            } elseif ($d["Grade"] == "B") {
                $bg_color = "grade-b";
            } elseif ($d["Grade"] == "C") {
                $bg_color = "grade-c";
            }
            /* ------------------------------------------------------- */
            // Tambahkan class $bg_color ke tag <tr>
            echo "<tr class='$bg_color'>";
            echo    "<td>".$d["Nama"]."</td>";
            echo    "<td>".$d["mapel"]."</td>";
            echo    "<td>".$d["Nilai"]."</td>";
            echo    "<td>".$d["Grade"]."</td>";
            echo "</tr>";
        }


        # swap per mapel # STATUS = done
        # variable mean : n, wadah nilai, total, mean;  # STATUS = d
        # ganti background rule : Grade C = red, Grade B = yellow, Grade A = blue; # STATUS = NotYet
    ?>

    <tr>
        <th colspan="4" align="left"> Rata - rata :
            <?php  #proses kalkulasi rata2
                $total = 0;
                $mean = 0;
                $n = 0;
                foreach($data as $d) {
                    $total+=$d["Nilai"];
                    $n++;
                }
                $mean = $total / $n;

                echo $mean;
            ?>
        </th>
    </tr>
    </table>
</body>
</html>