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
				<div class="top-content"></div>
				<div class="content-inner">
					<div class="content-images">
						<img class="" src="themes/default/assets/images/wireframe-img.png" style="object-fit:cover">
					</div>
					<div class="content-descriptions">
						<h3>Pelayanan</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. <br><br>
						The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="top-content" style="margin-top:-64px;"></div>
			</div>

	        <footer>
	        	<div class="footer-content">
	        		<img src="themes/default/assets/images/you logo here.png" height="60">
	        		<div class="center-content">"We make your insurance needs to be Efficient, Effective and Reliable"</div>
	        		<ul class="list-corporate">
	        			<li><a href="#!"><img src="themes/default/assets/images/OJK_Logo.png" height="40"></a></li>
	        			<li><a href="#!"><img src="themes/default/assets/images/mari-berasuransi.png" height="40"></a></li>
	        			<li><a href="#!"><img src="themes/default/assets/images/aparindo logo.jpg" height="40"></a></li>
	        		</ul>
	        	</div>
	        	<div class="copyright-text">
	        		&copy; Copyright 2017 ARMS Insurance, All Right Reserved
	        	</div>
	        </footer>
		</div>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	    crossorigin="anonymous"></script>
        <script src="themes/default/assets/js/semantic.js"></script>
        <script type="text/javascript">
		    
		    $( document ).ready(function() {
		      var content = [
					{
					title: 'Broker',
					description: 'Kenapa Broker',
					url: 'benefit.html'
					},
					{
					title: 'Home',
					description: 'Home Page',
					url: 'index.html'
					}
				];

				$('.ui.search')
				.search({
					source : content,
					searchFields   : [
					'title'
					],
					searchFullText: false
				});		     
		    });
		  </script>
        
	</body>
</html>