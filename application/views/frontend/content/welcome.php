<?php
$assets_location = base_url()."assets/bootstrap/";
$file_location = base_url()."assets/file/";
?>

<!DOCTYPE html>
<html>

<!-- welcome --> 
	<div id="about" class="welcome"> 
		<div class="container">
			<div class="agile-title">
				<h3> Welcome !</h3>
			</div>
			<div class="w3ls-row">
				<div class="col-md-6 welcome-left">
					<div class="welcome-img">
						<img src="<?php echo $file_location;?>images/img1.jpg" class="img-responsive zoom-img" alt=""/>
					</div>
					<div class="col-md-6 welcome-left-grids">
						<div class="welcome-img">
							<img src="<?php echo $file_location;?>images/img2.jpg" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="col-md-6 welcome-left-grids">
						<div class="welcome-img">
							<img src="<?php echo $file_location;?>images/img3.jpg" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 welcome-right"> 
					<p><?php
                    	foreach($data as $row){
                        	echo $row['isi_about'];
                            } ?></p>
                    <p>Hello! Minor Project is an Ethnic Warehouse domiciled in Rumbai, Riau, Pekanbaru Indonesia. We sell all ethnic handmade clothes and accessories from Indonesia. Certainly original 100% and very excited to wear as the latest fashion.</p>
					<br>
					<h3><center>We Proud Using Indonesian Products!</center></h3>
					<br>
					<h3><center> 100 % ORIGINAL </center></h3>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<!-- //welcome --> 