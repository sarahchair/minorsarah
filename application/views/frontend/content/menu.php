<?php
$assets_location = base_url()."assets/bootstrap/";
$file_location = base_url()."assets/file/";
?>

<!DOCTYPE html>
<html>

	<!-- menu -->
	<div id="menu" class="menu">  
		<div class="container">
			<div class="agile-title">
				<h3> Our Specials</h3>
			</div>
			<ul class="accordion"> 
				<?php
            	foreach ($datakatalog as $row) { echo'
            		<li class="slide-01">
						<div class="menu-left">
							<img src="' . $row ['path'] .'" alt=""/>
								<div class="menu-right">
								<h4>' . $row['nama_katalog'] . '</h4>
								<h5>' . $row['harga_katalog'] .'</h5>
								<p>' . $row['deskripsi_katalog'] .'</p> 
							</div>
						</div>  
					</li> 
				'; } ?>

<!-- ini cari model nya di model katalog -->


	<!--			<li class="slide-01">
					<div class="menu-left">
						<img src="<?php echo $file_location;?>images/m1.jpg" alt=""/>
						<div class="menu-right">
							<h4>Blandit sed </h4>
							<h5>$20 </h5>
							<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
						</div>
					</div>  
				</li> 
				<li class="slide-02">
					<div class="menu-left">
						<img src="<?php echo $file_location;?>images/m2.jpg" alt=""/>
						<div class="menu-right">
							<h4>Faucibus </h4>
							<h5>$15 </h5>
							<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
						</div>
					</div>  
				</li> 
				<li class="slide-03">
					<div class="menu-left">
						<img src="<?php echo $file_location;?>images/m3.jpg" alt=""/>
						<div class="menu-right">
							<h4>Vulputate </h4>
							<h5>$50 </h5>
							<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
						</div>
					</div>
				</li> 
				<li class="slide-04">
					<div class="menu-left">
						<img src="<?php echo $file_location;?>images/m4.jpg" alt=""/>
						<div class="menu-right">
							<h4>Fusce sed </h4>
							<h5>$60 </h5>
							<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
						</div>
					</div>
				</li> 
				<li class="slide-05">
					<div class="menu-left">
						<img src="<?php echo $file_location;?>images/m5.jpg" alt=""/>
						<div class="menu-right">
							<h4>Imperdiet ero</h4>
							<h5>$36 </h5>
							<p>Fusce sed vulputate dui, non consectetur felis In malesuada accumsan felis, a imperdiet arcu blandit sed ut id faucibus. </p>
						</div>
					</div>
				</li> -->
			</ul>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //menu -->