<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Aplikasi Booking Tukang">
	<meta name="author" content="Bagus Aditama | Siti Musdalifa | Muhammad Eastoni Maulana">
	<title>Tukang Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/component/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/component/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/component/css/style.css">
</head>
<body>

	<div class="container-fluid">
		<div class="row" id="header">
			<div class="col m12 s12">
				<img src="assets/component/img/tukol-hitam.png" class="animated infinite pulse col m2 offset-m5 s8 offset-s2" id="logoutama">
			</div>
			<img src="assets/component/img/maskot.png" class="col m2 s4 offset-s4 offset-m1" id="maskot">
			<div class="col m8 offset-m1 s12" style="margin-top: 10vh">
				<h5 class="col m1 hide-on-med-and-down center-align s12 white-text flow-text red animated slideInDown" style="padding: 10px 0px;border-radius: 50px">&nbsp;</h5>
				<h5 class="col m10 offset-m1 center-align s12 white-text flow-text red animated slideInDown" style="padding: 10px 0px;border-radius: 50px">"Kamu ingin bangun rumah ? atau bikin furniture rumah tangga ?"</h5>
				<p class="col m8 blue center-align s12 white-text flow-text animated slideInDown" style="font-size: 2rem!important;border-radius: 50px">"Cari dan Booking Tukangmu disini !"</p>
				<p class="col m1 offset-m1 hide-on-med-and-down blue center-align s12 white-text flow-text animated slideInDown" style="font-size: 35px !important;border-radius: 50px">&nbsp;</p>
				<p class="col m2 hide-on-med-and-down blue center-align s12 white-text flow-text animated slideInDown" style="font-size: 35px !important;border-radius: 50px">&nbsp;</p>
				<a href="assets/data/view/login.php" class="btn-large col m3 s12 waves-effect waves-default animated slideInUp" style="border-radius: 50px">Masuk &nbsp;&nbsp;&nbsp;<i class="zmdi zmdi-sign-in"></i></a>
			</div>
			<div class="col m12 s12" style="margin-top: 30px">
				<a href="assets/data/view/about.php">
					<div class="chip right amber white-text">
						<img src="assets/component/img/about.png" alt="about">
						Tentang Kami
					</div>	
				</a>
			</div>
		</div>
	</div><!-- END CONTAINER -->

	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="assets/component/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/component/js/materialize.js"></script>
	<script type="text/javascript" src="assets/component/js/global.js"></script>
	<script type="text/javascript" src="assets/component/js/parallax-scroll.js"></script>
	<script type="text/javascript" src="assets/component/js/wow.min.js"></script>
	<script>
		wow = new WOW(
		{
			animateClass: 'animated',
			offset:       100,
			callback:     function(box) {
				console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			}
		}
		);
		wow.init();
		document.getElementById('moar').onclick = function() {
			var section = document.createElement('section');
			section.className = 'section--purple wow fadeInDown';
			this.parentNode.insertBefore(section, this);
		};
	</script>
</body>
</html>