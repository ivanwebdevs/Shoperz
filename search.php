<?php

include('config.php');
$file = $database_path;
$searchfor = strtolower($_GET['search']);

// the following line prevents the browser from parsing this as HTML.


// get the file contents, assuming the file to be readable (and exist)

?>


<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./requirement/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"align="center"><br><br><br><br><div class="lds-heart" style="background-color:blue;"><div class="lds-heart"></div></div><h3>Loading</h3></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
 
 
<div>
<div class="topnav">
  <a class="active" href="./">Home</a>
  <a href="#about">Hot</a>
  <a href="#contact">Contact</a>
  <div class="search-container">
    <form action="./search.php">
      <input type="text" placeholder="Cari..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</div>


<div class="pembungkus">
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;Hasil Pencarian</h3></font>
<ul class="nav">


<?php
  
  
$contents = strtolower(file_get_contents($file));
// escape special characters in the queryw
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){
   $dataraw = implode("\n", $matches[0]);
  
  $dataraw = preg_split("/\r\n|\n|\r/", $dataraw);

    foreach ($dataraw as $value) {
    if (!empty($value)){
        
        $dataggnya = explode('|',$value);
        $nama_barang = $dataggnya['0'];
        $harga_barang = rupiah_menu($dataggnya['1']);
        $data_barang_md5 = $dataggnya['2'];
        $img_url =  $dataggnya['3'];
        
        
$tema = "<div><div class='box'><div class='container'><img class='imgkeren' width='100%'src='./database/image/$img_url'> 
  <p class='btngg2'>$harga_barang</p><p class='btngg3'>$nama_barang</p><a href='./cart.php?itemdata=$data_barang_md5'><img class='btngg zoom' src='./requirement/add-to-cart.png'></a></div></div></div> ";
  
  echo $tema; 
    }
    
    }
    
}
else{
   echo "No matches found";
}  
  
  

  
?>
       
</ul>
</div>

<div class="footer">
   <font face="Century Gothic" color="white"><p>© 2021 Ivan Web Development</p></font>
</div>

 
 
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 400);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>
