<?php 
session_start();
require '../../koneksi.php';


if(isset($_POST['kirim'])){
	$judul = $_POST['judul'];
	$paragraf1 = $_POST['paragraf1'];
	$paragraf2 = $_POST['paragraf2'];
	$foto_c = $_FILES['cover']['name'];
	$foto_h = $_FILES['header']['name'];
	$foto_a = $_FILES['artikel']['name'];
	$x1 = explode('.',$foto_c);
	$x2 = explode('.',$foto_h);
	$x3 = explode('.',$foto_a);
	$extensi1 = strtolower(end($x1));
	$extensi2 = strtolower(end($x2));
	$extensi3 = strtolower(end($x3));
	$coverUP = "$judul.$extensi1";
	$headerUP = "$judul.$extensi2";
	$artikelUP = "$judul.$extensi3";
	$tmp1 = $_FILES['cover']['tmp_name'];
	$tmp2 = $_FILES['header']['tmp_name'];
	$tmp3 = $_FILES['artikel']['tmp_name'];

	move_uploaded_file($tmp1, '../../image/artikel/cover'.$coverUP);
	move_uploaded_file($tmp2, '../../image/artikel/header'.$headerUP);
	move_uploaded_file($tmp3, '../../image/artikel/artikel'.$artikelUP);

	$sql = "INSERT INTO tb_artikel VALUES ('', '$judul', '$paragraf1', '$paragraf2', 'header$headerUP', 'artikel$artikelUP', 'cover$coverUP')";
	$result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'create.php';
            </script>
        ";
    }

}




?>







<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../../app.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Go Traveler : Buat</title>
	<link rel="stylesheet" type="text/css" href="cupdate.css">
</head>
<body>
	<div class="kontainer">
		<div class="navbar">
            <img src="../../image/logo.png" class="logo">
            <nav>
                <ul id="menuList">
                    <li><a href="../../">Home</a></li>
                    <li><a href="../../aboutus.php">About Us</a></li>
                    <li><a href="../../logout.php">Logout</a></li>
                </ul>
            </nav>
            <img src="../../image/sideBar.png" class="menu-icon" onclick="togglemenu()">
        </div>
	</div>
	<div class="container">
		<div class="title">Create New Article</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="u-details">
				<div class="input-box">
					<span class="details">Judul</span>
					<input type="text" name="judul" placeholder="Masukkan Judul" required>
				</div>
				<div class="input-box-area">
					<span class="details">Paragraf 1</span>
					<textarea placeholder="Masukkan Paragraf Pertama" name="paragraf1"></textarea>
				</div>
				<div class="input-box-area">
					<span class="details">Paragraf 2</span>
					<textarea placeholder="Masukkan Paragraf Kedua" name="paragraf2"></textarea>
				</div>
				<div class="input-box-file">
					<span class="details">Foto Cover</span>
					<label for="foto-cover">
						<img src="../../image/upload.png">
					</label>
					<input id="foto-cover" type="file" name="cover" required>
				</div>
				<div class="input-box-file">
					<span class="details">Foto Header</span>
					<label for="foto-head">
						<img src="../../image/upload.png">
					</label>
					<input id="foto-head" type="file" name="header" required>
				</div>
				<div class="input-box-file">
					<span class="details">Foto Artikel</span>
					<label for="foto-artikel">
						<img src="../../image/upload.png">
					</label>
					<input id="foto-artikel" type="file" name="artikel" required>
				</div>
			</div>
			<div class="button">
				<input type="submit" value="Kirim" name="kirim">
			</div>	
		</form>
	</div>
	<br>
</body>
</html>