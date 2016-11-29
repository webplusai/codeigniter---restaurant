<?php echo get_header(); ?>
<div class="dynamic-content restaurant-wrapper" id="main-content">
	<div class="container">
		<div id="restaurant" class="padding-wrapper">
			<div class="row">
				<div class="col-md-6">
					<div class="square square-big">
						<i class="fa fa-pencil-square-o "></i>
						<a href="<?php echo site_url('pages?page_id=11'); ?>">
							<div class="square-bg" style="background-image:url(<?php echo site_url('assets/images/data/about_us.jpg'); ?>)"></div>
							<div class="square-header">
								<p class="title">About us</p>
								<!-- <p class="description">latest <strong>blog post</strong></p> -->
							</div>
							<div class="square-post">
								<p class="title">Lorem ipsum dolor sit amet</p>
								<p class="description">Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit ametadipiscing elit. Integer sapien odio, consectetur ac porta vitae, fringilla at justo. Nulla id nisl turpis. Quisque rutrum, sem a auctor feugiat, justo purus euismod ligula, quis mollis diam ligula in justo... <strong>read more</strong></p>
							</div>
						</a>
					</div>
					<div class="row">
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="square">
								<div class="square-bg" style="background-image:url(<?php echo site_url('assets/images/data/opening.jpg'); ?>)"></div>
								<i class="fa fa-clock-o"></i>
								<div class="square-header">
									<p class="title">Friday</p>
									<p class="description">we are <strong>open</strong></p>				
								</div>					
								<div class="square-post">
									<ul class="days">
										<li><span>Mo.</span> <strong>closed</strong></li>
										<li><span>Tu.</span> <strong>1:00pm - 11:00pm</strong></li>
										<li><span>We.</span> <strong>1:00pm - 11:00pm</strong></li>
										<li><span>Th.</span> <strong>1:00pm - 11:00pm</strong></li>
										<li><span>Fr.</span> <strong>2:00pm - 1:00am</strong></li>
										<li><span>Sa.</span> <strong>2:00pm - 1:00am</strong></li>
										<li><span>Su.</span> <strong>1:00pm - 11:00pm</strong></li>
									</ul>
								</div>							
							</div>
						</div>

						<div class="col-md-6">
							<div class="square">
								<i class="fa fa-globe "></i>
								<a href="<?php echo site_url('contact'); ?>">
									<div class="square-bg" style="background-image:url(<?php echo site_url('assets/images/data/contact_us.jpg'); ?>)"></div>
									<div class="square-header">
										<p class="title">Contact</p>
										<p class="description">with <strong>us</strong></p>
									</div>
									<div class="square-post">
										<p class="title">Go to<br/> <strong>contact <i class="fa fa-arrow-circle-o-right"></i></strong></p>
									</div>
								</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
