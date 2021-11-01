<?php
header('Location:index.php?message=1');
/*contoh dalam database : 

nama-item|jumlah-item|kode-item|path-image|deskripsi


note: 
data deskripsi pada database telah di encode ke
urlencode biar bisa di gunakana lagi harus di decrypt

jika user blm login makaa arahkan ke login page



*/


$nama_item =  $_POST['nama_item'];
$harga_item =  $_POST['harga'];
$kode_item =  $_POST['kode_item'];
$path_image_item =  $_POST['path_img'];
$deskripsi_item =  urlencode($_POST['deskripsi']);
$path = "../database/data.encrypt";






//////////////////////////////////////
if (isset($_POST['pakaian'])){
    $pakaian = base64_encode("pakaian");
}
else{
    $pakaian = "";
}
//////////////////////////////
if (isset($_POST['alat'])){
    $alat = base64_encode("alat");
}
else{
    $alat = "";
}
////////////////////////////
if (isset($_POST['listrik'])){
    $listrik = base64_encode("listrik");
}
else{
    $listrik = "";
}

////////////////////////////
if (isset($_POST['elektronik'])){
    $elektronik = base64_encode("elektronik");
}
else{
    $elektronik = "";
}



////////////////////////////
if (isset($_POST['aksesoris'])){
    $aksesoris = base64_encode("aksesoris");
}
else{
    $aksesoris = "";
}



////////////////////////////
if (isset($_POST['perabotan'])){
    $perabotan = base64_encode("perabotan");
}
else{
    $perabotan = "";
}



$data_kategori = "$pakaian $alat $listrik $elektronik $aksesoris $perabotan";




$edited_string = "$nama_item|$harga_item|$kode_item|$path_image_item|$deskripsi_item|$data_kategori\n";
file_put_contents($path,implode("",array_map(function($data){global $edited_string,$kode_item;return stristr($data,"$kode_item")?"$edited_string":$data;},file($path))));

echo $nama_item;
?>