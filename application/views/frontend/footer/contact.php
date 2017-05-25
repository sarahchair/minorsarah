<?php
$assets_location = base_url()."assets/bootstrap/";
$file_location = base_url()."assets/file/";
?>

	<!-- contact -->
	<div class="contact">
		<div class="col-md-6 contact-left">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127666.7803507617!2d101.32154128611013!3d0.6171306389283566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d454e326235f79%3A0xa4b47ec6b782a5c8!2sRumbai%2C+Pekanbaru+City%2C+Riau%2C+Indonesia!5e0!3m2!1sen!2s!4v1494425456108" allowfullscreen=""></iframe>

		</div>
		<div class="col-md-6 contact-right">
			<div class="wthree-contact-row">
				<h4>Get In Touch</h4> 
				<form name"sent_message" action="<?php echo base_url();?>index.php/admin/pesan/insert" method="post" id="contactForm" novalidate>
					<input type="text" name="nama" id="nama" placeholder="Name" required data-validation-required-message="Please enter your name.">
					<input class="email" type="text" name="email" id="email" placeholder="Email" required data-validation-required-message="Please enter your email.">
					<textarea placeholder="Message" name="pesan" id="pesan" required data-validation-required-message="Please enter your message."></textarea>
					<input type="submit" value="SUBMIT">
				</form>  
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //contact -->