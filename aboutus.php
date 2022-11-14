<?php
session_start();
$login = false;
if(isset($_SESSION['login'])){
	$login = true;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us Section</title>
	<script type="text/javascript" src="app.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="aboutus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>	
<body>
	<div class="kontainer">
        <div class="navbar"><a href="index.php">
            <img src="image/logo.png" class="logo"></a>
            <nav>
                <ul id="menuList">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><?php if($login){ echo "<a href='logout.php'>Logout</a>";}else{ echo "<a href='login.php'>Login</a>";} ?></li>
                </ul>
            </nav>
            <img src="image/sideBar.png" class="menu-icon" onclick="togglemenu()">
        </div>
    </div>
	<div class="section">
		<div class="container">
			<div class="image-section">
				<img src="image/person.png">
			</div>
			<div class="content-section">
				<div class="title">
					<h1>Nur Yahya</h1>
				</div>
				<div class="content">
					<h3>Biodata</h3>
					<p>Nama : Nur Yahya</p>
					<p>Nim  : 2109106073</p>
					<p>Asal : Tenggarong </p>
                    <div class="social">
                        <a href="https://facebook.com/aangjay.aangjay"><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
				    </div>
				</div>
			</div>
			
		</div>
	</div>
    <div class="section">
		<div class="container">
			<div class="section-image">
				<img src="image/person.png">
			</div>
			<div class="section-content">
				<div class="title">
					<h1>Deby Ayu Syakhira</h1>
				</div>
				<div class="content">
					<h3>Biodata</h3>
					<p>Nama : Deby Ayu Syakhira</p>
					<p>Nim : 2109106060</p>
					<p>Asal : PPU</p>
					<div class="social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
				    </div>
				</div>
			</div>
            
		</div>
	</div>
    <div class="section">
		<div class="container">
			<div class="image-section">
				<img src="image/person.png">
			</div>
			<div class="content-section">
				<div class="title">
					<h1>Puput Widyastuti</h1>
				</div>
				<div class="content">
					<h3>Biodata</h3>
					<p>Nama : Puput Widyastuti</p>
					<p>Nim : 2109106074</p>
					<p>Asal : Berau </p>
					<div class="social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
				    </div>
				</div>
			</div>
			
		</div>
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