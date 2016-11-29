<?php
    $this->template->setDocType('html5');
    $this->template->setMeta(array('name' => 'X-UA-Compatible', 'content' => 'IE=edge', 'type' => 'equiv'));
    $this->template->setMeta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no', 'type' => 'name'));
    $this->template->setFavIcon('favicon.ico');

    $this->template->setStyleTag(Array( 'href' => 'pages/ico/60.png', 'rel' => 'apple-touch-icon'));
    $this->template->setStyleTag(Array( 'href' => 'pages/ico/76.png', 'rel' => 'apple-touch-icon', 'sizes' => '76x76'));
    $this->template->setStyleTag(Array( 'href' => 'pages/ico/120.png', 'rel' => 'apple-touch-icon', 'sizes' => '120x120'));
    $this->template->setStyleTag(Array( 'href' => 'pages/ico/152.png', 'rel' => 'apple-touch-icon', 'sizes' => '152x152'));

    $this->template->setMeta(array('name' => 'apple-mobile-web-app-capable', 'content' => 'yes'));
    $this->template->setMeta(array('name' => 'apple-touch-fullscreen', 'content' => 'yes'));
    $this->template->setMeta(array('name' => 'apple-mobile-web-app-status-bar-style', 'content' => 'default'));

    $this->template->setMeta(array('name' => 'description', 'content' => ''));
    $this->template->setMeta(array('name' => 'author', 'content' => ''));

    $this->template->setMeta(array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'));

    // vendor css
    $this->template->setStyleTag('assets/plugins/pace/pace-theme-flash.css', 'pace-theme-flash-css', '10');
    $this->template->setStyleTag('assets/plugins/boostrapv3/css/bootstrap.min.css', 'bootstrap-min-css', '11');
    $this->template->setStyleTag('assets/plugins/font-awesome/css/font-awesome.css', 'font-awesome-css', '12');
    $this->template->setStyleTag(Array(
        'href' => 'assets/plugins/jquery-scrollbar/jquery.scrollbar.css',
        'priority' => '13',
        'rel' => 'stylesheet',
        'type' => 'text/css',
        'media' => 'screen'
    ));
    $this->template->setStyleTag(Array(
        'href' => 'assets/plugins/bootstrap-select2/select2.css',
        'priority' => '14',
        'rel' => 'stylesheet',
        'type' => 'text/css',
        'media' => 'screen'
    ));
    $this->template->setStyleTag(Array(
        'href' => 'assets/plugins/bootstrap-select2/select2.css',
        'priority' => '15',
        'rel' => 'stylesheet',
        'type' => 'text/css',
        'media' => 'screen'
    ));
    $this->template->setStyleTag(Array(
        'href' => 'assets/plugins/switchery/css/switchery.min.css',
        'priority' => '16',
        'rel' => 'stylesheet',
        'type' => 'text/css',
        'media' => 'screen'
    ));

    // pages css
    $this->template->setStyleTag(Array(
        'href' => 'pages/css/pages-icons.css',
        'priority' => '20',
        'rel' => 'stylesheet',
        'type' => 'text/css',
    ));

    if ($this->config->item('admin_language_id') == 'arabic') {
        $this->template->setStyleTag(Array(
            'href' => 'pages/css/pages.rtl.css',
            'priority' => '30',
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'class' => 'main-stylesheet'
        ));
    } else {
        $this->template->setStyleTag(Array(
            'href' => 'pages/css/pages.css',
            'priority' => '30',
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'class' => 'main-stylesheet'
        ));
    }

    // vendor js
    $this->template->setScriptTag('assets/plugins/pace/pace.min.js', '', '10');
    $this->template->setScriptTag('assets/plugins/jquery/jquery-1.11.1.min.js', '', '11');
    $this->template->setScriptTag('assets/plugins/modernizr.custom.js', '', '12');
    $this->template->setScriptTag('assets/plugins/jquery-ui/jquery-ui.min.js', '', '13');
    $this->template->setScriptTag('assets/plugins/boostrapv3/js/bootstrap.min.js', '', '14');
    $this->template->setScriptTag('assets/plugins/jquery/jquery-easy.js', '', '15');
    $this->template->setScriptTag('assets/plugins/jquery-unveil/jquery.unveil.min.js', '', '16');
    $this->template->setScriptTag('assets/plugins/jquery-bez/jquery.bez.min.js', '', '17');
    $this->template->setScriptTag('assets/plugins/jquery-ios-list/jquery.ioslist.min.js', '', '18');
    $this->template->setScriptTag('assets/plugins/imagesloaded/imagesloaded.pkgd.min.js', '', '19');
    $this->template->setScriptTag('assets/plugins/jquery-actual/jquery.actual.min.js', '', '20');
    $this->template->setScriptTag('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js', '', '21');
    $this->template->setScriptTag('assets/plugins/bootstrap-select2/select2.min.js', '', '22');
    $this->template->setScriptTag('assets/plugins/js-cookie/js.cookie.js', '', '23');
    //$this->template->setScriptTag(assets_url('js/js.cookie.js'), 'js-cookie-js', '22');

    // core template js
    //$this->template->setScriptTag('pages/js/pages.js', '', '22');
    // page level js
    //$this->template->setScriptTag('assets/js/scripts.js', '', '23');


    $tastyigniter_logo  = base_url('views/themes/zinc-admin/images/tastyigniter-logo.png');
    $site_logo          = base_url('views/themes/zinc-admin/images/tastyigniter-logo-text.png');
    $system_name        = lang('tastyigniter_system_name');
    $site_name          = config_item('site_name');
    $site_url           = rtrim(site_url(), '/').'/';
    $base_url           = base_url();
    $active_menu        = ($this->uri->rsegment(1)) ? $this->uri->rsegment(1) : ADMINDIR;
    $message_unread     = $this->user->unreadMessageTotal();
    $islogged           = $this->user->islogged();
    $username           = $this->user->getUsername();
    $staff_name         = $this->user->getStaffName();
    $staff_email        = $this->user->getStaffEmail();
    $staff_avatar       = md5(strtolower(trim($staff_email)));
    $staff_group        = $this->user->staffGroup();
    $staff_location     = $this->user->getLocationName();
    $staff_edit         = site_url('staffs/edit?id='. $this->user->getStaffId());
    $logout             = site_url('logout');

    $wrapper_class = '';
    if (!$this->user->islogged()) {
        //$wrapper_class .= 'wrap-none';
    }

    if ($this->input->cookie('ti_sidebarToggleState') == 'hide') {
        //$wrapper_class .= ' hide-sidebar';
    }

    //$this->template->setStyleTag('zz', 'zz', '10');
    //$this->template->setStyleTag('zz', 'zz', '10');
    //public function setStyleTag($href = '', $name = '', $priority = NULL, $suffix = '', $rel = 'stylesheet', $type = 'text/css')
?>
<?php echo get_doctype(); ?>
<html>
<head>
    <meta charset="utf-8" />
    <?php echo get_metas(); ?>
    <?php echo get_favicon(); ?>
    <title><?php echo sprintf(lang('site_title'), get_title(), $site_name, $system_name); ?></title>
    <?php echo get_style_tags(); ?>
    <!--[if lte IE 9]>
        <link href="<?php echo base_url('views/themes/zinc-admin/pages/css/ie9.css'); ?>"  rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
        window.onload = function()
        {
          // fix for windows 8
          if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
            document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="<?php echo base_url('views/themes/zinc-admin/pages/css/windows.chrome.fix.css'); ?>" />'
        }
    </script>
    <script type="text/javascript">
        var js_site_url = function(str) {
            var strTmp = "<?php echo $site_url; ?>" + str;
            return strTmp;
        };

        var js_base_url = function(str) {
            var strTmp = "<?php echo $base_url; ?>" + str;
            return strTmp;
        };

        var active_menu = '<?php echo $active_menu; ?>';
    </script>
    <?php echo get_script_tags(); ?>
</head>
    <body class="fixed-header <?php echo (($this->config->item('admin_language_id') == 'arabic') ? 'rtl' : ''); ?>">

    <?php if ($islogged) { ?>
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar" data-pages="sidebar">
      <div id="appMenu" class="sidebar-overlay-slide from-top">
      </div>
      <!-- BEGIN SIDEBAR HEADER -->
      <div class="sidebar-header">
        <img src="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/logo_white.png" alt="logo" class="brand" data-src="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
          <button data-pages-toggle="#appMenu" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" type="button"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button data-toggle-pin="sidebar" class="btn btn-link visible-lg-inline" type="button"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR HEADER -->
      <!-- BEGIN SIDEBAR MENU -->
      <div class="sidebar-menu">
        <?php echo get_nav_menu(array(
            'container_open'    => '<ul class="menu-items" id="side-menu">',
            'container_close'   => '</ul>',
        )); ?>
        <!--
        <ul class="menu-items">
          <li class="m-t-30">
            <a href="#" class="detailed">
              <span class="title">Page 1</span>
              <span class="details">234 notifications</span>
            </a>
            <span class="icon-thumbnail "><i class="pg-mail"></i></span>
          </li>
          <li class="">
            <a href="#">
              <span class="title">Page 2</span>
            </a>
            <span class="icon-thumbnail "><i class="pg-social"></i></span>
          </li>
          <li class="">
            <a href="javascript:;">
              <span class="title">Page 3</span>
              <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="pg-grid"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="#">Sub Page 1</a>
                <span class="icon-thumbnail">sp</span>
              </li>
              <li class="">
                <a href="#">Sub Page 2</a>
                <span class="icon-thumbnail">sp</span>
              </li>
              <li class="">
                <a href="#">Sub Page 3</a>
                <span class="icon-thumbnail">sp</span>
              </li>
            </ul>
          </li>
        </ul>
        -->
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <?php } ?>

    <!-- START PAGE-CONTAINER -->
    <div class="page-container">

      <?php if ($islogged) { ?>
      <!-- START PAGE HEADER WRAPPER -->
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                <!--
                <img src="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/logo.png" alt="logo" data-src="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/logo.png" data-src-retina="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/logo_2x.png" width="78" height="22">
                -->
                <h2>
                <?php echo get_heading(); ?>

                <?php if (!empty($context_help)) { ?>
                    <a class="btn btn-help" role="button" data-toggle="collapse" href="#context-help-wrap" title="<?php echo lang('text_help'); ?>">
                        <i class="fa fa-question-circle"></i>
                    </a>
                <?php } ?>
                </h2>
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->

          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>

            <div class="pull-right full-height visible-sm visible-xs">
            <div class="header-inner">
                <div class="dropdown pull-right">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="thumbnail-wrapper d32 circular inline m-t-5">
                    <i class="fa fa-cog fa-lg"></i>
                </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="<?php echo site_url('pages'); ?>"><?php echo lang('menu_page'); ?></a></li>
                <li><a href="<?php echo site_url('banners'); ?>"><?php echo lang('menu_banner'); ?></a></li>
                <li><a href="<?php echo site_url('layouts'); ?>"><?php echo lang('menu_layout'); ?></a></li>
                <li><a href="<?php echo site_url('error_logs'); ?>"><?php echo lang('menu_error_log'); ?></a></li>
                <li><a href="<?php echo site_url('settings'); ?>"><?php echo lang('menu_setting'); ?></a></li>
              </ul>
                </div>
            </div>
            </div>

        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline" style="width: auto;">
                <!--
              <img src="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/logo.png" alt="logo" data-src="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/logo.png" data-src-retina="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/logo_2x.png" width="78" height="22">
                -->
                <h1 style="margin-left: 103px;">
                <?php echo get_heading(); ?>

                <?php if (!empty($context_help)) { ?>
                    <a class="btn btn-help" role="button" data-toggle="collapse" href="#context-help-wrap" title="<?php echo lang('text_help'); ?>">
                        <i class="fa fa-question-circle"></i>
                    </a>
                <?php } ?>
                </h1>
            </div>
            <!-- START NOTIFICATION LIST -->
            <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20 dropdown-messages" style="margin-left: 100px !important;">
              <li class="p-r-15 inline">
                <div class="dropdown">
                  <a href="javascript:void(0);" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                    <?php if ($message_unread) { ?>
                    <span class="bubble"></span>
                    <?php } ?>
                  </a>
                  <!-- START Notification Dropdown -->
                  <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                    <!-- START Notification -->
                    <div class="notification-panel">
                      <!-- START Notification Body-->
                      <div class="notification-body scrollable menu-body">


                        <?php /* ?>
                        <!-- START Notification Body-->
                        <!-- START Notification Item-->
                        <div class="notification-item  clearfix">
                          <div class="heading">
                            <a href="#" class="text-danger pull-left">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold">98% Server Load</span>
                              <span class="fs-12 m-l-10">Take Action</span>
                            </a>
                            <span class="pull-right time">2 mins ago</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item-->
                        <div class="notification-item  clearfix">
                          <div class="heading">
                            <a href="#" class="text-warning-dark pull-left">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold">Warning Notification</span>
                              <span class="fs-12 m-l-10">Buy Now</span>
                            </a>
                            <span class="pull-right time">yesterday</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item-->
                        <div class="notification-item unread clearfix">
                          <div class="heading">
                            <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                              <img width="30" height="30" data-src-retina=<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/profiles/1x.jpg" data-src="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/profiles/1.jpg" alt="" src="<?php echo base_url('views/themes/zinc-admin'); ?>/assets/img/profiles/1.jpg">
                            </div>
                            <a href="#" class="text-complete pull-left">
                              <span class="bold">Revox Design Labs</span>
                              <span class="fs-12 m-l-10">Owners</span>
                            </a>
                            <span class="pull-right time">11:00pm</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <?php */ ?>
                      </div>
                      <!-- END Notification Body-->

                      <!-- START Notification Footer-->
                      <div class="notification-footer text-center">
                        <a href="<?php echo site_url('messages'); ?>" class=""><?php echo lang('text_see_all_message'); ?></a>
                        <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                          <i class="pg-refresh_new"></i>
                        </a>
                      </div>
                      <!-- START Notification Footer-->
                    </div>
                    <!-- END Notification -->
                  </div>
                  <!-- END Notification Dropdown -->
                </div>
              </li>
              <!--
              <li class="p-r-15 inline">
                <a href="#" class="icon-set clip "></a>
              </li>
              <li class="p-r-15 inline">
                <a href="#" class="icon-set grid-box"></a>
              </li>
              -->
            </ul>
            <!-- END NOTIFICATIONS LIST -->
            <!--
            <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
            -->
            </div>
        </div>
        <div class=" pull-right">
          <div class="header-inner">
            <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
          </div>
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">

            <div class="dropdown pull-right">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="thumbnail-wrapper d32 circular inline m-t-5">
                    <i class="fa fa-cog fa-lg"></i>
                </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="<?php echo site_url('pages'); ?>"><?php echo lang('menu_page'); ?></a></li>
                <li><a href="<?php echo site_url('banners'); ?>"><?php echo lang('menu_banner'); ?></a></li>
                <li><a href="<?php echo site_url('layouts'); ?>"><?php echo lang('menu_layout'); ?></a></li>
                <li><a href="<?php echo site_url('error_logs'); ?>"><?php echo lang('menu_error_log'); ?></a></li>
                <li><a href="<?php echo site_url('settings'); ?>"><?php echo lang('menu_setting'); ?></a></li>
              </ul>
            </div>


            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold"><?php echo $staff_name; ?></span> <span class="text-master">(<?php echo $username; ?>)</span>
            </div>
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="<?php echo 'https://www.gravatar.com/avatar/'.$staff_avatar.'.png?s=48&d=mm'; ?>" alt="" data-src="<?php echo 'https://www.gravatar.com/avatar/'.$staff_avatar.'.png?s=48&d=mm'; ?>" data-src-retina="<?php echo 'https://www.gravatar.com/avatar/'.$staff_avatar.'.png?s=48&d=mm'; ?>" width="32" height="32">
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="<?php echo $staff_edit; ?>"><i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;<?php echo lang('text_edit_details'); ?></a></li>
                <li class="bg-master-lighter">
                  <a href="<?php echo $logout; ?>" class="clearfix">
                    <span class="pull-left"><?php echo lang('text_logout'); ?></span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li>
              </ul>
            </div>
            <!--
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog fa-lg"></i>
                </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                </li>
                <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                </li>
                <li><a href="#"><i class="pg-signals"></i> Help</a>
                </li>
                <li class="bg-master-lighter">
                  <a href="#" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li>
              </ul>
            </div>
            -->



          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- END PAGE HEADER WRAPPER -->
      <?php } ?>


    <div class="page-content-wrapper" id="page-wrapper">
        <div class="content">
            <?php if ($islogged) { ?>
                <?php
                    $button_list = get_button_list();
                    $icon_list = get_icon_list();
                ?>


                <?php if (!empty($button_list) OR !empty($icon_list)) { ?>
                    <div class="jumbotron" data-pages="parallax">
                        <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                          <div class="inner">
                            <!-- START BREADCRUMB -->
                            <ul class="breadcrumb">
                              <li>
                                <?php if (!empty($icon_list)) { ?>
                                    <?php echo $icon_list; ?>
                                <?php } ?>

                                <?php if (!empty($button_list)) { ?>
                                    <?php echo $button_list; ?>
                                <?php } ?>
                              </li>
                            </ul>
                            <!-- END BREADCRUMB -->
                          </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if (!empty($context_help)) { ?>
                    <div class="collapse" id="context-help-wrap">
                        <div class="well"><?php echo $context_help; ?></div>
                    </div>
                <?php } ?>

                <div id="notification">
                    <?php echo $this->alert->display(); ?>
                </div>
            <?php } ?>

