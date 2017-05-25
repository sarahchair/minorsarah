<?php
$assets_location = base_url()."assets/bootstrap/";
$file_location = base_url()."assets/file/";
?>

<!DOCTYPE html>
<html>

	<!-- gallery -->
	<div id="gallery" class="gallery">
		<div class="container">
			<div class="agile-title">
				<h3> Our Gallery</h3>
			</div>
				<?php
            	foreach ($datagallery as $row) { echo'
					<div class="gallery-agileinfo-row" >
            			<div class="col-md-4 gallery-grids-mdl gallery-grids">
							<div class="hover ehover14">

                				<a href="'. $row['path'] .'" class="swipebox" title="'. $row['isi_gallery'] .'">
                				<img src="'. $row['path'] .'" alt ="" class="img-responsive" />
                				<div class="overlay">
                				<h4>'. $row['judul_gallery'] .'</h4>
                				<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                			</div>
                		</a>
                		</div>
                	</div>
         </div>   
                '; } ?>

<!--				<div class="col-md-4 gallery-grids">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
							<img src="<?php echo $file_location;?>images/g2.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>

				<div class="col-md-4 gallery-grids">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
							<img src="<?php echo $file_location;?>images/g2.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 gallery-grids">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="<?php echo $file_location;?>images/g3.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 gallery-grids gallery-grids-mdl">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g4.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. ">
							<img src="<?php echo $file_location;?>images/g4.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 gallery-grids gallery-grids-mdl">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g5.jpg" class="swipebox" title="Consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="<?php echo $file_location;?>images/g5.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 gallery-grids gallery-grids-mdl">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="<?php echo $file_location;?>images/g6.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 gallery-grids">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g3.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
							<img src="<?php echo $file_location;?>images/g7.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 gallery-grids">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g4.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
							<img src="<?php echo $file_location;?>images/g8.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 gallery-grids">
					<div class="hover ehover14">
						<a href="<?php echo $file_location;?>images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="<?php echo $file_location;?>images/g9.jpg" alt="" class="img-responsive" />
							<div class="overlay">
								<h4>gallery</h4>
								<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
							</div>
						</a>	
					</div>
				</div>-->


				
   				<div class="clearfix"> </div> 
		</div>
	</div>

	<!-- //gallery -->