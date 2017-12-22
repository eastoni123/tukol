$(document).ready(function(){
// TABS
$('ul.tabs').tabs();

// SELECT
$('select').material_select();

//SIDENAV
$(".button-collapse").sideNav();

//DATEPICKER
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});

});
// END DOCUMENT FUNCTION

// VALIDATE FORM
function validateForm() {
	var a = document.forms["form-daftar"]["nama"].value;
	var b = document.forms["form-daftar"]["email"].value;
	var c = document.forms["form-daftar"]["password"].value;
	var d = document.forms["form-daftar"]["no_telp"].value;
	var e = document.forms["form-daftar"]["alamat"].value;
	var f = document.forms["form-daftar"]["file"].value;
	var g = document.forms["form-daftar"]["jkel"].value;
	var h = document.forms["form-daftar"]["no_telp"].value;
	var i = document.forms["form-daftar"]["file"].value;
	if (a==null || a=="" || b==null || b==""|| c==null || c=="" || d==null || d=="" || e==null || e==""|| f==null || f=="" || g==null || g==""|| h==null || h=="" || i==null || i=="") {
		Materialize.toast('Form tidak boleh kosong ya 😊', 2000);
		return false;
	}
}
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