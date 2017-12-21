<?php  
include '../connection/config.php';
if(isset($_POST['reg'])){
	$nama = $_POST['nama_member'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$alamat = $_POST['alamat'];
	$jkel = $_POST['jkel'];
	$telp = $_POST['no_telp'];
	$ekstensiboleh = array('png','jpg','jpeg');
	$foto = $_FILES['file']['name'];
	$x = explode('.',$foto);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	if(in_array($ekstensi,$ekstensiboleh) === true){
		move_uploaded_file($file_tmp,'../img/member/'.$foto);
		$query = mysql_query("INSERT INTO `member` VALUES (NULL,'$nama','$email','$pass','$telp','$alamat','$foto','$jkel')");
		if($query){
			header('location:../view/cariawal.php?Daftar Berhasil');
		}else{
			echo "File gagal di upload";
		}
	}else{
		echo 'ekstensi file tak didukung';
	}
}
?>