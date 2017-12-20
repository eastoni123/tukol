<?php 
include '../connection/config.php';
include 'header-member.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tukang WHERE id_tukang = $id";
$query = mysql_query($sql);
?>
<div class="row" style="margin-top: 20px">
	<nav class="white col m4 offset-m4 animated fadeInDown delay5" style="border-bottom: 3px solid  #2196f3">
		<div class="nav-wrapper">
			<div class="col s12 m12">
				<?php while ($tu = mysql_fetch_array($query))
				{
					?>
					<h5 class="black-text center-align" style="font-family: Roboto Light">Booking <?php echo $tu['nama_tukang'] ?></h5>

				</div>
			</div>
		</nav>	
	</div>

	<div class="row" style="margin-top: 50px">
		<div class="white col m10 offset-m1 s12 z-depth-2 box-booking animated zoomIn">
			<div class="kiri col m3 offset-m1 white s12 z-depth-2 wow animated zoomInUp delay3">

				<div class="col m12 s12 foto-booking-tukang" style="background: url(../img/tukang/<?php echo $tu['foto_tukang'] ?>);"></div>
				<h6 class="col m12 s12">Nama Tukang :<?php echo $tu['nama_tukang'] ?></h6>
				<h6 class="col m12 s12">Status : <?php echo $tu['status'] ?></h6>
				<h6 class="col m12 s12">Lokasi : <?php echo $tu['kecamatan'] ?>, <?php echo $tu['kota'] ?>, <?php echo $tu['provinsi'] ?></h6>
				<?php 
			} 
			?>
		</div>

		<div class="kanan col m6 offset-m1 white s12 z-depth-2 wow animated zoomInUp delay3">
			<h4 class="col m12 s12 flow-text">Silahkan isi form untuk Booking</h4>
			<hr class="col m12 s12">
			<form class="col m12 s12">
				<div class="input-field col s12 m12">
					<input id="lokasi" type="text" class="validate" onKeyPress="return angkadanhuruf(event,'qwertyuiopasdfghjklzxcvbnm ,',this)">
					<label for="lokasi">Lokasi Kerja <i class="zmdi zmdi-map"></i></label>
				</div>
				<div class="input-field col s12 m12">
					<input id="jumlah" type="number" class="validate" onKeyPress="return angkadanhuruf(event,'1234567890',this)">
					<label for="jumlah">Jumlah Tukang</label>
				</div>
				<div class="input-field col s12 m12">
					<input id="tanggal" type="text" class="datepicker">
					<label for="tanggal">Tanggal Kerja <i class="zmdi zmdi-calendar"></i></label>
				</div>
				<a href="caritukang.php" class="btn-flat col m3 center-align s12 waves-effect waves-default blue-text">Batal</a>

				<button type="submit" class="btn right col m3 s12 waves-effect waves-default blue">Booking</button>
			</form>
		</div>
	</div>
</div>

<?php 
include 'footer-member.php';
include 'footer.php';

?>