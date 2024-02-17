<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    <ul>
        <li><a href="index.php">Tampilan Awal</a></li>
        <li><a href="album.php">Gallery</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Keluar</a></li>
    </ul>
</body>
</html>