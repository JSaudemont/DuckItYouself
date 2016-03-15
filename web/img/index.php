<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Duck it yourself</title>
		<meta name="description" content="">
		<!-- Favicon -->
   
		<!-- CSS Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Fonts  -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- CSS principaux -->
		<link rel="stylesheet" href="css/menu.css">
	</head>
	
	<body>
		<section id="main-wrapper" class="back sidebar-mini">
			
			<?php
				include'nav_header.php';
				include'content.php';
			?>
						
			<div id="search">
				<button type="button" class="close">×</button>
				<form>
					<input type="search" value="" placeholder="Recherche" />
					<button type="submit" class="btn btn-primary">Recherche</button>
				</form>
			</div>
		</section>
		
		<!-- JS -->
		<script src="js/jquery-1.11.1.min.js"></script>
			<!-- Bootstrap -->
			<script src="js/bootstrap.min.js"></script>
			<!-- Menu -->
			<script src="js/jquery.navgoco.min.js"></script>
			<script src="js/app.js"></script>
			<!-- APERCU DU COURS -->
			<script>
				$(function(){
					$('#apercu').click(function(){
						$('.after_click').css('display','block')
						$('.before_click').css('display','none')
						$('.before_click').css('height','100%')
					});
					$('#retour_apercu').click(function(){
						$('.after_click').css('display','none')
						$('.before_click').css('display','block')
					});
				});
			</script>
	</body>
</html>