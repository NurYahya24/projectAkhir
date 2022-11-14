<?php

require 'koneksi.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
   	$password = $_POST['password'];
   	$cpassword = $_POST['cpassword'];
   	$email = $_POST['email'];
   	$gambar = $_FILES['gambar']['name'];
   	$x = explode('.', $gambar);
   	$extensi = strtolower(end($x));
   	$gambarUP = "$username.$extensi";
   	$tmp = $_FILES['gambar']['tmp_name'];
   	move_uploaded_file($tmp, 'image/user/'.$gambarUP);
   	if($password===$cpassword){
      	$password = password_hash($password, PASSWORD_DEFAULT);
      	$result = mysqli_query($conn, "SELECT nama FROM tb_user WHERE nama = '$username'");
      	if(mysqli_fetch_assoc($result)){
         	echo "<script>
                  	alert('Username Telah Digunakan. Coba Username Lain');
                  	document.location.href='regis.php';
                  </script>";
      	}else{
         	$sql = "INSERT INTO tb_user VALUES('', '$username', '$password', '$email', '$gambarUP', 'user')";
         	$result = mysqli_query($conn, $sql);
         	if(mysqli_affected_rows($conn)>0){
            	echo "
               	<script>
                  	alert('Registrasi Berhasil');
                  	document.location.href='login.php';
               	</script>
            	";
         	}else{
            	echo "
               	<script>
                  	alert('Registrasi Gagal');
                  	document.location.href='index.php';
               	</script>
            	";
         	}
      	}
   	}else{
      echo "
         <script>
         alert('Konfirmasi Password Tidak Sesuai');
         document.location.href='regis.php';
         </script>

      ";
   	}
}














?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="logres.css">
</head>
<body>
	<form class="form" action="" method="post" enctype="multipart/form-data">
        <h1 class="login-title">Registrasi GoTraveler</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Address"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="password" class="login-input" name="cpassword" placeholder="Confirm Password"/>
        <b> Select your profile image</b>
        <input type="file" name="gambar"/><br><br>
        <input type="submit" name="submit" value="Register" class="login-button"/>
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
</body>
</html>