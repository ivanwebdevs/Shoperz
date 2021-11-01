<?php 
$ip = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
$lastlogin = file_get_contents('lastlogin.encrypt');
if($ip == $lastlogin){
    
}
else{
    header('Location: ./login.php');
}
?>



<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../requirement/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="myFunction()" style="margin:0;float:center;">

<div id="loader"align="center"><br><br><br><br><div class="lds-heart" style="background-color:blue;"><div class="lds-heart"></div></div><h3>Loading</h3></div>

<div style="display:none;" id="myDiv" class="animate-bottom" align="center">
 
 
<div>
<div class="topnav">
  <a class="active" href="#home">Admin</a>
  <a href="#contact">Contact</a>
  <div class="search-container">
    <form action="./search.php">
      <input type="text" placeholder="Cari..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</div>


<?php 

if (!empty($_GET['message'])){
    
include 'alert.php';}?>


<div class="pembungkus">
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;Admin Tool</h3></font>
<ul class="nav" align="center">


  
  <a href=''><img class="zoom" width="100px" src="./img/cara_pesan.png"></a>
   <a href="./select_product.php?typecmd=edit"><img class="zoom" width="100px" src="./img/edit_produk.png"></a> 
  <a href="./select_product.php?typecmd=delete"><img class="zoom" width="100px" src="./img/hapus_produk.png"></a>
 
   <a href="./set-add-item.php"><img class="zoom" width="100px" src="./img/tambah_produk.png"></a> 
   
   <a href="./logout.php"><img class="zoom" width="100px" src="./img/logout.png"></a>  
 
</ul>
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
