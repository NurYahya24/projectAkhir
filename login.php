<?php 
session_start();
require 'koneksi.php';
if(isset($_SESSION['login'])){
	if($_SESSION['role']=="user"){
		header("Location: login/user/index.php");
		exit;
	}else if($_SESSION['role']=="admin"){
		header("Location: login/admin/index.php");
		exit;
	}
}


if(isset($_POST['submit'])){
	$username = $_POST['username'];
   	$password = $_POST['password'];
   	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE nama = '$username'");
   	if(mysqli_num_rows($result)===1){
      	$row = mysqli_fetch_assoc($result);
      	if(password_verify($password, $row['password'])){
         	$_SESSION['login']=true;
         	$_SESSION['role']=$row['role'];
         	$_SESSION['id_user']=$row['id'];
         	$_SESSION['nama']=$row['nama'];
         	echo "<script>
         			alert('Login Berhasil');
         			</script>";
         	header("Location: login.php");
         	exit;
      	}
   	}$error=true;
}




?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="logres.css">
</head>
<body>
	<form class="form" method="post" name="login">
        <h1 class="login-title">Login GoTraveler</h1>
        <?php if(isset($error)){
        	echo"<p style='color: red;'>Username atau Password Salah</p>";}
        ?>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Belum Punya Akun?<a href="regis.php">Registrasi</a></p>
  </form>
</body>
</html>