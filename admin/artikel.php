<?php 
session_start();
require '../../koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT judul, deskr, deskr2, foto_artikel, foto_artikel2 FROM tb_artikel WHERE id = $id;");
$result1 = mysqli_query($conn, "SELECT tb_komen.id, nama, rate, komen, tanggal, foto_user FROM tb_komen JOIN tb_artikel ON tb_artikel.id=$id JOIN tb_user ON tb_komen.id_user=tb_user.id AND tb_komen.id_artikel=tb_artikel.id;");
$tb_artikel=[];
$tb_komen=[];
while($row = mysqli_fetch_assoc($result)){
	$tb_artikel[]=$row;
	
}
$content = $tb_artikel[0];
while($row1 = mysqli_fetch_assoc($result1)){
	$tb_komen[]=$row1;
}

$rata2 = mysqli_query($conn, "SELECT id_artikel, COALESCE(CAST(AVG(rate) AS decimal(2, 1)), 0) AS 'rata-rata' FROM tb_komen WHERE id_artikel = $id;");
$row2 = mysqli_fetch_assoc($rata2);
$avg = $row2['rata-rata'];



$lima = "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
$empat = "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i>";
$tiga = "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
$dua = "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
$satu = "<i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
if($tb_artikel==NULL){
	echo "
	<script>
		alert('ERROR 404 NOT FOUND : id out of range');
		document.location.href= 'index.php';
	</script>
	";
}




?>





<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../../app.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VISIT : <?php echo $content["judul"]; ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="artikel.css">
</head>
<body>
	<div class="kontainer">
		<div class="navbar"><a href="../../">
            <img src="../../image/logo.png" class="logo"></a>
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
	<div class="hero-nav" style="background-image: url('../../image/artikel/<?= $content["foto_artikel"] ?>');">
		<div class="hero-nav__inner">
			<h1><?php echo $content["judul"]; ?></h1>
		</div>
	</div>
	<br>
	<div class="page-content">
		<p align="justify">
			<?php echo $content["deskr"]; ?>
		</p>
		<img src="../../image/artikel/<?= $content['foto_artikel2'] ?>">
		<p align="justify">
			<?php echo $content["deskr2"]; ?>
		</p>
	</div>
	<section id="testimonials">
		<div class="testimonials-heading">
			<span>Ulasan Pengunjung</span>
			<h1 id="komen">Apa Kata Mereka?</h1>
			<h2><i class="fa fa-star"></i><?php if($avg==0){
				echo "<h3>Belum Ada Rating</h3>";
			}else {echo $avg;} ?></h2>
		</div>
		<?php foreach ($tb_komen as $komen): ?>
		<div class="testimonial-box-container">
			<a href="hapusKomen.php?id=<?php echo $komen["id"]; ?>" class="fa fa-trash" style="color:grey; font-size: 25px;" onclick="return confirm('And yakin ingin menghapus data ini ?')"></a>
			<div class="testimonial-box">
				<div class="box-top">
					<div class="profile">
						<div class="profile-img">
							<img src="../../image/user/<?= $komen["foto_user"] ?>">
						</div>
						<div class="name-user">
							<strong><?php echo $komen["nama"]; ?></strong>
							<span><?php echo $komen["tanggal"]; ?></span>
						</div>
					</div>
					<div class="reviews">
						<?php
							if($komen["rate"]==5){
								echo $lima;
							}else if($komen["rate"]==4){
								echo $empat;
							}else if($komen["rate"]==3){
								echo $tiga;
							}else if($komen["rate"]==2){
								echo $dua;
							}else if($komen["rate"]==1){
								echo $satu;
							}
						?>
					</div>
				</div>
				<div class="client-comment">
					<p><?php echo $komen["komen"]; ?></p>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</section>
	<footer>
        <div class="footer-content">
            <h3>Go Traveler</h3>
            <p>Website ini dibuat untuk memenuhi tugas projek akhir praktikum mata kuliah pemrograman web</p>
            <ul class="socials">
                <li><a href="" class="fa fa-instagram" ></a></li>
                <li><a href="" class="fa fa-whatsapp" ></a></li>
                <li><a href="" class="fa fa-twitter" ></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright&copy;2022</p>
        </div>
    </footer>


</body>
</html>

			<!----------BINTANG 5


			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>

<input type="hidden" name="" value="<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>">


			------------------->