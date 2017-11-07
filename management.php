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
			<?php include ("submenu-bhs.php")  ?>
			</div>			

			<div class="content-others">
				<div class="top-content"></div>
				<div class="content-inner">
					<div class="content-images">
						<img class="" src="themes/default/assets/images/wireframe-img.png" style="object-fit:cover">
					</div>
					<div class="content-descriptions">
						<h3>Manajemen Kami</h3>
						
						<div class="ui list">
						  <h4>Dewan Komisaris</h4>
						  <div class="item">
						    <span class="title-heading">Komisaris Utama</span>
						    <div class="content">
						      <p>Ronald Pardede, SE, AAAIJ</p>
						    </div>
						  </div>
						  <div class="item">
						    <span class="title-heading"> Komisaris</span>
						    <div class="content">
						    <p> Edy Darwan Saragih</p>
						    </div>
						  </div>

						  <h4>Dewan Direksi</h4>
						  <div class="item">
						    <span class="title-heading">Direktur </span>
						    <div class="content">
						      <p>Robert B. Manurung, SH, MH</p>
						    </div>
						  </div>
						  <div class="item">
						    <span class="title-heading">Direktur</span>
						    <div class="content">
						      <p>Stefanus Kaparang, ST </p>
						    </div>
						  </div>

						  

						</div>
						 
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