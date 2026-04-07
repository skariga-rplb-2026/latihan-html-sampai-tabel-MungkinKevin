
 <?php 
    
    $data = [
        ["Nama" => "Satria", "kursus" => "Assembly", "Bayar" => "10,000"],
        ["Nama" => "Fulan", "kursus" => "Rust", "Bayar" => "10,000"],
        ["Nama" => "Sokhib", "kursus" => "Assembly", "Bayar" => "10,000"],
        ["Nama" => "ASEP", "kursus" => "Python", "Bayar" => "10,000"],
        ["Nama" => "Gilang", "kursus" => "Python", "Bayar" => "10,000"],
    ];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   

    Pilih Kursus:
    
    
    <form action="" method="GET">
        
    <?php
    if (isset($_GET["kursus"])) {
        $filter = $_GET["kursus"];  
      } else {
          $filter = "semua";
      }
    ?>
        <select name="kursus" onchange="this.form.submit()">
            <option value="">semua</option>
            <option value="Assembly" <?php echo ($filter == "Assembly")? "selected" : ""; ?> >Assembly</option>
            <option value="Python" <?php echo ($filter == "Python")? "selected" : ""; ?> >Python</option>
            <option value="Rust" <?php echo ($filter == "Rust")? "selected" : ""; ?> >Rust</option>
            
        </select>

        
    </form>
    <table border="1" width="500">
        <tr>
            <th>Nama</th>
            <th>Kursus</th>
            <th>Bayar</th>
        </tr>

        <?php

        $dataTampil = [];
        if (isset($_GET['kursus'])) {
            $filter = $_GET['kursus'];
            if ($filter == "") {
                $dataTampil = $data;
            } else {
                foreach($data as $d) {
                    if($d["kursus"] == $filter) {
                        $dataTampil[] = $d;
                    }
                }
            }
        } else {
            $dataTampil =$data;
        }

       foreach($dataTampil as $d) {
        echo "<tr>";
        echo    "<td>".$d["Nama"]."</td>";
        echo    "<td>".$d["kursus"]."</td>";
        echo    "<td>".$d["Bayar"]."</td>";
        echo "</tr>";
       }
        ?>
        
    </table>
</body>
</html>


<!--

       

    
-->