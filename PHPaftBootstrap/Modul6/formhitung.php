<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">FORM HITUNG</h2>
    <form action="hitung.php" method="post">
        Angka-1 : <input type="text" name="bil1" id=""> <br>
        Angka-2 : <input type="text" name="bil2" id=""> <br>
        <select name="hitung" id="" class="dropdown">
            <option value="JUMLAH">JUMLAH</option>
            <option value="KURANG">KURANG</option>
            <option value="KALI">KALI</option>
            <option value="BAGI">BAGI</option>
            <option value="SISA_BAGI">SISA BAGI</option>
        </select>
        <br> <input type="submit" value="SUBMIT">
    </form>
</body>
</html>
<!--
    <input type="submit" name="hitung" value="JUMLAH"> <br>
        <input type="submit" name="hitung" value="KURANG"> <br>
        <input type="submit" name="hitung" value="KALI"> <br>
        <input type="submit" name="hitung" value="BAGI"> <br>
        <input type="submit" name="hitung" value="SISA_BAGI"> <br>