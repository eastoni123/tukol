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


	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="assets/component/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/component/js/materialize.js"></script>
	<script type="text/javascript" src="assets/component/js/global.js"></script>
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