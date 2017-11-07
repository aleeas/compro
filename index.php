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

			<div class="flexslider">
	          <ul class="slides">
	            <li>
	  	    	    <img src="themes/default/assets/images/wireframe-img.png" />
	              	<div class="flex-caption">
	              		<div id="logo-caption"><img src="themes/default/assets/images/Logo ARMS-01.png"></div>
	              		<h3>Fire Property Insurance</h3>
	              		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	              		tempor incididunt ut labore et dolore magna aliqua.  Excepteur sint occaecat cupidatat non
	              		proident, sunt in culpa.</p>
	              	</div>
	  	    		</li>
	  	    		<li>
	  	    	    <img src="themes/default/assets/images/wireframe-img.png" />
	              	<div class="flex-caption">
	              		<div id="logo-caption"><img src="themes/default/assets/images/Logo ARMS-01.png"></div>
	              		<h3>Vehicle Insurance</h3>
	              		<p>Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	              		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	              		cillum.</p>
	              	</div>
	  	    		</li>
	  	    		<li>
	  	    	    <img src="themes/default/assets/images/wireframe-img.png" />
	              	<div class="flex-caption">
	              		<div id="logo-caption"><img src="themes/default/assets/images/Logo ARMS-01.png"></div>
	              	 	<h3>Inklusi Keuangan</h3>
	              	 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	              		tempor incididunt ut labore et dolore magna aliqua.  Excepteur sint occaecat cupidatat non
	              		proident, sunt in culpa.</p>
	              	</div>
	  	    		</li>
	  	    		<li>
	  	    	    <img src="themes/default/assets/images/wireframe-img.png" />
	              	<div class="flex-caption">
	              		<div id="logo-caption"><img src="themes/default/assets/images/Logo ARMS-01.png"></div>
	              		<h3>Cargo Insurance</h3>
	              		<p>Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	              		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	              		cillum.</p>
	              	</div>
	  	    		</li>
	          </ul>
	        </div>

	        <div class="divider-content"></div>


		    <div class="flexslider-card carousel">
	          <ul class="slides">
	            	<li>
	            		<div class="carousel-card">
		            		<img src="themes/default/assets/images/wireframe-img.png" style="width:104px;height:104px;" alt="http://mpm-insurance.com/0_repository/images/61_1small-liability.png">
		            		<div class="carousel-card-content">
		            			<h4>Liability Insurance</h4>
		            			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            			tempor incididunt ut labore et dolore magna aliqua.</p>
		            			<div class="right-align"><a href="liability-insurance.php" class="read-more">Selengkapnya</a></div>
		            			
		            		</div>
	            		</div>
	            	</li>

	            	<li>
	            		<div class="carousel-card">
		            		<img src="themes/default/assets/images/wireframe-img.png" style="width:104px;height:104px;" alt="http://mpm-insurance.com/0_repository/images/62_1heavy-equipment2.jpg">
		            		<div class="carousel-card-content">
		            			<h4>Heavy Equipment Insurance</h4>
		            			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            			tempor incididunt ut labore et dolore magna aliqua.</p>
		            			<div class="right-align"><a href="#!" class="read-more">Selengkapnya</a></div>
		            			
		            		</div>
	            		</div>
	            	</li>


	            	<li>
	            		<div class="carousel-card">
		            		<img src="themes/default/assets/images/wireframe-img.png" style="width:104px;height:104px;" alt="http://mpm-insurance.com/0_repository/images/63_1small-alatberat.png">
		            		<div class="carousel-card-content">
		            			<h4>Engineering Insurance</h4>
		            			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            			tempor incididunt ut labore et dolore magna aliqua.</p>
		            			<div class="right-align"><a href="#!" class="read-more">Selengkapnya</a></div>
		            			
		            		</div>
	            		</div>
	            	</li>

	            	<li>
	            		<div class="carousel-card">
		            		<img src="themes/default/assets/images/wireframe-img.png" style="width:104px;height:104px;" alt="http://mpm-insurance.com/0_repository/images/59_1small_cash.png">
		            		<div class="carousel-card-content">
		            			<h4>Cash Insurance</h4>
		            			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            			tempor incididunt ut labore et dolore magna aliqua.</p>
		            			<div class="right-align"><a href="#!" class="read-more">Selengkapnya</a></div>
		            			
		            		</div>
	            		</div>
	            	</li>
	          </ul>
	        </div>

	        <div class="divider-content"></div>

	        <?php include ("footer.php")  ?>

		</div>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="themes/default/assets/js/semantic.js"></script>
        <script defer src="themes/default/assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
		    
		    $( document ).ready(function() {		      

		      $('.flexslider').flexslider({
		        animation: "slide",
		        start: function(slider){
		          $('body').removeClass('loading');
		        }
		      });

		      $('.flexslider-card').flexslider({
		        animation: "slide",
		        animationLoop:true,
		        itemWidth: 210,
		        itemMargin: 5,
		        minItems: 3,
		        maxItems: 3,
		        start: function(slider){
		          $('body').removeClass('loading');
		        }
		      });
		    });
		  </script>
		<script src="themes/default/assets/js/search.js"></script>
		<script src="themes/default/assets/js/jquery.easing.js"></script>
  		<script src="themes/default/assets/js/jquery.mousewheel.js"></script>
	</body>
</html>