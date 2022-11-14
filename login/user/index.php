<?php 
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['role']=="user"){

	}else{
		header("Location: ../admin/index.php");
		exit;
	}
}else{
	header("Location: ../../login.php");
}
require '../../koneksi.php';
$result = mysqli_query($conn, "SELECT tb_artikel.id AS kode, judul, COALESCE(COUNT(komen), 0) AS jumlah, COALESCE(CAST(AVG(rate) AS decimal(2,1)), 0) AS rata, foto_cover FROM tb_artikel LEFT OUTER JOIN tb_komen ON tb_artikel.id=tb_komen.id_artikel GROUP BY tb_artikel.id;");
$tb_konten =[];
while($row = mysqli_fetch_assoc($result)){
	$tb_konten[]=$row;
}
$pilih = false;
$id_user = $_SESSION['id_user'];
$cek_komen = mysqli_query($conn, "SELECT * FROM tb_komen WHERE id_user = $id_user");
$cek_vote = mysqli_query($conn, "SELECT * FROM tb_webrate JOIN tb_user ON tb_webrate.id_user=tb_user.id AND tb_webrate.id_user = $id_user");
if(mysqli_num_rows($cek_komen)!=0){
	if(mysqli_num_rows($cek_vote)==0){
		$pilih=true;
	}
}
// if(mysqli_num_rows($cek_vote)==0){
// 	$pilih=true;
// }
if(isset($_POST['vote'])){
	$vote = $_POST['vote'];
	$ins_vote = mysqli_query($conn, "INSERT INTO tb_webrate VALUES($id_user,'$vote');");
	if($ins_vote){
		echo"
            <script>
                alert('Terimakasih Atas Masukan Anda');
                document.location.href = '../../index.php';
            </script>
        ";
	}else{
		echo"
            <script>
                alert('Gagal Vote');
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
	<title>Go Traveler : <?php echo $_SESSION['nama']; ?></title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body><?php if($pilih){
	echo '
	<div class="wrapper">
			<h2 class="question">Apakah Website Ini Bermanfaat?</h2>
			<div class="btn-group">
				<form method="post">
					<button type="submit" name="vote" value="y">Ya</button>
					<button type="submit" name="vote" value="n">Tidak</button>
				</form>
			</div>
		</div>
	';
} ?>
		
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
	<header>
		<?php foreach ($tb_konten as $konten): ?>
		<div class="bx"><a href="artikel.php?id=<?php echo $konten['kode']; ?>">
			<img src="../../image/artikel/<?= $konten['foto_cover']; ?>">
			<div class="content">
				<h3><?php echo $konten['judul']; ?></h3>
				<p><?php echo $konten['jumlah']; ?> <i class="fa fa-comment" style="color: #fff;"></i></p>
				<h6><span>rate</span><?php echo $konten['rata']; ?><i class="fa fa-star" style="color: gold;"></i></h6>
			</div></a>
		</div>
		<?php endforeach ?>
	</header>
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