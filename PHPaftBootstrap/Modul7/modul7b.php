<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Form Login</p> 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!-- action php utk mengirim ke diri sendiri  NOTE ada 2 cara. cara yg kedua action ditulis nama file itu sendiri-->
    <table> 
        <tr> 
            <td>User name:</td><td><input type="text" name="username" size="30"></td> 
        </tr> 
        <tr> 
            <td>Password</td><td><input type="password" name="password" size="30"/></td> 
        </tr> 
        <tr>
            <td>&nbsp;</td><td><input type="submit" value="OK"></td>
        </tr> 
    </table> 

    <p>Form Login</p> 
    <?php 
        if (array_key_exists('username', $_POST)) { 
    $username = trim($_POST['username']); 

    
    if(empty($username)) 
        echo "<span style='color:red'>Username belum diisi</span><br>"; 

    else echo "Hello "; echo $_POST['username']; echo "! <br>";
        } 

    if (array_key_exists('password', $_POST)) { 
   $password = trim($_POST['password']); 

 
   if(empty($password)) 
     echo "<span style='color:red'>PW belum diisi</span><br>"; }
    ?> 
    
    
</body>
</html>