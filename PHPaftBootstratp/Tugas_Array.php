<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    $data = [
        ["Nama" => "SK", "Kursus" => "Assembly", "Bayar" => "10,000"],
        ["Nama" => "F", "Kursus" => "Rust", "Bayar" => "10,000"],
        ["Nama" => "RR", "Kursus" => "Brainfuck", "Bayar" => "10,000"],
        ["Nama" => "ASEP", "Kursus" => "Python", "Bayar" => "10,000"],
        ["Nama" => "Gilang", "Kursus" => "C++", "Bayar" => "10,000"]
    ];
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>Kursus</th>
            <th>Bayar</th>
        </tr>
        <?php
       foreach($data as $d) {
        echo "<tr>"
        echo    "<td>".$d["Nama"]."</td>"
        echo    "<td>".$d["Kursus"]."</td>"
        echo    "<td>".$d["Bayar"]."</td>"
        echo "</tr>"
       }
        ?>
        
    </table>
</body>
</html>