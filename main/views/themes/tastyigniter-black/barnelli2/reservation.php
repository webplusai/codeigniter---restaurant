<div class="dynamic-content reservation-wrapper" id="main-content">
	<div class="container">
		<div class="row reservation  padding-wrapper">
			<div class="hidden-xs col-md-7">
				<div id="slider-res" class="owl-carousel owl-theme">
					<figure class="item">
						<img src="http://placehold.it/680x596" alt=""/>
					</figure>
					<figure class="item">
						<img src="http://placehold.it/680x596" alt=""/>
					</figure>
					<figure class="item">
						<img src="http://placehold.it/680x596" alt=""/>
					</figure>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="info-reservation">
					<h1>Reservation</h1>
					<p>
						Lorem ipsum nunc gravida ut ornare, id at varius quam. Mattis quis tortor hendrerit, mollis ligula platea rhoncus, himenaeos facilisis. Condimentum et urna sit blandit ultricies, nullam arcu eget proin. 
					</p>
					<h1>Date</h1>
					<div class="select-date">
						<?php
						$currentDay = date('d');
						?>
						<div class="select-time day"><span><?php echo $currentDay; ?></span>
							<select id="select-day">
								<?php
								$num = date('t', mktime(0, 0, 0, date('n'), 1, date('Y')));
								for ($i = 1; $i <= $num; $i++) {
									$selected = ($i == $currentDay) ? 'selected="selected"' : '';
									echo '<option ' . $selected . ' value="' . $i . '">' . $i . '</option>' . "\n";
								}
								?>
							</select>
						</div> 
						<?php
						$currentMonth = date('n');

						$months = array('january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december');
						?>
						<div class="select-time month"><span><?php echo date('F'); ?></span>
							<select id="select-month">
								<?php
								$ct = count($months);
								for ($i = 0; $i < $ct; $i++) {
									$j = $i + 1;
									$selected = ($j == $currentMonth) ? 'selected="selected"' : '';
									echo '<option ' . $selected . ' value="' . $j . '">' . $months[$i] . '</option>' . "\n";
								}
								?>
							</select>
						</div>
						<?php
						$currentYear = date('Y');
						?>
						<div class="select-time year"><span><?php echo $currentYear; ?></span>
							<select id="select-year">
								<option value="2014" selected="selected">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
							</select>
						</div><div class="clearfix visible-xs"></div>
						<div class="select-time hour"><span>--</span>
							<select id="select-hour">
								<option selected="selected" value="--">--</option>
								<option value="00">00</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
							</select>

						</div>
						<div class="select-time minutes"><span>--</span>
							<select id="select-minutes">
								<option selected="selected" value="--">--</option>
								<option value="00">00</option>
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="40">40</option>
								<option value="50">50</option>
							</select>

						</div> 
						<div class="select-time part">pm</div>
					</div>
					<h1>Reservation details</h1>
					<section class="form">
						<form id="reservation-form" name="reservation-form" action="?" method="post">
							<input type="hidden" name="day" id="day" value="<?php echo date('d'); ?>" />
							<input type="hidden" name="month" id="month" value="<?php echo date('m'); ?>" />
							<input type="hidden" name="year" id="year" value="<?php echo date('Y'); ?>" />
							<input type="hidden" name="hour" id="hour" value="--" />
							<input type="hidden" name="minute" id="minute" value="--" />
							<input type="hidden" name="ampm" id="ampm" value="pm" />

							<div class="input-wrapper name">
								<input class="contact-form" type="text" placeholder="name" name="form-name" id="form-name">
							</div>
							<div class="input-wrapper email">
								<input class="contact-form" type="text" placeholder="e-mail" name="form-email" id="form-email">
							</div>
							<div class="input-wrapper phone">
								<input class="contact-form" type="text" placeholder="phone" name="form-phone" id="form-phone">
							</div>
							<div class="input-wrapper amount">
								<input class="contact-form" type="text" placeholder="people amount" name="form-amount" id="form-amount">
							</div>
							<div class="input-wrapper message">
								<textarea class="contact-form" placeholder="message" name="form-message" id="form-message"></textarea>
							</div>


							<div class="input-wrapper">
								<div class="captcha-container">
									<div> 
										<input class="contact-form" type="text" placeholder="captcha" name="form-captcha" id="form-captcha">
										<img id="captcha" src="inc/securimage/securimage_show.php" alt="captcha">
										<button class="refresh-captcha"><i class="fa fa-refresh"></i></button>
									</div>
								</div>
							</div>							
							<div class="alert alert-success hidden">Reservation message was sent. Thank you!</div>
							<div class="input-wrapper submit">
								<input id="reservation-submit" type="submit" value="Confirm" class="buttonform">
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>