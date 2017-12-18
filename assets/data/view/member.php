<?php 
include 'header-member.php';
?>
<div class="row">
	<div class="col m12 s12">
		<h5 class="flow-text col m12 s12 right-align" style="font-size: 20px !important">Silahkan Cari Tukang yang sesuai dengan kebutuhan Anda 😊</h5>
		<hr class="col m3 s12 right">
	</div>
	<form class="col m2 s12 z-depth-2" style="padding: 15px 10px">
		<h6 class="col m12 s12 grey-text right-align">Filter</h6>
		<hr class="col m6 s12 right">
		<div class="input-field col s12 m12">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="material">Material</option>
				<option value="mebel">Mebel</option>
			</select>
			<label>Kategori Tukang</label>
		</div>
		<div class="input-field col s12 m12">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="">Dinamisno</option>
			</select>
			<label>Provinsi</label>
		</div>
		<div class="input-field col s12 m12">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="">Dinamisno</option>
			</select>
			<label>Kota/Kabupaten</label>
		</div>
		<div class="input-field col s12 m12">
			<select>
				<option value="" disabled selected>Pilih</option>
				<option value="">Dinamisno</option>
			</select>
			<label>Kecamatan</label>
		</div>
		<div class="input-field col s6 m6">
			<input id="min" type="text" class="validate" value="Rp." onKeyPress="return angkadanhuruf(event,'rp.1234567890',this)">
			<label for="min">Biaya Min.</label>
		</div>
		<div class="input-field col s6 m6">
			<input id="max" type="text" class="validate" value="Rp." onKeyPress="return angkadanhuruf(event,'rp.1234567890',this)">
			<label for="max">Biaya Max.</label>
		</div>
		<button type="submit" class="waves-effect waves-default col m12 s12 btn blue">Cari<i class="zmdi zmdi-search right"></i></button>
	</form>
	<div class="col m10 s12">
		<nav>
			<div class="nav-wrapper">
				<form>
					<div class="input-field blue">
						<input id="search" type="search" required placeholder="Cari Tukang" onKeyPress="return angkadanhuruf(event,'qwertyuiopasdfghjklzxcvbnm ',this)">
						<label for="search"><i class="zmdi zmdi-search"></i></label>
					</div>
				</form>
			</div>
		</nav>
		<div class="wow animated fadeInUp col m3 s12 box-tukang z-depth-2" style="background: url(../img/tukang/DSC_0050.JPG)">
			<div class="ireng col m12 s12">
				<h4 class="col m12 s12 center-align white-text" style="font-family: lemon">the tukang</h4>
				<hr class="col m2 offset-m5 s2 offset-s5">
				<h6 class="col m12 s12 white-text center-align">Status : Sibuk</h6>
				<button class="waves-effect waves-light btn transparent btn-view col m6 offset-m3 s12">Lihat</button>
			</div>
		</div>
		<div class="wow animated fadeInUp col m3 s12 box-tukang z-depth-2" style="background: url(../img/tukang/DSC_0050.JPG)">
			<div class="ireng col m12 s12">
				<h4 class="col m12 s12 center-align white-text" style="font-family: lemon">the tukang</h4>
				<hr class="col m2 offset-m5 s2 offset-s5">
				<h6 class="col m12 s12 white-text center-align">Status : Sibuk</h6>
				<button class="waves-effect waves-light btn transparent btn-view col m6 offset-m3 s12">Lihat</button>
			</div>
		</div>
		<div class="wow animated fadeInUp col m3 s12 box-tukang z-depth-2" style="background: url(../img/tukang/DSC_0050.JPG)">
			<div class="ireng col m12 s12">
				<h4 class="col m12 s12 center-align white-text" style="font-family: lemon">the tukang</h4>
				<hr class="col m2 offset-m5 s2 offset-s5">
				<h6 class="col m12 s12 white-text center-align">Status : Sibuk</h6>
				<button class="waves-effect waves-light btn transparent btn-view col m6 offset-m3 s12">Lihat</button>
			</div>
		</div>
		<div class="wow animated fadeInUp col m3 s12 box-tukang z-depth-2" style="background: url(../img/tukang/DSC_0050.JPG)">
			<div class="ireng col m12 s12">
				<h4 class="col m12 s12 center-align white-text" style="font-family: lemon">the tukang</h4>
				<hr class="col m2 offset-m5 s2 offset-s5">
				<h6 class="col m12 s12 white-text center-align">Status : Sibuk</h6>
				<button class="waves-effect waves-light btn transparent btn-view col m6 offset-m3 s12">Lihat</button>
			</div>
		</div>
	</div>
	
</div>
<?php 
include 'footer-member.php';
?>