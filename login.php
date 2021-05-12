<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
<!--===============================================================================================-->
</head>

<body>
	
	<div class="limiter">
		<!-- Baground warna warni gede -->
		<div class="container-login100" style="background-color:#172D44;">
			<!-- Backgound putih login -->
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<!-- Formulir untuk login -->
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-49">Login</span>

					<div class="tiga-opsi-user">
						<ul>
							<li class="admin"><a href="#">Admin</a></li>
							<li><a href="#">Dosen</a></li>
							<li><a href="#">Mahasiswa</a></li>
						</ul>
						<div class="under-line"></div>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<!-- tempat input username -->
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<!-- tempat input password -->
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<!-- link kalo lupa password -->
					<div class="text-right p-t-8 p-b-31">
						<a href="#">Forgot password?</a>
					</div>
					
					<!-- button login -->
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="login">Login</button>
						</div>
					</div>

					<!-- kalo misalnya mau sign up manual -->
					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">Or Sign Up Using</span>
						<!-- link ke page untuk sign up -->
						<a href="#" class="txt2">Sign Up</a>
					</div>
				</form>
				
				<!-- masukin php -->
				<?php
					if(isset($_POST['login'])){
						include"config.php";
						$username = $_POST['username'];
						$password = $_POST['pass'];

						$cek_user = mysqli_query($koneksi, "SELECT * FROM akun WHERE username ='$username' ");
						$row = mysqli_num_rows($cek_user);

						if($row === 1){
							// jalankan prosedur seleksi password
							$fetch_pass = mysqli_fetch_assoc($cek_user);
							$cek_pass = $fetch_pass['password'];

							if($cek_pass <> $password){
								echo"<script>alert('Password Salah');</script>";
							} else {
								echo"<script>alert('Login Berhasil');</script>";
							}
						} else {
							echo"<script>alert('username salah atau belum terdaftar');</script>";
						}
					}
				?>
			</div>
		</div> 
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>