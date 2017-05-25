<?php
$assets_location = base_url()."assets/bootstrap/";
$file_location = base_url()."assets/file/";
?>


	<div class="footer">
		<div class="container">
			<div class="social-icon">
				<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
				<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
				<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
				<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
				<a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
			</div>
			<p><a href="<?php echo site_url(); echo 'index.php/admin/dashboard';?>">© 2017 MinorProject.</p>
			<p>All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->	 





	<!-- swipe box js -->
	<script src="<?php echo $assets_location;?>js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js --> 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $assets_location;?>js/bootstrap.js"></script>
</body>
</html>