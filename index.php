<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/home.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/tc.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="text-center" style="font-size:35px">LogIn</div></div>
							<form class="form-auth-small" action="proses.php" method='GET'>
								<div class="form-group">
									<label class="fancy-checkbox element-left" style="font-size:20px;">User Name</label>
									<input type="text" name='username' class="form-control" placeholder="User Name">
								</div>
								<div class="form-group">
									<label class="fancy-checkbox element-left" style="font-size:20px;">Password</label>
									<input type="text" name='password' class="form-control" placeholder="Password">
								</div>
									<label class="fancy-checkbox element-left">
										<span>
										<?php 
											if(isset($_GET['pesan'])){
												if($_GET['pesan'] == "gagal"){
													echo "Note : Login gagal! User Name atau Password salah!";
												}else if($_GET['pesan'] == "belum_login"){
													echo "Note : Anda harus login untuk mengakses halaman admin";
												}
											}
										?>
										</span>
									</label>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading" style="font-weight:bold;">Rapot Mid Online</h1>
							<p><b>created by Michael Rio</b></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>