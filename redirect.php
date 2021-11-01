<?php
include('./config.php');
$nama_barang = $_GET['nama_barang'];
$harga_barang = (int)$_GET['harga_barang'];
$md5item = $_GET['md5item'];
$jumlah_pesanan = (int)$_GET['jumlah_pesanan'];
$harga_barang_rupiah = rupiah($harga_barang);
$total = rupiah($jumlah_pesanan * $harga_barang);
$text_raw = "
Nama barang : $nama_barang
Harga barang : $harga_barang_rupiah
Jumlah Pesanan : $jumlah_pesanan
id produk : $md5item

TOTAL : _*$total*_

";

$text = urlencode($text_raw);

header("Location: whatsapp://send/?phone=$nomor_bisnis_wa&text=$text");


?>