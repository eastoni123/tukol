$(document).ready(function(){
// TABS
$('ul.tabs').tabs();

// SELECT
$('select').material_select();

//DATEPICKER
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});
// PARTICLES
$('#particles').particleground({
	dotColor: 'rgba(0,0,0,0.2)',
	lineColor: 'rgba(0,0,0,0.2)'
});

});
// END DOCUMENT FUNCTION

//BOX AKUN
$('#kotak-akun').hide();
var down = true;
$('#btn-akun').click(function(){
	if (down) {
		down = false;
		$('#kotak-akun').fadeIn();
	}else{
		down = true;
		$('#kotak-akun').fadeOut();
	}
});

//BACK TO PREVIOUS PAGE
function goBack() {
	window.history.back();
}

// validasi angka huruf
function getkey(e)
{
	if (window.event)
		return window.event.keyCode;
	else if (e)
		return e.which;
	else
		return null;
}
function angkadanhuruf(e, goods, field)
{
	var angka, karakterangka;
	angka = getkey(e);
	if (angka == null) return true;

	karakterangka = String.fromCharCode(angka);
	karakterangka = karakterangka.toLowerCase();
	goods = goods.toLowerCase();

// check goodkeys
if (goods.indexOf(karakterangka) != -1)
	return true;
// control angka
if ( angka==null || angka==0 || angka==8 || angka==9 || angka==27 )
	return true;

if (angka == 13) {
	var i;
	for (i = 0; i < field.form.elements.length; i++)
		if (field == field.form.elements[i])
			break;
		i = (i + 1) % field.form.elements.length;
		field.form.elements[i].focus();
		return false;
	};
// else return false
return false;
}