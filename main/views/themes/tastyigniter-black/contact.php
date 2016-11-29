<?php echo get_header(); ?>
<?php echo get_partial('content_top'); ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=1&amp;sensor=false&amp;callback=initMap"></script>
<div class="dynamic-content contact-wrapper" id="main-content">
	<section id="contact" class="padding-wrapper">
		<div class="container">
			<div id="map" class="map"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4">
					<div class="row">
						<div class="col-sm-6 col-md-12">
							<div class="info">
								<h1>Info</h1>
								<p>Lorem ipsum nunc gravida ut ornare, id at varius quam. Mattis quis tortor hendrerit, mollis ligula platea rhoncus, himenaeos facilisis. Condimentum et urna sit blandit ultricies, nullam arcu eget proin. </p>
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-5 col-md-12 col-md-offset-0">
							<div class="social-media">
								<h1>Find us on</h1>
								<ul class="social-icon">
									<li>
										<a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="https://google.com"><i class="fa fa-google-plus"></i></a>
									</li>
									<li>
										<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
									</li>
								</ul>
							</div>
						</div>	
					</div>
				</div>
				<div class=" col-sm-6 col-md-4 col-md-offset-1">
					<div class="vcard">
						<h1>Address &amp; Phone</h1>
						<p class="adr">
							<?php echo $location_name; ?>
						</p>
						<p>
							<span class="email">email: <a class="email" href="mailto:<?php echo config_item('site_email'); ?>" title=""><?php echo config_item('site_email'); ?></a></span>
							<span class="tel">mobile: <span><?php echo $location_telephone; ?></span></span>
						</p>
					</div>	
				</div>	
				<div class="col-sm-offset-1 col-sm-5 col-md-3 col-md-offset-0 form">
					<form id="contact-form" name="contact-form" action="<?php echo base_url(); ?>contact" method="post">
						<h1>Contact Form</h1>
						<div class="input-wrapper">
							<input class="contact-form" type="text" placeholder="name" name="form-name" id="form-name">
						</div>
						<div class="input-wrapper">
							<input class="contact-form" type="text" placeholder="e-mail" name="form-email" id="form-email">
						</div>
						<div class="input-wrapper">
							<input class="contact-form" type="text" placeholder="subject" name="form-subject" id="form-subject">
						</div>
						<div class="message">
							<div class="input-wrapper">
								<textarea class="contact-form" placeholder="message" name="form-message" id="form-message"></textarea>
							</div>
						</div>
						<div class="message">
							<div class="input-wrapper">
								<div class="captcha-container">
									<div> 
										<input class="contact-form" type="text" placeholder="captcha" name="form-captcha" id="form-captcha">
										<img id="captcha" src="<?php echo base_url(); ?>main/views/themes/tastyigniter-black/barnelli2/inc/securimage/securimage_show.php" alt="captcha">
										<button class="refresh-captcha" onclick="$('#captcha').attr('src', '<?php echo base_url();; ?>main/views/themes/tastyigniter-black/barnelli2/inc/securimage/securimage_show.php?' + Math.random());"><i class="fa fa-refresh"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="alert alert-success hidden">Your message was sent. Thank you!</div>
						<div>
							<input type="submit" value="Send" class="buttonform">
						</div>	
					</form>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		var markerPosition = new google.maps.LatLng(parseFloat("<?php echo $location_lat; ?>"), parseFloat("<?php echo $location_lng; ?>"));

		var mapOptions = {
			zoom: 12,
			center: markerPosition,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			styles: [{stylers: [{saturation: -100}]}]
		};

		var map = new google.maps.Map(document.getElementById('map'), mapOptions);

		var marker = new google.maps.Marker({
			position: markerPosition,
			title: 'Location',
			map: map,
			icon: { url: 'img/icon1.png', origin: new google.maps.Point(0, 0) },
			draggable: false
		});
	});
</script>
<?php echo get_footer(); ?>
