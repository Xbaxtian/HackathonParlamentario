<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Layout</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?=base_url()?>public/css/style.css">
		<!--Web css-->
		<link rel="stylesheet" href="<?=base_url()?>public/css/web.css">
		<!--Fuente-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<!--Bootstrap.css-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<!--JQuery-->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<!--Popper.js-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<!--Bootstrap.js-->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<!--Iconos-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	</head>
	<body>
		<header id="main-header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-auto mx-auto"><a href="<?= base_url()?>" class="home-link px-sm-5">Leyes</a></div>
				</div>
			</div>
		</header>
		<div class="container" id="principal-container">
			<? $this->load->view($view)?>
		</div>
		<div class="modal" id="myModal" tabindex="-1" role="dialog">
	  		<div class="modal-dialog" role="document">
			</div>
		</div>
	</body>
</html>

<script>
	$(document).ready(function() {
		$(".pop-up").click(function(event) {
			$.post($(this).attr('href'), function(data) {
				$("#myModal .modal-dialog").html(data);
				$('#myModal').modal();
			});
		});
	});
</script>
