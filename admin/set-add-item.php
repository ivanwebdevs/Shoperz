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
        
    </head>
    
    <body>
  
        
    </body>
</html>





<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../requirement/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .boxmantap {
  width: 90%;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
  float: center;
  max-width: 720px;
  
}
    .gginput {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  max-width: 400px;
}

  .boxgg {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  max-width: 400px;
  height: 350px;
  max-height: 350px;
}

  .boxgg2 {
  width: 100%;
  padding: 1px;
  margin: 8px 0;
  display: inline-block;
  box-sizing: border-box;
  max-width: 400px;
  max-height: 250px;
}

 .boxggkeren {
  width: 100%;
  border: 1px solid #ccc;
  max-width: 400px; 
  max-height: 350px;
  height: 350px;
}
    
    
    
.navajg {
  background-color: white; 
  list-style-type: none;
  text-align: center;
  margin: 0;
  padding-left: 5px;
   padding-right: 5px;
  padding-top: 1px;
}
.navajg div {
  display: inline-block;
  font-size: 20px;
 
}    
    
</style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.inputkerenhebatgg {
  width: 100%;
  padding: 12px 20px;
  background-color:#f2f2f2;
  box-sizing: border-box;
  border:0px; 
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="myFunction()" style="margin:0;float:center;">

<div id="loader"align="center"><br><br><br><br><div class="lds-heart" style="background-color:blue;"><div class="lds-heart"></div></div><h3>Loading</h3></div>

<div style="display:none;" id="myDiv" class="animate-bottom" align="center">
 
 
<div>
<div class="topnav">
  <a class="active" href="./"><img src="../requirement/kembali.png" width="25px"></a>

</div>
</div>




     


<div class="pembungkus">
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;Tambah Barang</h3></font>
<ul class="nav" align="center">


  
<form  method="post" align="left" style="padding-left:20px;" action="set-add-item2.php"><br>
<h3>Nama Barang!</h3>
<input name="nama_barang" type="text" placeholder="Masukan Nama barang..." class="inputkuwkwk" required>

<h3>Harga Barang!</h3>
<input name="harga_barang" type="number"placeholder="Harga..." class="inputkuwkwk" required>
        
  
<h3>Deskripsi Barang!</h3>
<textarea name="deskripsi" class="inputkuwkwk" required>Deskripsi Barang!</textarea>
<br><br>
<h3>Kategori</h3>
<input id="pakaian" type="checkbox" name="pakaian" value="true">
  <label for="pakaian"> Pakaian</label><br>
  
<input id="alat" type="checkbox" name="alat" value="true">
  <label for="alat"> Alat</label><br>  
 
<input id="listrik" type="checkbox" name="listrik" value="true">
  <label for="listrik"> Listrik</label><br>    
  
 <input id="elektronik" type="checkbox" name="elektronik" value="true">
  <label for="elektronik"> Elektronik</label><br>   
  
  <input id="aksesoris" type="checkbox" name="aksesoris" value="true">
  <label for="aksesoris"> aksesoris</label><br>  
  <input id="perabotan" type="checkbox" name="perabotan" value="true">
  <label for="perabotan"> Perabotan</label><br>  
<br><br>
<button type="submit" class="tombolbutton">Next</button>

  </form>
<br>
 
</ul>

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
