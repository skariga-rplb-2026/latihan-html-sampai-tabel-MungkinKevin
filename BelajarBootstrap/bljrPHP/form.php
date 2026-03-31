<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" action="proses.php" method="GET">
        <!--Jump to > Proses-->
        <!-- method POST : tdk menampilkan data di url/adress bar-->
        <!-- method GET : menampilkan data di url/adress bar-->
        Nilai : <input type="text" name="angka" /> 
        <br/>
        Jurusan :
        <select name="jurusan">
            <option value=" "> PILIH </option>
            <option value="TI"> TEKNIK INFORMATIKA </option>
            <option value="SI"> SISTEM INFORMASI </option>
            <option value="MI"> MANAJEMEN INFORMATIKA </option>
            <option value="TK"> TEKNIK KOMPUTER </option>
            <option value="KA"> KOMPUTER AKUNTANSI </option>
        </select>
        <br>
        
        <input type="submit" value="SUBMIT" />
    </form>
</body>
</html>