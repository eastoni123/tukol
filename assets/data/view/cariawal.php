<?php 
include 'header-awal.php';
include '../connection/config.php';
$sql = "SELECT * FROM tukang";
$query = mysql_query($sql);
?>
<div class="row">
	<div class="col m12 s12">
		<h5 class="flow-text col m12 s12 animated slideInLeft center-align" style="font-size: 20px !important">Silahkan Cari Tukang yang sesuai dengan kebutuhan Anda 😊</h5>
		<hr class="col m4 offset-m4 s12 animated slideInLeft delay2">
	</div>
	<form class="col m2 s12 z-depth-2 animated slideInLeft delay5 white" style="padding: 15px 10px">
		<h6 class="col m12 s12 grey-text">Filter</h6>
		<hr class="col m12 s12">
		<div class="input-field col s6 m6">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="material">Material</option>
				<option value="mebel">Mebel</option>
			</select>
			<label>Kategori Tukang</label>
		</div>
		<div class="input-field col s6 m6">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="">Dinamisno</option>
			</select>
			<label>Provinsi</label>
		</div>
		<div class="input-field col s6 m6">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="">Dinamisno</option>
			</select>
			<label>Kota/Kabupaten</label>
		</div>
		<div class="input-field col s6 m6">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="">Dinamisno</option>
			</select>
			<label>Kecamatan</label>
		</div>
		<p class="range-field col m12 s12">
			<label>Nilai Kerja Tukang</label>
			<input type="range" id="range" min="1" max="5" />
		</p>
		<button type="submit" class="animated zoomIn delay5 waves-effect waves-default col m12 s12 btn blue">Cari<i class="zmdi zmdi-search right"></i></button>
	</form>
	<div class="col m8 s12">
		<nav class="wow animated fadeIn delay3">
			<div class="nav-wrapper">
				<form>
					<div class="input-field blue">
						<input id="search" type="search" required placeholder="Cari Tukang" onKeyPress="return angkadanhuruf(event,' qwertyuiopasdfghjklzxcvbnm ',this)">
						<label for="search"><i class="zmdi zmdi-search"></i></label>
					</div>
				</form>
			</div>
		</nav>
		<?php while ( $t = mysql_fetch_array($query))
		{
			?>
			<div class="wow animated fadeInUp delay3 col m4 s12 box-tukang z-depth-2" style="background: url(../img/tukang/<?php echo $t['foto_tukang'] ?>)">
				<div class="ireng col m12 s12">
					<h4 class="col m12 s12 center-align white-text" style="font-family: lemon"><?php echo $t['nama_tukang'] ?></h4>
					<hr class="col m2 offset-m5 s2 offset-s5">
					<h6 class="col m12 s12 white-text center-align">Status : <?php echo $t['status'] ?></h6>
					<button class="waves-effect waves-light btn transparent btn-view col m6 offset-m3 s12">Lihat</button>
				</div>
			</div>
			<?php 
		}
		?>
	</div>
	<form action="../proccess/login-member.php" method="post" class="col m2 s12 z-depth-2 animated slideInUp white" style="padding: 15px 10px">
		<h6 class="col m12 s12 grey-text">Anda harus Masuk sebagai member untuk Booking</h6>
		<hr class="col m6 s12">
		<div class="input-field col m12 s12">
			<input id="email" type="email" name="email" class="validate">
			<label for="email" data-error="E-mail harus mengandung '@' ya 😊" data-success="Valid">E-mail &nbsp;<i class="zmdi zmdi-email"></i></label>
		</div>
		<div class="input-field col m12 s12">
			<input id="pass" type="password" name="password" class="validate">
			<label for="pass">Password &nbsp;<i class="zmdi zmdi-lock"></i></label>
		</div>
		<button type="submit" name="login" class="waves-effect btn blue col m12 s12">Masuk <i class="zmdi zmdi-mail-send right"></i></button>
		<h6 class="col m12 s12">Belum punya Akun ? <a href="reg-member.php">Daftar</a></h6>
	</form>
	<ul class="pagination col m4 offset-m3 s12">
		<li class="disabled"><a href="#!"><i class="zmdi zmdi-chevron-left"></i></a></li>
		<li class="active blue"><a href="#!">1</a></li>
		<li class="waves-effect"><a href="#!">2</a></li>
		<li class="waves-effect"><a href="#!">3</a></li>
		<li class="waves-effect"><a href="#!">4</a></li>
		<li class="waves-effect"><a href="#!">5</a></li>
		<li class="waves-effect"><a href="#!"><i class="zmdi zmdi-chevron-right"></i></a></li>
	</ul>
</div>
<?php 
include 'footer-member.php';
include 'footer.php';
?>