<?php
include('./checklogin.php');
include('../config.php');
$data_file  = file('../'.$database_path);
$data_spesifik = $_GET['data'];

foreach ($data_file as $data_lines){
    if (strpos($data_lines,$data_spesifik)!==false){
        $datanya = $data_lines;
    }
}


$datanya_explode = explode('|',$datanya);
$nama_item = $datanya_explode['0'];
$harga_item = $datanya_explode['1'];
$encrypt_item = $datanya_explode['2'];
$path_img = $datanya_explode['3'];
$deskripsi = urldecode($datanya_explode['4']);
$kategori = $datanya_explode['5'];;


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
    
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;Edit Nama barang</h3></font>
<ul class="navajg" align="center">

     <form action="function_edit_item.php" method="post">

<table id="customers">

  <tr>
    <td>Nama Barang</td>
    <td><input class="gginput" type="text" name="nama_item" value="<?php echo $nama_item ?>">
  
            </td>
  </tr>
  
  <tr>
    <td>Kode Barang</td>
    <td><input class="inputkerenhebatgg" value="<?php echo $encrypt_item;?>" disabled></td>
      <tr>
    <td>Harga</td>
    <td><input class="gginput"  type="number" name="harga" value="<?php echo $harga_item?>"></td>
     
    
  </tr>
  
  <tr>
    <td>Deskripsi</td>
    <td> <textarea style="
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    width: 100%;
    max-width: 800px;
    height: 200px;
" type="text" name="deskripsi"><?php echo $deskripsi?></textarea></td>
     
    
  </tr>

</table>

<table>
<tr><td><h3>Kategori</h3></td></tr>
  <tr>
    <td>Pakaian</td>
    <td><input id="pakaian" type="checkbox" name="pakaian" value="true" <?php if (strpos($kategori,base64_encode("pakaian"))!==false){echo "checked";}?>></td></tr>
    
    
  <tr>
    <td>Alat</td>
    <td><input type="checkbox" name="alat" value="true" <?php if (strpos($kategori,base64_encode("alat"))!==false){echo "checked";}?>></td></tr>    


  <tr>
    <td>Listrik</td>
    <td><input type="checkbox" name="listrik" value="true" <?php if (strpos($kategori,base64_encode("listrik"))!==false){echo "checked";}?>></td></tr>
    
    
    
  <tr>
    <td>Elektronik</td>
    <td><input type="checkbox" name="elektronik" value="true" <?php if (strpos($kategori,base64_encode("elektronik"))!==false){echo "checked";}?>></td></tr>
    
    
      <tr>
    <td>perabotan</td>
    <td><input type="checkbox" name="perabotan" value="true" <?php if (strpos($kategori,base64_encode("perabotan"))!==false){echo "checked";}?>></td></tr>

  <tr>
    <td>Aksesoris</td>
    <td><input type="checkbox" name="aksesoris" value="true" <?php if (strpos($kategori,base64_encode("aksesoris"))!==false){echo "checked";}?>></td></tr>
    
    
</table>



  <input type="hidden" name="path_img" value="<?php echo $path_img;?>">
         
          
            <input type="hidden" name="kode_item" value="<?php echo $encrypt_item;?>">
           <br><button class="tombolbutton" type="submit">Save</button>
      
   </form>   
        
            
     
  
  
       
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
