<?php
if(isset($_GET['data'])){
    
}
else{
    header("Location: index.php");
}
function RemoveSpecialChar($str) {
      
    // Using str_replace() function 
    // to replace the word 
    $res = str_replace( array( '\'', '='), '', $str);
      
    // Returning the result 
    return $res;
    }
include('config.php');
$file = $database_path;
$searchfor = strtolower(RemoveSpecialChar(base64_encode($_GET['data'])));

// the following line prevents the browser from parsing this as HTML.


// get the file contents, assuming the file to be readable (and exist)

?>









<html>
<head>
    <style>
        .magic-text {
    position:relative;
    z-index:-99;  /* or just -1, whatever */
}
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>  $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });</script>
</head>
<body>
  
</body>

</html>


<html>
    
    <head>
        
    </head>
    
    <body>
  
        
    </body>
</html>





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
    
   <font face="Century Gothic" color="white"><h3>&nbsp;&nbsp;kategori <?php echo $_GET['data'];?></h3></font>
<ul class="nav" align="center">

     
            
     
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
