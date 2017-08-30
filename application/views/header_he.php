<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="rtl" lang="he-IL">
	<!--<![endif]-->

	<head>
		<!-- SEO Meta -->
		<meta charset="utf-8">
		<title>Tofraweb - פיתוח ובניית אתרי אינטרנט</title>
		<meta property="og:locale" content="he_IL" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php if($post) { echo $post->title_he;} else { echo "פיתוח אתרי אינטרנט";}?>"/>
  		<meta property="og:url" content="<?php echo base_url();?>blog/post/<?php echo $post->slug_he;?>" />
  		<meta property="og:description" content="<?php if($post) { echo $post->description;} else { echo "NA";}?>" />
  		<meta property="article:tag" content="<?php if($post) { echo $post->tags;} else { echo "וורדפרס, בניית אתרים, פיתוח אינטרנטי";}?>" />
		<meta property="og:image" content="<?php echo base_url();?>assets/img/blog/<?php echo $post->picture;?>" />
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/favicon/favicon-16.png">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="<?php echo base_url();?>assets/fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="<?php echo base_url();?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/animations.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/plugins/hover/hover-min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/plugins/morphext/morphext.css" rel="stylesheet">

		<!-- The Project's core CSS file -->
		<!-- Use css/rtl_style.css for RTL version -->

		<link href="<?php echo base_url();?>assets/css/rtl_style.css" rel="stylesheet" >

		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<!-- Use css/rtl_typography-default.css for RTL version -->


		<link href="<?php echo base_url();?>assets/css/rtl_typography-default.css" rel="stylesheet" >

		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="<?php echo base_url();?>assets/css/skins/light_blue.css" rel="stylesheet">


		<!-- Custom css -->
		<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

		<!-- Google Tracking Code -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-92778938-1', 'auto');
		  ga('send', 'pageview');
		</script>
		<!-- Google Tracking Code end -->

	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->

		<body class="no-trans front-page transparent-header" style="direction:rtl !important"<>

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

			<!-- header-container start -->
			<div class="header-container">
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ -->
				<header class="header  fixed    clearfix">

					<div class="container">
						<div class="row">
							<div class="col-md-3" <?php if(!$is_mobile) { ?> style="float:right" <?php } else { ?>style="float:none" <?php } ?>>
								<!-- header-first start -->
								<!-- ================ -->
								<div class="header-first clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<a href="<?php echo base_url();?>"><img id="logo_img" style="max-height:50px" src="<?php echo base_url();?>assets/logo/tofraweb-small.png" alt="TofraWeb"></a>
									</div>

								</div>
								<!-- header-first end -->

							</div>
							<div class="col-md-9">

								<!-- header-second start -->
								<!-- ================ -->
								<div class="header-second clearfix">
									<!-- main-navigation start -->
									<!-- classes: -->
									<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
									<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
									<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
									<!-- ================ -->
									<div class="main-navigation animated">

										<!-- navbar start -->
										<!-- ================ -->
										<nav class="navbar navbar-default" role="navigation">
											<div class="container-fluid">

												<!-- Toggle get grouped for better mobile display -->
												<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
														<span class="sr-only">Toggle navigation</span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>
												</div>

												<!-- Collect the nav links, forms, and other content for toggling -->
												<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
													<ul class="nav navbar-nav navbar-right">
														<?php
														switch ($lang) {
															case 'english': ?>
																<li><a href="<?php echo base_url();?>lang/index/hu"><img style="max-height:24px" id="logo_img" src="<?php echo base_url();?>assets/img/hu_flag_tiny.png" alt="Magyar" title="Magyar"></a></li>
																<li style="margin-left:-20px"><a href="<?php echo base_url();?>lang/index/he"><img style="max-height:24px" id="logo_img" src="<?php echo base_url();?>assets/img/il_flag_tiny.png" alt="עברית" title="English"></a></li>
																<?php break;
															case 'hu': ?>
																<li><a href="<?php echo base_url();?>lang/index/english"><img style="max-height:24px" id="logo_img" src="<?php echo base_url();?>assets/img/uk_flag_tiny.png" alt="English" title="English"></a></li>
																<li style="margin-left:-20px"><a href="<?php echo base_url();?>lang/index/he"><img style="max-height:24px" id="logo_img" src="<?php echo base_url();?>assets/img/il_flag_tiny.png" alt="עברית" title="Magyar"></a></li>
																<?php break;
															default: ?>
																<li><a href="<?php echo base_url();?>lang/index/hu"><img style="max-height:24px" id="logo_img" src="<?php echo base_url();?>assets/img/hu_flag_tiny.png" alt="Magyar" title="Magyar"></a></li>
																<li style="margin-left:-20px"><a href="<?php echo base_url();?>lang/index/english"><img style="max-height:24px" id="logo_img" src="<?php echo base_url();?>assets/img/uk_flag_tiny.png" alt="English" title="English"></a></li>
																<?php break;
														} ?>
														<li><a href="<?php echo base_url();?>#footer"><?php echo $this->lang->line("menu_contact"); ?></a></li>
														<?php if(!$is_mobile) { ?>
															<li><a href="<?php echo base_url();?>#process"><?php echo $this->lang->line("menu_process"); ?></a></li>
														<?php } ?>
														<li><a href="<?php echo base_url();?>#services"><?php echo $this->lang->line("menu_services"); ?></a></li>
														<!-- <li><a href="#testimonial">חוות דעת</a></li> -->
														<li><a href="<?php echo base_url();?>#why"><?php echo $this->lang->line("menu_why"); ?></a></li>
														<li><a href="<?php echo base_url();?>#portfolio"><?php echo $this->lang->line("menu_portfolio"); ?></a></li>
														<li><a href="<?php echo base_url();?>#about"><?php echo $this->lang->line("menu_about"); ?></a></li>
														<li><a href="<?php echo base_url();?>blog">בלוג</a></li>
														<li class="active"><a href="<?php echo base_url();?>"><?php echo $this->lang->line("menu_home"); ?></a></li>
													</ul>
												</div>

											</div>
										</nav>
										<!-- navbar end -->

									</div>
									<!-- main-navigation end -->
								</div>
								<!-- header-second end -->

							</div>

						</div>
					</div>

				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
