<?php 
$ip = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
$lastlogin = file_get_contents('lastlogin.encrypt');
if($ip == $lastlogin){
    
}
else{
    header('Location: ./login.php');
}
?>
<?php
$nama_barang = str_replace( array("|"), '', $_POST['nama_barang']);
$harga_barang = (int)$_POST['harga_barang'];
$deskripsi_raw = str_replace( array("|"), '', $_POST['deskripsi']);
$deskripsi = urlencode($deskripsi_raw);

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


$datagg = "$nama_barang|$harga_barang|$deskripsi|$data_kategori";
?>
<!DOCTYPE html>
<html>
	<head>
	   
	       <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Crop Image Before Upload using CropperJS with PHP</title>
		<link rel="stylesheet" href="../requirement/style.css" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
		<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
		<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
		<script src="https://unpkg.com/dropzone"></script>
		<script src="https://unpkg.com/cropperjs"></script>
		
		<style>

		.image_area {
		  position: relative;
	}

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
		  position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		  width: 100%;
		}

		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
		
		</style>
	</head>
	<body>
		<div class="container" align="center">
			<br />
			<h3 align="center">Upload Image of Product</h3>
			<br />
			<div class="row">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4">
					<div class="image_area">
						<form method="post">
							<input type="file" name="image" class="image" id="upload_image" />
						</form>
					</div>
			    </div>
    		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			  	<div class="modal-dialog modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
			      			<button type="button" id="crop" class="btn btn-primary">Crop</button>
			        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			      		</div>
			    	</div>
			  	</div>
			</div>			
		</div>
	</body>
</html>

<script>

$(document).ready(function(){

	var $modal = $('#modal');

	var image = document.getElementById('sample_image');

	var cropper;

	$('#upload_image').change(function(event){
		var files = event.target.files;

		var done = function(url){
			image.src = url;
			$modal.modal('show');
		};

		if(files && files.length > 0)
		{
			reader = new FileReader();
			reader.onload = function(event)
			{
				done(reader.result);
			};
			reader.readAsDataURL(files[0]);
		}
	});

	$modal.on('shown.bs.modal', function() {
		cropper = new Cropper(image, {
			aspectRatio: 0.650,
			viewMode: 10,
			preview:'.preview'
		});
	}).on('hidden.bs.modal', function(){
		cropper.destroy();
   		cropper = null;
	});

	$('#crop').click(function(){
		canvas = cropper.getCroppedCanvas({
			width:400,
			height:400
		});

		canvas.toBlob(function(blob){
			url = URL.createObjectURL(blob);
			var reader = new FileReader();
			reader.readAsDataURL(blob);
			reader.onloadend = function(){
				var base64data = reader.result;
				$.ajax({
					url:'upload.php',
					method:'POST',
					data:{image:base64data,data2:"<?php echo $datagg; ?>"},
					success:function(data)
					{
						$modal.modal('hide');
						$('#uploaded_image').attr('src', data);
						window.location.replace("./");
					}
				});
				
			};
		});
	});
	
});
</script>

