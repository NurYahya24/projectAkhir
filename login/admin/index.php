<?php 

session_start();
require '../../koneksi.php';
$result = mysqli_query($conn, "SELECT tb_artikel.id AS kode, judul, COALESCE(COUNT(komen), 0) AS jumlah, COALESCE(CAST(AVG(rate) AS decimal(2,1)), 0) AS rata, foto_cover FROM tb_artikel LEFT OUTER JOIN tb_komen ON tb_artikel.id=tb_komen.id_artikel GROUP BY tb_artikel.id;");
$tb_konten =[];
while($row = mysqli_fetch_assoc($result)){
	$tb_konten[]=$row;
}

?>




<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../../app.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Go Traveler : Admin</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" href="../../image/tab.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
		<?php foreach ($tb_konten as $konten): ?>
		<div class="wrapper"><a href="artikel.php?id=<?php echo $konten['kode']; ?>">
			<img src="../../image/artikel/<?= $konten['foto_cover']; ?>"></a>
			<div class="content">
				<span><?php echo $konten['judul']; ?></span>
				<p><?php echo $konten['jumlah']; ?> <i class="fa fa-comment" style="color: grey;"></i></p>
			</div>
			<div class="row">
				<div class="price"><?php echo $konten['rata']; ?><i class="fa fa-star" style="color: gold;"></i></div>
				<div class="buttons">
					<a href="edit.php?id=<?php echo $konten['kode']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $konten['kode']; ?>" onclick="return confirm('And yakin ingin menghapus data ini ?')">Hapus</a>
				</div>
			</div>
		</div>
		<?php endforeach ?>
		<div class="wrapper"><a href="create.php">
			<img src="../../image/add.jpg"></a>
			<div class="content">
				<span>Tambah Data Informasi Wisata</span>
				<p>Terbitkan Artikel Baru Mengenai Tempat Wisata</p>
			</div>
			<div class="row"><form action="create.php">
				<div class="buttons-add">
					<button>Tambah Sekarang !!</button>
				</div></form>
			</div>
		</div>
	</div>

	

</body>
</html>