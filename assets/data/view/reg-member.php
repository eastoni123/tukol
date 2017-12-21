<?php 
include 'header-awal.php';
?>
<div class="row">
	<form method="post" action="../proccess/reg-member.php" enctype="multipart/form-data" onsubmit="return validateForm()" name="form-daftar" class="white col m4 offset-m4 s12 z-depth-2" style="padding: 5px 5px;">
		<div class="input-field col s12 m12">
			<input id="email" name="email" type="email" data-error="E-mail harus mengandung '@' ya 😊" data-success="Valid" class="validate">
			<label for="email">Email &nbsp;<i class="zmdi zmdi-email"></i></label>
		</div>
		<div class="input-field col s12 m12">
			<input id="pass" name="password" type="password" class="validate">
			<label for="pass">Password Baru &nbsp;<i class="zmdi zmdi-lock"></i></label>
		</div>
		<div class="input-field col s12 m12">
			<input id="nama" name="nama_member" type="text" class="validate" onKeyPress="return angkadanhuruf(event,' qwertyuiopasdfghjklzxcvbnm',this)">
			<label for="nama">Nama Lengkap &nbsp;<i class="zmdi zmdi-account"></i></label>
		</div>
		<div class="input-field col s12 m12">
			<input id="alamat" name="alamat" type="text" class="validate"">
			<label for="alamat">Alamat &nbsp;<i class="zmdi zmdi-map"></i></label>
		</div>
		<div class="input-field col s12 m12">
			<select name="jkel">
				<option value="" disabled selected>Pilih</option>
				<option value="L">Laki-Laki</option>
				<option value="P">Perempuan</option>
			</select>
			<label>Jenis Kelamin &nbsp;<i class="zmdi zmdi-accounts"></i></label>
		</div>
		<div class="input-field col s12 m12">
			<input id="telp" name="no_telp" type="text" class="validate" onKeyPress="return angkadanhuruf(event,'1234567890',this)">
			<label for="telp">No. Telepon &nbsp;<i class="zmdi zmdi-phone"></i></label>
		</div>
		<div class="file-field input-field col m12 s12">
			<div class="btn blue">
				<span><i class="zmdi zmdi-camera"></i></span>
				<input type="file" name="file">
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text" value="Foto Profil">
			</div>
		</div>
		<button type="submit" name="reg" class="col m6 s12 blue btn waves-effect">Daftar</button>
	</form>
</div>
<?php 
include 'footer-member.php';
include 'footer.php';
?>