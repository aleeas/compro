<!DOCTYPE html>
<html>
	<head>
		<title>ARMS - PT. Alih Risiko Makna Sejahtera Insurance </title>
		<link rel="stylesheet" type="text/css" href="themes/default/assets/css/semantic.css">
		<link rel="stylesheet" type="text/css" href="themes/default/assets/css/flexslider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="themes/default/assets/css/custom.css">
	</head>
	<body>

		<div class=" container-wrapper">
		  	<?php include ("menu-bhs.php")  ?>			

			<div class="content-others">				
				
				<div class="content-inner">
					<div class="content-images">
						<div class="top-content-left"></div>
						<img class="" src="themes/default/assets/images/Menu - HUBUNGI KAMI.jpg" style="object-fit:cover">
					</div>
					<div class="content-descriptions" style="padding-bottom:0;">
						<div class="top-content-right"></div>
						<h3>Kontak Kami</h3>
						<div style="margin-top:10px;">
						<p>Untuk informasi lebih lanjut silahkan menghubungi kami.</p>

						<form action="contact-progress.php" method="post">
						<div class="ui form">
						  <div class="inline fields">
						    <div class="sixteen wide field">
						      <label>Nama</label>
						      <input type="text" placeholder="Nama" name="yourname" style="margin-left:-2px;">
						    </div>
						    </div>
						    <div class="inline fields">
							    <div class="sixteen wide field">
							      <label>Email</label>
							      <input type="text" placeholder="Email" name="email">
							    </div>
						    </div>
						    <div class="inline fields">	
							    <div class="sixteen wide field">
							      <label>Subjek</label>
							      <input type="text" placeholder="Subjek" name="subject" style="margin-left:-5px;">
							    </div>
						    </div>
						    <div class="inline fields">
							    <div class="sixteen wide field">
							      <label>Pesan</label>
							      <textarea name="comments"></textarea>
							    </div>
						    </div>
						    <div style="text-align:right;margin-bottom:20px;margin-right:10px;">
						    	<button class="ui button trigger" type="submit">Submit</button>
						    </div>

						    <div class="inline fields">
							    <div class="sixteen wide field">
							    	<label>Alamat</label>
							    	<address style="font-size:12px;font-style:normal">
							    	PT ALIH RISIKO MAKNA SEJATERA (ARMS) <br>
									Kantor Jakarta : Gedung Yarnati t. 3 R. 309, Jl. Proklamasi No.44, Menteng, Jakarta Pusat - 10320. Telp. (021) 2139 7548 / 75 <br>
									Sales Point - Medan : Rukan Simpang Limun Vista, Blok C No. 4, Jalan Sakti Lubis, Medan. Telp : (061) 7852 799 
							    	</address>
								    
								</div>
							</div>					    
						  </div>
						  </form>
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