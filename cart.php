<?php

include('./config.php');
$md5item = $_GET['itemdata'];

// Function to remove the spacial 
function RemoveSpecialChar($str){
      
    // Using str_ireplace() function 
    // to replace the word 
    $res = str_ireplace( array( '\'', '"', ';', '<', '>' ), ' ', $str);
      
    // returning the result 
    return $res;
    }
  

$data_file_content = file($database_path);
 
foreach ($data_file_content as $data_file_content_lines) {
                // Check if the line contains the string we're looking for, and print if it does
                if (strpos($data_file_content_lines, $md5item) !== false) {
                    $getdata = explode( "|",$data_file_content_lines );
                }
            }


$nama_barang = $getdata['0'];
$harga_barang = $getdata['1'];
$link_img = $getdata['3'];
$deskripsi = RemoveSpecialChar(urldecode($getdata['4']));


$deskripsi_explode = explode("\n",$deskripsi);
$deskripsi = implode('<br>',$deskripsi_explode);

?>







<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./requirement/style.css">
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
  <a class="active" href="./"><img src="./requirement/kembali.png" width="25px"></a>

</div>
</div>




<div class="pembungkus">
    
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;Add to Cart</h3></font>
<ul class="navajg" align="center">

    

<table id="customers">
 <tr>
    <td>Foto Barang</td>
    <td><img width="100%" style="border:20px; border-colors:blue; max-width:400px; wwidth: 300px; height: 337px; object-fit: cover;"src="./database/image/<?php echo $link_img;?>"></td>
  </tr>

  <tr>
    <td>Nama Barang</td>
    <td><?php echo $nama_barang; ?></td>
  </tr>
  
  <tr>
    <td>Kode Barang</td>
    <td><input class="inputkerenhebatgg" value="<?php echo $md5item; ?>" disabled></td>
      <tr>
    <td>Harga</td>
    <td><?php echo rupiah($harga_barang); ?></td>
     
    
  </tr>
  
  <tr>
    <td>Deskripsi</td>
    <td><?php echo $deskripsi; ?></td>
     
    
  </tr>

</table>
 <form action="./redirect.php" align="center">
            
     
           
            
            

            <input type="hidden" name="harga_barang" value="<?php echo $harga_barang; ?>" >
   <input type="hidden" name="nama_barang" value="<?php echo $nama_barang; ?>" >
            
            
            
        
     <input type="hidden" name="md5item" value="<?php echo $md5item; ?>" >
          
            <p>Jumlah Barang :</p>
            <input class="inputkuwkwk" type="number" name="jumlah_pesanan" placeholder="contoh: 1" required>
            <button class="tombolbutton" type="submit">Beli di whatsapp!</button>
           
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


