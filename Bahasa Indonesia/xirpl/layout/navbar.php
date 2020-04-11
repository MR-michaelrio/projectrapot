<?php
	session_start();
	if($_SESSION['level'] !="bahasa indonesia"){
		header("location:../index.php?pesan=belum_login");
    }
?>
<div id="wrapper">
<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
			<a href="#"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
	</div>
	<div class="container-fluid">
		<div class="navbar-btn">
			<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
		</div>

		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-left">
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle">XI-RPL</a>
				</li>
			</ul>
		</div>
		
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="text-transform: capitalize;"><?php echo $_SESSION['username']; ?></span><i class="icon-submenu lnr lnr-chevron-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- END NAVBAR -->