<!-- banner start -->
			<!-- ================ -->
			<div class="banner dark-translucent-bg" style="background-image:url('images/shop-banner.jpg'); background-position:50% 32%;">
				<!-- breadcrumb start -->
				<!-- ================ -->
				<div class="breadcrumb-container">
					<div class="container">
						<ol class="breadcrumb">
							<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.html">Home</a></li>
							<li class="active">Shop List</li>
						</ol>
					</div>
				</div>
				<!-- breadcrumb end -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 text-center col-md-offset-2 pv-20">
							<h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Wellcome to <strong>Shop</strong></h2>
							<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
							<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
						</div>
					</div>
				</div>			
			</div>
			<!-- banner end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="light-gray-bg section">
				<div class="container">
					<!-- filters start -->
					<div class="sorting-filters text-center mb-20">
						<form class="form-inline">
							<div class="form-group">
								<label>Sort by</label>
								<select class="form-control">
									<option selected="selected">Date</option>
									<option>Price</option>
									<option>Model</option>
								</select>
							</div>
							<div class="form-group">
								<label>Order</label>
								<select class="form-control">
									<option selected="selected">Acs</option>
									<option>Desc</option>
								</select> 
							</div>
							<div class="form-group">
								<label>Price $ (min/max)</label>
								<div class="row grid-space-10">
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control col-xs-6">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Category</label>
								<select class="form-control">
									<option selected="selected">Smartphones</option>
									<option>Tablets</option>
									<option>Smart Watches</option>
									<option>Desktops</option>
									<option>Software</option>
									<option>Accessories</option>
								</select> 
							</div>
							<div class="form-group">
								<a href="#" class="btn btn-default">Submit</a>
							</div>
						</form>
					</div>
					<!-- filters end -->
				</div>
			</div>
			<!-- section end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-9">
							<!-- pills start -->
							<!-- ================ -->
							<!-- Nav tabs -->
							<ul class="nav nav-pills" role="tablist">
								<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="Latest Arrivals"><i class="icon-star"></i> Latest Arrivals</a></li>
								<li><a href="#pill-2" role="tab" data-toggle="tab" title="Featured"><i class="icon-heart"></i> Featured</a></li>
								<li><a href="#pill-3" role="tab" data-toggle="tab" title="Top Sellers"><i class=" icon-up-1"></i> Top Sellers</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content clear-style">
								<div class="tab-pane active" id="pill-1">
                                    <?php
                                    if(!empty($product_list)) {
                                        foreach($product_list as $v) {
                                    ?>
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="<?=base_url('assets/'.$v['pic1'])?>" alt="">
													<a class="overlay-link" href="<?=base_url('product_detail/'.$v['id'])?>"><i class="fa fa-plus"></i></a>
													<span class="badge">30% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="<?=base_url('product_detail/'.$v['id'])?>"><?=$v['title']?></a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p><?=$v['brief']?></p>
													<div class="elements-list clearfix">
														<span class="price"><?=$v['price']?></span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
								</div>
								<div class="tab-pane" id="pill-3">
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="images/product-4.jpg" alt="">
													<a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
													<span class="badge">50% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="shop-product.html">Dolorem quam delectus eos nostrum</a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
													<div class="elements-list clearfix">
														<span class="price"><del>$199.00</del> $100.00</span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="images/product-3.jpg" alt="">
													<a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
													<span class="badge">40% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="shop-product.html">Facilis eos nobis quas asperiores amet</a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
													<div class="elements-list clearfix">
														<span class="price"><del>$199.00</del> $150.00</span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="images/product-2.jpg" alt="">
													<a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
													<span class="badge">20% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="shop-product.html">Lorem ipsum dolor sit amet</a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
													<div class="elements-list clearfix">
														<span class="price"><del>$199.00</del> $160.00</span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="images/product-1.jpg" alt="">
													<a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
													<span class="badge">30% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="shop-product.html">Consectetur adipisicing elit</a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
													<div class="elements-list clearfix">
														<span class="price"><del>$199.00</del> $150.00</span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="images/product-6.jpg" alt="">
													<a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
													<span class="badge">35% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="shop-product.html">Perferendis necessitatibus dolorum delectus</a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
													<div class="elements-list clearfix">
														<span class="price"><del>$50.00</del> $32.50</span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="images/product-8.jpg" alt="">
													<a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
													<span class="badge">10% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="shop-product.html">Est ipsa quod sit dolorum alias suscipit</a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
													<div class="elements-list clearfix">
														<span class="price"><del>$199.00</del> $180.00</span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="images/product-7.jpg" alt="">
													<a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
													<span class="badge">30% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="shop-product.html">Fugiat nemo enim officiis repellendus</a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
													<div class="elements-list clearfix">
														<span class="price"><del>$300.00</del> $210.00</span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listing-item mb-20">
										<div class="row grid-space-0">
											<div class="col-sm-6 col-md-4 col-lg-3">
												<div class="overlay-container">
													<img src="images/product-5.jpg" alt="">
													<a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
													<span class="badge">20% OFF</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-8 col-lg-9">
												<div class="body">
													<h3 class="margin-clear"><a href="shop-product.html">Corporis, rem assumenda officia</a></h3>
													<p>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star text-default"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<a href="#" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
														<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
													<div class="elements-list clearfix">
														<span class="price"><del>$99.00</del> $80.00</span>
														<a href="#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- pills end -->
							<!-- pagination start -->
							<nav class="text-center">
                                <?=$pagination?>
							</nav>
							<!-- pagination end -->
						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-3">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Best Sellers</h3>
									<div class="separator-2"></div>
									<div id="carousel-sidebar" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators top">
											<li data-target="#carousel-sidebar" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-sidebar" data-slide-to="1"></li>
											<li data-target="#carousel-sidebar" data-slide-to="2"></li>
										</ol>
										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<div class="listing-item">
													<div class="overlay-container">
														<img src="images/product-1.jpg" alt="product 1">
														<span class="badge">30% OFF</span>
														<a href="shop-product.html" class="overlay-link"><i class="fa fa-link"></i></a>
													</div>
													<h3><a href="shop-product.html">Suscipit consequatur velit</a></h3>
													<span class="price"><del>$199.00</del> $150.00</span>
												</div>
											</div>
											<div class="item">
												<div class="listing-item">
													<div class="overlay-container">
														<img src="images/product-2.jpg" alt="product 2">
														<span class="badge">20% OFF</span>
														<a href="shop-product.html" class="overlay-link"><i class="fa fa-link"></i></a>
													</div>
													<h3><a href="shop-product.html">Quas inventore modi lorem</a></h3>
													<span class="price"><del>$199.00</del> $150.00</span>
												</div>
											</div>
											<div class="item">
												<div class="listing-item">
													<div class="overlay-container">
														<img src="images/product-3.jpg" alt="product 3">
														<span class="badge">40% OFF</span>
														<a href="shop-product.html" class="overlay-link"><i class="fa fa-link"></i></a>
													</div>
													<h3><a href="shop-product.html">Consectetur adipisicing elit</a></h3>
													<span class="price"><del>$199.00</del> $150.00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="block clearfix">
									<h3 class="title">Top Rated</h3>
									<div class="separator-2"></div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/product-5.jpg" alt="blog-thumb">
												<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="shop-product.html">Lorem ipsum dolor sit amet</a></h6>
											<p class="margin-clear">
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
											</p>
											<p class="price">$99.00</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/product-6.jpg" alt="blog-thumb">
												<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="shop-product.html">Eum repudiandae ipsam</a></h6>
											<p class="margin-clear">
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star"></i>
											</p>
											<p class="price">$299.00</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/product-7.jpg" alt="blog-thumb">
												<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="shop-product.html">Quia aperiam velit fuga</a></h6>
											<p class="margin-clear">
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star"></i>
											</p>
											<p class="price">$9.99</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/product-8.jpg" alt="blog-thumb">
												<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="shop-product.html">Fugit non natus officiis</a></h6>
											<p class="margin-clear">
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star text-default"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</p>
											<p class="price">$399.00</p>
										</div>
									</div>
								</div>
								<div class="block clearfix">
									<h3 class="title">Categories</h3>
									<div class="separator-2"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked list-style-icons">
											<li><a href="#"><i class="fa fa-caret-right pr-10"></i>Diamonds</a></li>
											<li><a href="#"><i class="fa fa-caret-right pr-10"></i>Clothes</a></li>
											<li><a href="#"><i class="fa fa-caret-right pr-10"></i>Shoes</a></li>
											<li><a href="#"><i class="fa fa-caret-right pr-10"></i>Watches</a></li>
											<li><a href="#"><i class="fa fa-caret-right pr-10"></i>Accessories</a></li>
											<li><a href="#"><i class="fa fa-caret-right pr-10"></i>Hats</a></li>
											<li><a href="#"><i class="fa fa-caret-right pr-10"></i>Perfumes</a></li>
										</ul>
									</nav>
								</div>
								<div class="block clearfix">
									<h3 class="title">End of Season Sales</h3>
									<div class="separator-2"></div>
									<p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
								</div>
								<div class="block clearfix">
									<form role="search">
										<div class="form-group has-feedback">
											<input type="text" class="form-control" placeholder="Search">
											<i class="fa fa-search form-control-feedback"></i>
										</div>
									</form>
								</div>	
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="section dark-bg pv-40 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action text-center">
								<div class="row">
									<div class="col-md-8 col-md-offset-2">
										<h2 class="title"><strong>Subscribe</strong> To Our Newsletter</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
										<div class="separator"></div>
										<form class="form-inline margin-clear">
											<div class="form-group has-feedback">
												<label class="sr-only" for="subscribe3">Email address</label>
												<input type="email" class="form-control form-control-lg" id="subscribe3" placeholder="Enter email" name="subscribe3" required="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<button type="submit" class="btn btn-lg btn-gray-transparent btn-animated margin-clear">Submit <i class="fa fa-send"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->