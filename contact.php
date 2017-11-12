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

			<div class="content-others">

				<div class="ui message" style="position: absolute; top: 60%;  left: 63%; z-index: 10; display:none">
				  <div class="header">
				   Terima Kasih
				  </div>
				  <p>Terimakasih telah menghubungi kami!</p>
				</div>
				
				<div class="content-inner">
					<div class="content-images">
						<div class="top-content-left"></div>
						<img class="" src="themes/default/assets/images/Menu - HUBUNGI KAMI.jpg" style="object-fit:cover">
					</div>
					<div class="content-descriptions">
						<div class="top-content-right"></div>
						<h3>Kontak Kami</h3>
						<div style="margin-top:10px;">
						<p>Untuk informasi lebih lanjut silahkan menghubungi kami.</p>

						<div class="ui form">
						  <div class="inline fields">
						    <div class="sixteen wide field">
						      <label>Nama</label>
						      <input type="text" placeholder="Nama" style="margin-left:-2px;">
						    </div>
						    </div>
						    <div class="inline fields">
							    <div class="sixteen wide field">
							      <label>Email</label>
							      <input type="text" placeholder="Email">
							    </div>
						    </div>
						    <div class="inline fields">	
							    <div class="sixteen wide field">
							      <label>Subjek</label>
							      <input type="text" placeholder="Subjek" style="margin-left:-5px;">
							    </div>
						    </div>
						    <div class="inline fields">
							    <div class="sixteen wide field">
							      <label>Pesan</label>
							      <textarea></textarea>
							    </div>
						    </div>
						    <div style="text-align:right;margin-bottom:20px;">
						    	<button class="ui button trigger" type="submit" onClick="window.location.reload()">Submit</button>
						    </div>

						    <div class="inline fields">
							    <div class="sixteen wide field">
							    	<label>Alamat</label>
							    	<address>
							    	PT ALIH RISIKO MAKNA SEJATERA (ARMS) <br>
									Gedung Yarnati t. 3 R. 309 <br>
									Jl. Proklamasi No.44, Jakarta Pusat - 10320 <br>
									Telp. (021) 2139 7548 / 75
							    	</address>
							    	<span style="position:relative;left:35px;"><img src="themes/default/assets/images/phone.png"></span>
								    
								</div>
							</div>
						    
						    
						    							    
						  </div>
						</div>
						</div>
					</div>
					<div class="ui grid" style="width:955px">
						<div class="seven wide column" style="padding-top:0;"><div class="top-content-right-footer" style="width:100%"></div></div>
						<div class="nine wide column" style="padding-top:0;"><div class="top-content-left-footer" style="width:100%"></div>	</div>
					</div>
					<div class="clearfix"></div>

					<div class="divider-content"></div>
				</div>

	        <?php include ("footer.php")  ?>
		</div>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	    crossorigin="anonymous"></script>
        <script src="themes/default/assets/js/semantic.js"></script>
        <script src="themes/default/assets/js/search.js"></script>

        <script type="text/javascript">
     //    	$('.message').on('click', function() {
			  //   $(this).show();
			  // });

        	$(".trigger").click(function(){
			    $(".message").show();
			    reload();
			});
        </script>
        
	</body>
</html>