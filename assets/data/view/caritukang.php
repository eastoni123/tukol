<?php 
include 'header-member.php';
include '../connection/config.php';
$sql = "SELECT * FROM tukang";
$query = mysql_query($sql);
?>
<div class="row">
	<div class="col m12 s12">
		<h5 class="flow-text col m12 s12 animated slideInLeft" style="font-size: 20px !important">Silahkan Cari Tukang yang sesuai dengan kebutuhan Anda 😊</h5>
		<hr class="col m3 s12 animated slideInLeft delay2">
	</div>
	<form class="col m2 s12 z-depth-2 animated slideInLeft delay5 white" style="padding: 15px 10px">
		<h6 class="col m12 s12 grey-text right-align">Filter</h6>
		<hr class="col m6 s12 right">
		<div class="input-field col s6 m12">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="material">Material</option>
				<option value="mebel">Mebel</option>
			</select>
			<label>Kategori Tukang</label>
		</div>
		<div class="input-field col s6 m12">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="">Dinamisno</option>
			</select>
			<label>Provinsi</label>
		</div>
		<div class="input-field col s6 m12">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="">Dinamisno</option>
			</select>
			<label>Kota/Kabupaten</label>
		</div>
		<div class="input-field col s6 m12">
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
	<div class="col m10 s12">
		<nav class="wow animated fadeIn delay3">
			<div class="nav-wrapper">
				<form>
					<div class="input-field blue">
						<input id="search" type="search" required placeholder="Cari Tukang" onKeyPress="return angkadanhuruf(event,'qwertyuiopasdfghjklzxcvbnm ',this)">
						<label for="search"><i class="zmdi zmdi-search"></i></label>
					</div>
				</form>
			</div>
		</nav>
		<?php while ( $t = mysql_fetch_array($query))
		{
			?>
			<div class="wow animated fadeInUp delay3 col m3 s12 box-tukang z-depth-2" style="background: url(../img/tukang/<?php echo $t['foto_tukang'] ?>)">
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
	
</div>
<?php 
include 'footer-member.php';
include 'footer.php';
?>