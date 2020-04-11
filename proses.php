<?php 
session_start();

include 'koneksi.php';

$username = $_GET['username'];
$password = $_GET['password'];
$id = $_GET['id'];

$login = mysqli_query($conn,"SELECT * FROM userlogin WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);

    if($data['level']=="agama"){
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "agama";
		header("location:Agama/index.php");
    }
    elseif($data['level']=="pkn"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "pkn";
		header("location:PKN/index.php");
	}
	elseif($data['level']=="bahasa indonesia"){
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "bahasa indonesia";
		header("location:Bahasa Indonesia/index.php");
	}
	elseif($data['level']=="matematika"){
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "matematika";
		header("location:Matematika/index.php");
    }
    elseif($data['level']=="sejarah"){
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "sejarah";
		header("location:Sejarah/index.php");
    }
    elseif($data['level']=="bahasa inggris"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "bahasa inggris";
		header("location:Bahasa Inggris/index.php");
	}
	elseif($data['level']=="seni budaya"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "seni budaya";
		header("location:Seni Budaya/index.php");
	}
	elseif($data['level']=="olahraga"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "olahraga";
		header("location:Olahraga/index.php");
	}
	elseif($data['level']=="mandarin"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "mandarin";
		header("location:Mandarin/index.php");
	}
	elseif($data['level']=="budaya humanis"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "budaya humanis";
		header("location:Budaya Humanis/index.php");
	}
	elseif($data['level']=="simdig"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "simdig";
		header("location:Simdig/index.php");
	}
	elseif($data['level']=="fisikakimia"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "fisikakimia";
		header("location:FisikaKimia/index.php");
	}
	elseif($data['level']=="produktifrpl"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "produktifrpl";
		header("location:Produktif RPL/index.php");
	}
	elseif($data['level']=="ekonomi"){

		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['level'] = "ekonomi";
		header("location:Ekonomi/index.php");
	}
    else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>