<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>The Project | Home Commerce</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="<?=base_url('assets/template/bootstrap/css/bootstrap.css')?>" rel="stylesheet" >


		<!-- Font Awesome CSS -->
        <link href="<?=base_url('assets/template/fonts/font-awesome/css/font-awesome.css')?>" rel="stylesheet" >

        <!-- Fontello CSS -->
        <link href="<?=base_url('assets/template/fonts/fontello/css/fontello.css')?>" rel="stylesheet" >

		<!-- Plugins -->
		<link href="<?=base_url('assets/template/plugins/magnific-popup/magnific-popup.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/template/plugins/rs-plugin-5/css/settings.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/template/plugins/rs-plugin-5/css/layers.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/template/plugins/rs-plugin-5/css/navigation.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/template/css/animations.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/template/plugins/owlcarousel2/assets/owl.carousel.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/template/plugins/owlcarousel2/assets/owl.theme.default.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/template/plugins/hover/hover-min.css')?>" rel="stylesheet">		
		
		<!-- The Project's core CSS file -->
		<!-- Use css/rtl_style.css for RTL version -->
        <link href="<?=base_url('assets/template/css/style.css')?>" rel="stylesheet" >

		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<!-- Use css/rtl_typography-default.css for RTL version -->
        <link href="<?=base_url('assets/template/css/typography-default.css')?>" rel="stylesheet" >
        
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
        <link href="<?=base_url('assets/template/css/skins/light_blue.css')?>" rel="stylesheet" >
		

		<!-- Custom css --> 
		<link href="<?=base_url('assets/template/css/custom.css')?>" rel="stylesheet" >
		
		<meta name="google-signin-scope" content="profile email">
	    <meta name="google-signin-client_id" content="693437561551-cflb2un717og7ss4vl5d9n8k66kooj1c.apps.googleusercontent.com">
	    <script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans  transparent-header  ">

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
				<header class="header  fixed  full-width  clearfix">
					
								<!-- header-second start -->
								<!-- ================ -->
								<div class="header-second clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

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
												
												<!-- header-first start -->
												<!-- ================ -->
												<div class="header-first clearfix ">

													<!-- logo -->
													<div id="logo-mobile" class="logo">
														<a href="index.html"><img id="logo-img-mobile" src="assets/template/images/logo_light_blue.png" alt="The Project"></a>
													</div>

													<!-- name-and-slogan -->
													<div class="site-slogan hidden-xs">
														Multipurpose HTML5 Template
													</div>

												</div>
												<!-- header-first end -->
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
											<!-- main-menu -->
												<ul class="nav navbar-nav navbar-right">

													<!-- mega-menu start -->
													<li class="mega-menu active">
														<!-- <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home</a> -->
														<a href="<?=base_url('')?>" >Home</a>
													</li>

													
													<!-- mega-menu end -->
													<!-- mega-menu start -->
													<li class="mega-menu">
														<a href="<?=base_url('product_list')?>" >Product List</a>

													</li>
													<!-- mega-menu end -->
											
													<!-- mega-menu start -->
												
											
													<?php
													if (isset($userdata) && !empty($userdata)) { ?>
													<li class="dropdown ">
														<a class="dropdown-toggle" data-toggle="dropdown"><?=$userdata['fullname']?></a>
														<ul class="dropdown-menu">
															<li ><a href="template/index-shop.html">Shop Home 1</a></li>
															<li ><a href="<?=base_url('myorder')?>">Myorder History</a></li>
															<li ><a href="<?=base_url('useredit')?>">Edit Profile</a></li>
															<li ><a href="<?=base_url('userlogout')?>"><strong>Logout</strong></a></li>
														</ul>
													</li>
													<?php
													} else {
													?>
														<li class="mega-menu">
														<a href="<?=base_url('login')?>" >Login</a>
														</li>
													<?php
													}
													?>
													<!-- mega-menu end -->
												
												<!-- header dropdown buttons -->
												<div class="header-dropdown-buttons hidden-xs hidden-sm">

													<div class="btn-group dropdown"> 
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
														<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
															<li>
																<form role="search" method="GET" action="<?=base_url('search')?>" class="search-box margin-clear">
																	<div class="form-group has-feedback">
																		<input type="text" name="title" class="form-control" placeholder="Search">
																		<i class="icon-search form-control-feedback"></i>
																	</div>
																</form>
															</li>
														</ul>
													</div>
													
													<div class="btn-group dropdown">
													<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-animation-effect="swing" data-effect-delay="1000"><i class="fa fa-heart-o"></i><span id="mini_wishlist" class="cart-count default-bg"><?=$wishlistTotal?></span></button>
														
													<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
															<li>
																<table class="table table-hover" id="wishlist">
																	<thead>
																		<tr>
																			<th class="product">Product</th>
																			<th class="amount">Price</th>
																		</tr>
																	</thead>
																	<tbody>

                                                                        <?php
                                                                           $total_amount = 0;
                                                                            if(!empty($wishList)){
                                                                                
                                                                                foreach($wishList as $v){
                                                                        
                                                                        ?>
																			<tr>
																				<td class="product"><a href="shop-product.html"><?=$v['product_title']?></a></td>
																				
																				<td class="amount">RM<?=$v['product_price']?></td>
																			</tr>
																			
																		<?php
																		$total_amount += $v['product_price'];
                                                                                }
                                                                            }
                                                                        
                                                                        ?>

																		<tr>
																			<td class="total-quantity" >Total <?=$wishlistTotal?>  Items</td>
																			<td class="total-amount">RM<?=$total_amount?></td>
																		</tr>
																	</tbody>
																</table>
																<div class="panel-body text-right">
																	<a href="<?=base_url('wishlist')?>" class="btn btn-group btn-gray btn-sm">View wishlist</a>
																</div>
															</li>
														</ul>
													</div>

													<div class="btn-group dropdown">
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-animation-effect="jello" data-effect-delay="200"><i class="icon-basket-1"></i><span id="mini_cartTotal" class="cart-count default-bg"><?=$cartTotal?></span></button>
														
														<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
															<li>
																<table class="table table-hover" id="miniCart">
																	<thead>
																		<tr>
																			<th class="quantity">QTY</th>
																			<th class="product">Product</th>
																			<th class="amount">Subtotal</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php 
																		$total_amount = 0;
																		if(!empty($cartList)){

																		
																			foreach($cartList as $v) {
																		
																		?>
																		<tr>
                                                                            <td class="quantity"><?=$v['qty']?>x</td>
                                                                            <td class="product"><a href="shop-product.html"><?=$v['product_title']?></a></td>
                                                                       		<td class="amount"><?=$v['product_price']*$v['qty']?></td>
                                                                        </tr>
                                                                        
                                                                        <?php
                                                                                $total_amount += $v['product_price']*$v['qty'];
                                                                                }
                                                                            }
                                                                        
                                                                        ?>

																		<tr>
																			<td class="total-quantity" colspan="2">Total <?=$cartTotal?> Items</td>
																			<td class="total-amount">$<?=$total_amount?></td>
																		</tr>
																	</tbody>
																</table>
																<div class="panel-body text-right">
																	<a href="<?=base_url('shopcart')?>" class="btn btn-group btn-gray btn-sm">View Cart</a>
																	<a href="<?=base_url('shopcheckout')?>" class="btn btn-group btn-gray btn-sm">Checkout</a>
																</div>
															</li>
														</ul>
													</div>
											
												<!-- header dropdown buttons end-->
												</ul>
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
								</div>
								<!-- header-second end -->
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->