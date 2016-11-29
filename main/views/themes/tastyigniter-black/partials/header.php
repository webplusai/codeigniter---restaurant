<?php

	$pages = $this->Pages_model->getPages();

	$body_class = '';
	if ($this->uri->rsegment(1) === 'menus') {
		$body_class = 'menus-page';
	}
?>
<?php echo get_doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
        <?php echo get_metas(); ?>
        <?php if ($favicon = get_theme_options('favicon')) { ?>
            <link href="<?php echo image_url($favicon); ?>" rel="shortcut icon" type="image/ico">
        <?php } else { ?>
            <?php echo get_favicon(); ?>
        <?php } ?>
        <title><?php echo sprintf(lang('site_title'), get_title(), config_item('site_name')); ?></title>
        <?php echo get_style_tags(); ?>
        <?php echo get_active_styles(); ?>
        <?php echo get_script_tags(); ?>
        <?php echo get_theme_options('ga_tracking_code'); ?>
		<script type="text/javascript">
			var alert_close = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';

			var js_site_url = function(str) {
				var strTmp = "<?php echo rtrim(site_url(), '/').'/'; ?>" + str;
			 	return strTmp;
			};

			var js_base_url = function(str) {
				var strTmp = "<?php echo base_url(); ?>" + str;
				return strTmp;
			};

            var pageHeight = $(window).height();

			$(document).ready(function() {
				if ($('#notification > p').length > 0) {
					setTimeout(function() {
						$('#notification > p').slideUp(function() {
							$('#notification').empty();
						});
					}, 3000);
				}

				$('.alert').alert();
				$('.dropdown-toggle').dropdown();
                $('a[title], i[title]').tooltip({placement: 'bottom'});
                $('select.form-control').select2();
			});
		</script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
        <?php $custom_script = get_theme_options('custom_script'); ?>
        <?php if (!empty($custom_script['head'])) { echo '<script type="text/javascript">'.$custom_script['head'].'</script>'; }; ?>
	</head>
	<body class="<?php echo $body_class; ?>">
		<div id="opaclayer" onclick="closeReviewBox();"></div>

		<div class="social-share top">
			<ul>
				<li>
					<a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
				</li>
				<li>
					<a href="https://google.com"><i class="fa fa-google-plus"></i></a>
				</li>
				<li>
					<a href="https://pinterest.com"><i class="fa fa-pinterest"></i></a>
				</li>
				<li>
					<a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
				</li>
			</ul>
		</div>

		<div class="navbar hidden-xs">
			<div class="container">
				<div class="row">
					<nav class="col-md-12 clearfix">
						<ul class="main-nav white-nav dotted-separator">
							<li>
								<div>
									<a href="<?php echo site_url('restaurant'); ?>" class="content-link restaurant-wrapper"><span>Restaurant</span> <img src="<?php echo base_url(); ?>main/views/themes/tastyigniter-black/barnelli2/img/icon1.png" alt=""/></a>
								</div>
							</li>
							<li>
								<div>
									<a href="<?php echo site_url('local?location_id=1'); ?>" class="content-link menu-wrapper menu-item-has-children"><span>Menu</span> <img src="<?php echo base_url(); ?>main/views/themes/tastyigniter-black/barnelli2/img/icon2.png" alt=""/></a>
									<!-- <ul class="subnav">
										<li><a href="<?php echo site_url('menu'); ?>" title=""><span>menu 1</span></a></li>
										<li><a href="<?php echo site_url('menu2'); ?>" title=""><span>menu 2</span></a></li>
										<li><a href="<?php echo site_url('menu3'); ?>" title=""><span>menu 3</span></a></li>
									</ul> -->
								</div>
							</li>
							<li class="menu-image">
								<div>
									<a class="content-link" title="logo" href="<?php echo site_url(); ?>index.php"><img src="<?php echo base_url(); ?>main/views/themes/tastyigniter-black/barnelli2/img/logo.png" alt=""></a>
								</div>
							</li>

							<?php if ($this->customer->isLogged()) { ?>
								<li class="dropdown">
									<a class="dropdown-toggle clickable" data-toggle="dropdown" id="dropdownLabel1"><?php echo lang('menu_my_account'); ?> <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownLabel1">
                                        <li><a role="presentation" href="<?php echo site_url('account/orders'); ?>"><?php echo lang('menu_recent_order'); ?></a></li>
                                        <li><a role="presentation" href="<?php echo site_url('account/account'); ?>"><?php echo lang('menu_my_account'); ?></a></li>
                                        <li><a role="presentation" href="<?php echo site_url('account/address'); ?>"><?php echo lang('menu_address'); ?></a></li>

										<?php if ($this->config->item('reservation_mode') === '1') { ?>
											<li><a role="presentation" href="<?php echo site_url('account/reservations'); ?>"><?php echo lang('menu_recent_reservation'); ?></a></li>
										<?php } ?>

										<li><a role="presentation" href="<?php echo site_url('account/logout'); ?>" ><?php echo lang('menu_logout'); ?></a></li>
									</ul>
								</li>
							<?php } else { ?>
								<li>
									<div>
										<a class="content-link account-wrapper" href="<?php echo site_url('account/login'); ?>"><span><?php echo lang('menu_login'); ?></span><img src="<?php echo base_url(); ?>main/views/themes/tastyigniter-black/barnelli2/img/icon3.png" alt=""/></a> |
										<a class="content-link account-wrapper" href="<?php echo site_url('account/register'); ?>"><span><?php echo lang('menu_register'); ?></span><img src="<?php echo base_url(); ?>main/views/themes/tastyigniter-black/barnelli2/img/icon3.png" alt=""/></a>
									</div>
								</li>
							<?php } ?>
							<li>
								<div>
									<a href="<?php echo site_url('contact'); ?>" class="content-link contact-wrapper"><span>Contact </span><img src="<?php echo base_url(); ?>main/views/themes/tastyigniter-black/barnelli2/img/icon4.png" alt=""/></a>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


        <!--[if lt IE 7]>
            <p class="chromeframe"><?php echo lang('alert_info_outdated_browser'); ?></p>
        <![endif]-->

		<!-- <header id="main-header">
			<div class="container">
                <div class="row">
                    <div class="col-sm-5">
						<button type="button" class="btn-navbar navbar-toggle" data-toggle="collapse" data-target="#main-header-menu-collapse">
							<i class="fa fa-align-justify"></i>
						</button>
                        <div class="logo">
                            <a class="" href="<?php echo rtrim(site_url(), '/').'/'; ?>">
								<?php if (get_theme_options('logo_image')) { ?>
									<img alt="<?php echo $this->config->item('site_name'); ?>" src="<?php echo image_url(get_theme_options('logo_image')) ?>" height="40">
								<?php } else if (get_theme_options('logo_text')) { ?>
									<?php echo get_theme_options('logo_text'); ?>
								<?php } else if ($this->config->item('site_logo') === 'data/no_photo.png') { ?>
									<?php echo $this->config->item('site_name'); ?>
								<?php } else { ?>
									<img alt="<?php echo $this->config->item('site_name'); ?>" src="<?php echo image_url($this->config->item('site_logo')) ?>" height="40">
								<?php } ?>
							</a>
						</div>
					</div>
                    <div class="col-sm-7">
						<div class="collapse navbar-collapse" id="main-header-menu-collapse">
							<ul class="nav navbar-nav navbar-right">
								<?php if ($this->config->item('reservation_mode') === '1') { ?>
									<li><a href="<?php echo site_url('reservation'); ?>"><?php echo lang('menu_reservation'); ?></a></li>
								<?php } ?>

								<?php if ($this->customer->isLogged()) { ?>
									<li class="dropdown"><a class="dropdown-toggle clickable" data-toggle="dropdown" id="dropdownLabel1"><?php echo lang('menu_my_account'); ?> <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownLabel1">
                                            <li><a role="presentation" href="<?php echo site_url('account/orders'); ?>"><?php echo lang('menu_recent_order'); ?></a></li>
                                            <li><a role="presentation" href="<?php echo site_url('account/account'); ?>"><?php echo lang('menu_my_account'); ?></a></li>
                                            <li><a role="presentation" href="<?php echo site_url('account/address'); ?>"><?php echo lang('menu_address'); ?></a></li>

											<?php if ($this->config->item('reservation_mode') === '1') { ?>
												<li><a role="presentation" href="<?php echo site_url('account/reservations'); ?>"><?php echo lang('menu_recent_reservation'); ?></a></li>
											<?php } ?>

											<li><a role="presentation" href="<?php echo site_url('account/logout'); ?>" ><?php echo lang('menu_logout'); ?></a></li>
										</ul>
									</li>
								<?php } else { ?>
									<li><a href="<?php echo site_url('account/login'); ?>"><?php echo lang('menu_login'); ?></a></li>
									<li><a href="<?php echo site_url('account/register'); ?>"><?php echo lang('menu_register'); ?></a></li>
								<?php } ?>

								<?php if (!empty($pages)) { ?>
									<?php foreach ($pages as $page) { ?>
										<?php if (is_array($page['navigation']) AND in_array('header', $page['navigation'])) { ?>
											<li><a href="<?php echo site_url('pages?page_id='.$page['page_id']); ?>"><?php echo $page['name']; ?></a></li>
										<?php } ?>
									<?php } ?>
								<?php } ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</header> -->

		<div id="page-wrapper" class="content-area">
			<div id="content-wrapper">
			<?php if (get_theme_options('display_crumbs') === '1' AND ($breadcrumbs = get_breadcrumbs()) !== '') { ?>
	            <div id="breadcrumb">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-xs-12">
                                <?php echo $breadcrumbs; ?>
	                        </div>
	                    </div>
	                </div>
	            </div>
			<?php } ?>

            <?php if (($page_heading = get_heading()) !== '') { ?>
	            <div id="heading">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-xs-12">
	                            <div class="heading-content">
	                                <h2><?php echo $page_heading; ?></h2>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
			<?php } ?>