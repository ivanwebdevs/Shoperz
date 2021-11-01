
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./requirement/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="myFunction()" style="margin:0;float:center;">

<div id="loader"align="center"><br><br><br><br><div class="lds-heart" style="background-color:blue;"><div class="lds-heart"></div></div><h3>Loading</h3></div>

<div style="display:none;" id="myDiv" class="animate-bottom" align="center">
 
 
<div>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">Produk</a>
  <a href="#contact">Contact</a>
  <div class="search-container">
    <form action="./search.php">
      <input type="text" placeholder="Cari..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</div>

<ul class="navmantapku">
    
    
    

 
    
    <br>
<div class="pembungkus">
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;Barang Terbaru</h3></font>
<ul class="nav" align="center">



<?php
include('config.php');

$database_array = file($database_path);
$str_database_array = preg_replace('/^\s+\r?\n$/D', '', $database_array);
$database_array = array_reverse($str_database_array);
$database_array = remove_empty($database_array);


function remove_empty($array) {
  return array_filter($array, '_remove_empty_internal');
}

function _remove_empty_internal($value) {
  return !empty($value) || $value === 0;
}

foreach ($database_array as $linehebat){
$database_array_explodegg = explode('|', $linehebat);


if (!empty($database_array_explodegg['0'])){
    if (!empty($database_array_explodegg['1'])){
      $jadi_public_keren[] = $linehebat;
    }}
}

$database_arrayg = array_slice(array_reverse($jadi_public_keren), -12);

$database_arraygg = array_reverse($database_arrayg);





foreach ($database_arraygg as $line_num => $line){

$database_array_explode = explode('|', $line);


if (!empty($database_array_explode['0'])){
    if (!empty($database_array_explode['1'])){
$nama_barang = $database_array_explode['0'];
$harga_barang =  rupiah_menu($database_array_explode['1']);
$data_barang_md5 = $database_array_explode['2'];
$img_url = $database_array_explode['3'];



$tema = "<div><div class='box'><div class='container'><img class='imgkeren' width='100%'src='./database/image/$img_url'> 
  <p class='btngg2'>$harga_barang</p><p class='btngg3'>$nama_barang</p><a href='./cart.php?itemdata=$data_barang_md5'><img class='btngg zoom' src='./requirement/add-to-cart.png'></a></div></div></div> ";
  
  
  
  
  echo "".$tema."&nbsp;"; 
  
    }}
}


  
  

  ?>  
       
</ul>
</div>


<div style="
     
    width: 100%;

    max-width: 480px;">
    
    
    <div class="pembungkus2">
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;Kategori</h3></font>
<ul class="nav" align="center">


  
  <a href='kategori.php?data=alat'><img class="zoom" width="100px" src="./requirement/kategori/alat.png"></a>
   <a href="kategori.php?data=listrik"><img class="zoom" width="100px" src="./requirement/kategori/listrik.png"></a> 
  <a href="kategori.php?data=perabotan"><img class="zoom" width="100px" src="./requirement/kategori/perabotan.png"></a>
 
  <a href="kategori.php?data=pakaian"><img  class="zoom"width="100px" src="./requirement/kategori/pakaian.png"></a> 
  
   <a href="kategori.php?data=aksesoris"><img class="zoom" width="100px" src="./requirement/kategori/aksesoris.png"></a> 
   
   <a href="kategori.php?data=elektronik"><img class="zoom" width="100px" src="./requirement/kategori/elektronik.png"></a>  
 
</ul>


</div>  



<div class="pembungkus2">
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;Social Media</h3></font>
<ul class="nav" align="center">


  
  <a href='#instagram'><img class="zoom" width="100px" src="./requirement/social/instagram.png"></a>
   <a href="#tweeter"><img class="zoom" width="100px" src="./requirement/social/tweeter.png"></a> 
  <a href="#facebook"><img class="zoom" width="100px" src="./requirement/social/facebook.png"></a>
 
  <a href="#telegram"><img  class="zoom"width="100px" src="./requirement/social/telegram.png"></a> 
  
   <a href="#whatsapp"><img class="zoom" width="100px" src="./requirement/social/whatsapp.png"></a> 
   
   <a href="kategori.php?data=elektronik"><img class="zoom" width="100px" src="./requirement/kategori/elektronik.png"></a>  
 
</ul>


</div>  
    
</div>




    
</ul>




<br>
<br>
<br>
<br>
<div class="footer">
   <font face="Century Gothic" color="white"><p>© <?php echo $tahun ?> <?php echo $developer ?></p></font>
</div>

 
 
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 600);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>
