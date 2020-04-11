<?php
include '../koneksi.php';
	session_start();
	if($_SESSION['level'] !="matematika"){
		header("location:../index.php?pesan=belum_login");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Rapot UAS</title>
    <?php include 'cssjava.php'; ?>
</head>
<body>

    <?php include 'layout/layout.php'; ?>
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-body">
							<div class="row">
							<div class="row">
						<div class="col-md-12">
                        <center>
                            <h3 class="panel-title">Semangat Bapak / Ibu Guru</h3>
                        </center>
						</div>
					</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="clearfix"></div>
    </div>
    
</body>
</html>
