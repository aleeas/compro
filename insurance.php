<!DOCTYPE html>
<html>
	<head>
		<title>Demo Web</title>
		<link rel="stylesheet" type="text/css" href="themes/default/assets/css/semantic.css">
		<link rel="stylesheet" type="text/css" href="themes/default/assets/css/flexslider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="themes/default/assets/css/custom.css">
	</head>
	<body>

		<div class=" container-wrapper">
		 <?php include ("menu-bhs.php")  ?>

			<div class="ui container segment">
			<?php include ("submenu-bhs-partner.php")  ?>
			</div>			

			<div class="content-others">
				<div class="top-content"></div>
				<div class="content-inner">
					<div class="content-images">
						<img class="" src="themes/default/assets/images/wireframe-img.png" style="object-fit:cover">
					</div>
					<div class="content-descriptions">
						<h3>Rekanan Asuransi</h3>						

						<h4>Rekanan Perusahaan Asuransi Lokal</h4>

						<div><img src="themes/default/assets/images/client.jpg" width="100%"></div>

						<h4>Rekanan Perusahaan Asuransi Joint Venture</h4>

						<div><img src="themes/default/assets/images/venture.jpg" width="100%"></div>
						
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="top-content" style="margin-top:-64px;"></div>
			</div>

	        <?php include ("footer.php")  ?>
		</div>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="themes/default/assets/js/semantic.js"></script>
        <script src="themes/default/assets/js/search.js"></script>
        
	</body>
</html>