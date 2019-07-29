<?php
	session_start();
	session_destroy();
	require "check.php";


?>



<!DOCTYPE html>
<html>

<head>
	
		
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">


  <!-- TAB ICON -->
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <link rel="icon" href="assets/images/logo.png" type="image/x-icon">

  

 <!-- page -->
  <link rel="stylesheet" href= "css/index/index.css">


  <!-- mobirise -->
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <!-- jquery -->
  <script src="assets/js/jquery.js"></script>

  <link href="assets/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" >
  <script src="assets/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
	var counter;
	counter = 2;

	$(".entered").keypress(function(e) {
		  //Enter key
		  if (e.which == 13) {
			return false;
		  }
		});

$('#idfield1').keypress(function() {
	$('#idfield2').val($(this).val());
});

</script>



	<!------ Include the above in your HEAD tag ---------->
	<!------ Include the above in your HEAD tag ---------->
	<title>Index</title>
	<style type="text/css">
		body {
		background-size: cover;
		}

		.tanggalan {
  
		    background-color: #f6f6f6;
		    border: none;
		    color: #0d0d0d;
		    padding: .5em .5em;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    /* margin: 5px; */
		    width: 100%;
		    border: 2px solid #149dcc;
		}
	</style>

	<!-- Header -->
	<?php include("misc/header.php") ?>
	
</head>

<!-- BODY START -->
<body style="background:url(assets/bg/indexbackground.jpg)  fixed center no-repeat;" id = "body">

  
	<section class=" mbr-fullscreen mbr-parallax-background" id="header2-b">
		<div class="mbr-overlay" style="opacity: 100; background-color: rgba(255, 255, 255, 0); background-image: url(assets/bg/indexbackground.jpg); background-size: cover;"></div>

		<div class="container align-center">
			<div class="row justify-content-md-center">
				<div class="mbr-white col-md-10">
					<a href="">
						<h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Selamat Datang <br> Di TIV Pandaan</h1>
					</a>

					<div style="width:100%">
						<input style="width:50%;margin:auto;" class="form-control idfield1 UIDtext" autofocus required type="text" placeholder="Masukkan nomor id kartu" aria-label="Search" name="UID" id ="UID" autofocus> <br> 
						<input type="submit" class="btn btn-primary" value="Masuk" data-toggle="modal" data-target="#uidmodal"></a> 
					</div>
					
					<br>
				</div>
			</div>
		</div>
		<<?php include("bukutamu/tamumodal.php"); ?>
	</section>

	<!-- Footer -->
	<?php include("misc/footer.php") ; ?>

	<!-- page Javascript -->
	

	<!-- jquery javascript -->
	<script src="assets/js/jquery.js"></script>

	<!-- bootstrap javascript -->
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>
<script>

//Add Tamu
   	$(document).ready(function() {
		 var counter = 1 ;
	$("#add").click(function() {
		if(counter>10){
			alert("Hanya tiga identitas yang diperbolehkan setiap tamu!.");
			return false;
		} counter++;
		var lastField = $("#buildyourform div:last");
		var intId = (lastField && lastField.length && lastField.data(".ctamu") + 1) || 1;
		var fieldWrapper = $("<div class=\"md-form mb-2 ctamu"+counter+"\">");
		var flogo =$("<i class=\"fa fa-user prefix grey-text\"></i><label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-email\">Tamu Tambahan "+counter+"</label>")
		var fid = $("<div class=\" row col-sm\" style=\"margin-bottom: 5px\"><input type=\"ID\" id=\"ID-tamu \" name = \"id"+counter+"\"class=\"form-control form-control-2 validate col-sm-9\" style=\" margin-right: 5px\"  placeholder=\"Tempelkan ID pengenal\"> <select type=\"ID\" name = \"gen"+counter+"\"  class=\"form-control form-control-2  col-sm-2\"><option value=\"L\" >L</option><option value=\"P\" >P</option></select> </div>");
		 
		var fName = $("<input type=\"ID\" id=\"defaultForm-email\" name =\"name"+counter+"\"  class=\"form-control form-control-2\" placeholder=\"Nama Tamu Tambahan\"> </div>")
		
		fieldWrapper.append(flogo);
		
		fieldWrapper.append(fid);
	   	fieldWrapper.append(fName);
	   	$("#buildyourform").append(fieldWrapper);
		
		
	});
	/**/
	   $("#removed").click(function () {
		 if(counter==1){
			alert("Minimal 2 data untuk opsi rombongan.");
			return false;
		 }
		$(".ctamu"+counter).remove();
		counter--;
	

	});

	

	$('.UIDtext').keypress(function(event){
	    var keycode = (event.keyCode ? event.keyCode : event.which);
	    var stcount = $('.UIDtext').val().length
	    if(keycode == '13'){
	    	if (stcount>=3) {	    	
			        $('#uidmodal').modal('show');
			}
			else {
				alert("Nomer ID minimal memiliki 3 karakter")
			}
		}
	});   
	});
	
		$(".entered").keypress(function(e) {
		  //Enter key
		  if (e.which == 13) {
			return false;
		  }
		});

		$.fn.mirror = function (selector) {
		return this.each(function () {
			var $this = $(this);
			var $selector = $(selector);
			$this.bind('keyup', function () {
				$selector.val(($this.val()));
			});
		});
		};
		$('.idfield1').mirror('.idfield2'); 
</script>

</html>