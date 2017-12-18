</div><!-- END CONTAINER -->

<!-- JAVASCRIPT -->
<script type="text/javascript" src="../../component/js/jquery.min.js"></script>
<script type="text/javascript" src="../../component/js/materialize.js"></script>
<script type="text/javascript" src="../../component/js/global.js"></script>
<script type="text/javascript" src="../../component/js/wow.min.js"></script>
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