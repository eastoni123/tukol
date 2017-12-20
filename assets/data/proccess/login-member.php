<?php
session_start();//memulai session
include"../connection/config.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `member` WHERE email='$email' AND password = '$password'";
$query = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($query) == 0 ) {
	echo "<script>";
	echo "alert('Email atau password tidak ditemukan !!');";
	echo "window.location='../view/cariawal.php';";
	echo "</script>";
} else {
	header("location:../view/caritukang.php");
	$fetch = mysql_fetch_array($query);
	$_SESSION['id_member'] = $fetch['id_member'];
	$_SESSION['email'] = $fetch['email'];
	$_SESSION['password'] = $fetch['password'];
	$_SESSION['nama_member'] = $fetch['nama_member'];
	$_SESSION['foto_profil'] = $fetch['foto_profil'];
	$_SESSION['alamat'] = $fetch['alamat'];
	$_SESSION['jkel'] = $fetch['jkel'];
	$_SESSION['no_telp'] = $fetch['no_telp'];
}

?>