<?php
session_start();

require '../../koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE id = $id");
$tb_artikel = [];
while($row = mysqli_fetch_assoc($result)){
	$tb_artikel[]=$row;
}

$konten = $tb_artikel[0];

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
	$coverUP = $konten['foto_cover'];
	$headerUP = $konten['foto_artikel'];
	$artikelUP = $konten['foto_artikel2'];
	$tmp1 = $_FILES['cover']['tmp_name'];
	$tmp2 = $_FILES['header']['tmp_name'];
	$tmp3 = $_FILES['artikel']['tmp_name'];
	move_uploaded_file($tmp1, '../../image/artikel/'.$coverUP);
	move_uploaded_file($tmp2, '../../image/artikel/'.$headerUP);
	move_uploaded_file($tmp3, '../../image/artikel/'.$artikelUP);
	$sql = "UPDATE tb_artikel SET
			judul = '$judul',
			deskr = '$paragraf1',
			deskr2 = '$paragraf2'
			WHERE id = $id";
	$result1 = mysqli_query($conn, $sql);
	if ($result1) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'edit.php?id=<?php $id; ?>';
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
	<title>Go Traveler : Edit</title>
	<link rel="stylesheet" type="text/css" href="cupdate.css">
</head>
<body>
	<div class="kontainer">
		<div class="navbar">
            <img src="../../image/logo.png" class="logo">
            <nav>
                <ul id="menuList">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </nav>
            <img src="../../image/sideBar.png" class="menu-icon" onclick="togglemenu()">
        </div>
	</div>
	<div class="container">
		<div class="title">Edit Article</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="u-details">
				<div class="input-box">
					<span class="details">Judul</span>
					<input type="text" name="judul" placeholder="Masukkan Judul" value="<?php echo $konten['judul']; ?>">
				</div>
				<div class="input-box-area">
					<span class="details">Paragraf 1</span>
					<textarea placeholder="Masukkan Paragraf Pertama" name="paragraf1"><?php echo $konten['deskr']; ?></textarea>
				</div>
				<div class="input-box-area">
					<span class="details">Paragraf 2</span>
					<textarea placeholder="Masukkan Paragraf Kedua" name="paragraf2"><?php echo $konten['deskr2']; ?></textarea>
				</div>
				<div class="input-box-file">
					<span class="details">Foto Cover</span>
					<label for="foto-cover">
						<img src="../../image/upload.png">
					</label>
					<input id="foto-cover" type="file" name="cover">
				</div>
				<div class="input-box-file">
					<span class="details">Foto Header</span>
					<label for="foto-head">
						<img src="../../image/upload.png">
					</label>
					<input id="foto-head" type="file" name="header">
				</div>
				<div class="input-box-file">
					<span class="details">Foto Artikel</span>
					<label for="foto-artikel">
						<img src="../../image/upload.png">
					</label>
					<input id="foto-artikel" type="file" name="artikel">
				</div>
			</div>
			<div class="button">
				<input type="submit" value="Update" name="kirim">
			</div>	
		</form>
	</div>
	<br>
</body>
</html>