<?php
$nomor_bisnis_wa = "6285551136903"; //Nomor bisnis / Business Phone Number
$web_name = "Shoperz"; //Judul page atau web / Title for web
$developer = base64_decode('SXZhbiBEd2UgWWFudG8='); // Do Not Change;;
$version = base64_decode('MS4w'); // Script Version
$tahun = base64_decode('MjAyMQ==');


































//Jangan Ganti Script di bawah
//Do not change script above




function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}

function rupiah_menu($angka){
	
	$hasil_rupiah = "Rp" . number_format($angka,0,',','.');
	return $hasil_rupiah;

}
$database_path = "database/data.encrypt"; // DONOT CHANGE THIS SCRIPT