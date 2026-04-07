<?php
    $nominal = isset($_POST['nominal']) ? $_POST['nominal'] : 0;
    $format = number_format($nominal,2,",","."); #format number_format
    echo "Format Nominal : Rp. $format";
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
    <form action="#" method="POST">
        Nominal Rp. <input type="text" name="nominal" /> <br/>
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html>