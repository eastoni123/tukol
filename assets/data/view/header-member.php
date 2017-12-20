<?php 
include '../connection/config.php';
session_start();
$password = $_SESSION['password'];
$email = $_SESSION['email'];
if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
	header('location:cariawal.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Aplikasi Booking Tukang">
	<meta name="author" content="Bagus Aditama | Siti Musdalifa | Muhammad Eastoni Maulana">
	<title>Tukang Online | <?php echo $_SESSION['nama_member'] ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/hover.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/style.css">
</head>
<body class="grey lighten-5">
	<nav class="blue animated slideInDown delay4">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo"><img src="../../component/img/tukol-putih.png" style="height: 60px"></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li class="hvr-underline-from-left"><a href="caritukang.php">Cari Tukang</a></li>
				<li class="hvr-underline-from-left"><a href="badges.html">Riwayat Pembookingan</a></li>
				<li class="hvr-buzz infinite"><a href="collapsible.html"><i class="zmdi zmdi-notifications"></i></a></li>
				<li id="btn-akun">
					<a>
						<div class="chip blue darken-2 white-text">
							<img src="../img/member/<?php echo $_SESSION['foto_profil'] ?>" alt="<?php echo $_SESSION['nama_member'] ?>">
							<?php echo $_SESSION['nama_member'] ?>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="white z-depth-2" id="kotak-akun">
		<div class="row">
			<div id="foto-akun" style="background: url(../img/member/<?php echo $_SESSION['foto_profil'] ?>);" class="z-depth-2 col"></div>
			<div class="col m7">
				<h6 class="col m12">Nama : <?php echo $_SESSION['nama_member'] ?></h6>
				<h6 class="col m12">Alamat : <?php echo $_SESSION['alamat'] ?></h6>
				<h6 class="col m12">E-mail : <?php echo $_SESSION['email'] ?></h6>
			</div>
		</div>
		
		<div class="row" style="margin-top: 20px">
			<a href="profil-member.php" class="col m6 btn blue waves-effect waves-default">Atur Profil <i class="zmdi zmdi-settings"></i> </a>
			<a href="../proccess/logout.php" class="col m5 offset-m1 btn red waves-effect waves-default">Keluar <i class="zmdi zmdi-power"></i> </a>
		</div>
	</div>
	<div class="container-fluid">