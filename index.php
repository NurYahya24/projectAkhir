<?php
session_start();
require 'koneksi.php';
$login=false;
if(isset($_SESSION['login'])){
    $login=true;
}

$sql = mysqli_query($conn, "SELECT COALESCE(ROUND(SUM(if(vote='y',1,0)) / COUNT(vote) * 100), 0) AS presentase FROM tb_webrate;");
$tb_webrate=[];
while($row = mysqli_fetch_assoc($sql)){
    $tb_webrate[]=$row;
}
$persen = $tb_webrate[0];









?>





<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="app.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Traveler</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="kontainer">
        <div class="navbar"><form action="index.php">
            <img src="image/logo.png" class="logo"></form>
            <nav>
                <ul id="menuList">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><?php if($login){ echo "<a href='logout.php'>Logout</a>";}else{ echo "<a href='login.php'>Login</a>";} ?></li>
                </ul>
            </nav>
            <img src="image/sideBar.png" class="menu-icon" onclick="togglemenu()">
        </div>
        <div class="row">
            <div class="col-1">
                <h3>Temukan Destinasi Wisata Idaman Di</h3>
                <h2>Go Traveler</h2>
                <p>Dapatkan beragam informasi destinasi wisata, buat kamu yang suka traveling</p><a href="login.php">
                <button type="button">Lihat Selengkapnya</button></a>
            </div>
            <div class="col-2">
                <img src="image/home.png" class="gambarHome">
                <div class="color-box"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <input type="hidden" id="presentase" value="<?php echo $persen['presentase']; ?>">
            <div class="circular-progress">
                <span class="progress-value"><?php echo $persen['presentase']; ?>%</span>
            </div>

            <span class="text"><?php echo $persen['presentase']; ?>% Orang menyukai website ini</span>
        </div>
    <footer>
        <div class="footer-content">
            <h3>Go Traveler</h3>
            <p>Website ini dibuat untuk memenuhi tugas projek akhir praktikum mata kuliah pemrograman web</p>
            <ul class="socials">
                <li><a href="" class="fa fa-instagram" ></a></li>
                <li><a href="" class="fa fa-whatsapp" ></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright&copy;2022</p>
        </div>
    </footer>

    
</body>
</html>