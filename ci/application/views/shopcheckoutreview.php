	<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
						<li class="active">Checkout Review</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Checkout Review</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							<form action="<?=base_url('completeorder')?>" method="POST" role="form" class="form-horizontal" id="completeorder">
							<table class="table cart">
								<thead>
									<tr>
										<th>Product </th>
										<th>Price </th>
										<th>Quantity</th>
										<th class="amount">Total </th>
									</tr>
								</thead>
								<tbody>
                                <?php
                            $total_amount = 0;
                            $total_qty = 0;
                            if(!empty($cartList))
                            {
                                foreach($cartList as $v)
                                {
                            ?>
								<tr class="remove-data">
											<td class="product"><a href="shop-product.html"><?=$v['product_title']?></a> <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</small></td>
											<td class="price">RM<?=$v['product_price']?></td>
											<td class="quantity">
												<div class="form-group">
													<input type="text" class="form-control" value="<?=$v['qty']?>" name="qty[]" disabled>
													<input type="hidden" class="form-control" value="<?=$v['id']?>" name="cart_id[]">
													<input type="hidden" class="form-control" value="<?=$v['product_price']?>" name="product_price[]">
													<input type="hidden" class="form-control" value="<?=$v['product_title']?>" name="product_title[]">
												</div>											
											</td>
											<!-- <td class="remove"><a class="btn btn-remove btn-sm btn-default">Remove</a></td> -->
											<td class="amount">RM<?=$v['product_price']*$v['qty']?> </td>
											
										</tr>
										
                                    <?php
                                            $total_qty    += $v['qty'];
											$total_amount += $v['product_price']*$v['qty'];
											}
										}
									
									?>
										
										

										<tr>
											<td class="total-quantity" colspan="3">Subtotal</td>
											<td class="amount">RM<?=$total_amount?></td>
										</tr>
										

										<tr>										
											<td class="total-quantity" colspan="2">Discount Coupon</td>
											<!-- <td class="price">TheProject25672</td>
											<td class="amount">-20%</td> -->
											<td class="price"></td>
											<td class="amount"></td>
										</tr>
										<tr>
											<td class="total-quantity" colspan="3">Total <?=$total_qty?> Items</td>
											<td class="total-amount">RM<?=$total_amount?>
											<input type="hidden"  id="total_amount" value="<?=$total_amount?>" name="total_amount"></td>
											<!-- <input type="hidden" class="form-control" value="<?=$product_total_amount?>" name="cart_Total"> -->
										</tr>
									</tbody>
								</table>
							<div class="space-bottom"></div>
							
							<table class="table">
								<thead>
									<tr>
										<th colspan="2">Billing Information </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Full Name</td>
										<td class="information"><?=$b_first_name.$b_last_name?> 
										<input type="hidden"  id="b_first_name" value="<?=$b_first_name?> " name="b_first_name">
										<input type="hidden"  id="b_last_name" value="<?=$b_last_name?>" name="b_last_name"></td>
									</tr>
									<tr>
										<td>Email</td>
										<td class="information"><?=$b_email?>
										<input type="hidden"  id="b_email" value="<?=$b_email?> " name="b_email"> </td>
									</tr>
									<tr>
										<td>Telephone</td>
										<td class="information"><?=$b_tel?>
										<input type="hidden"  id="b_tel" value="<?=$b_tel?> " name="b_tel"></td>
									</tr>
									<tr>
										<td>Address</td>
										<td class="information"><?=$b_Address_1.$b_Address_2.$b_city.$b_postal_code.$b_country?>
										<input type="hidden"  id="b_Address_1" value="<?=$b_Address_1?> " name="b_Address_1">
										<input type="hidden"  id="b_Address_2" value="<?=$b_Address_2?> " name="b_Address_2">
										<input type="hidden"  id="b_city" value="<?=$b_city?> " name="b_city">
										<input type="hidden"  id="b_postal_code" value="<?=$b_postal_code?> " name="b_postal_code">
										<input type="hidden"  id="b_country" value="<?=$b_country?> " name="b_country"></td>
									</tr>
									<tr>
										<td>Additional Info</td>
										<td class="information"><?=$b_remarks?>
										<input type="hidden"  id="b_remarks" value="<?=$b_remarks?> " name="b_remarks"></td>
									</tr>
								</tbody>
							</table>
							<div class="space-bottom"></div>
							<table class="table">
								<thead>
									<tr>
										<th colspan="2">Shipping Information </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Full Name</td>
										<td class="information"><?=$s_first_name.$s_last_name?>
										<input type="hidden"  id="s_first_name" value="<?=$s_first_name?> " name="s_first_name">
										<input type="hidden"  id="s_last_name" value="<?=$s_last_name?>" name="s_last_name"></td>
									</tr>
									<tr>
										<td>Email</td>
										<td class="information"><?=$s_email?>
										<input type="hidden"  id="s_email" value="<?=$s_email?> " name="s_email"></td>
									</tr>
									<tr>
										<td>Telephone</td>
										<td class="information"><?=$s_tel?>
										<input type="hidden"  id="s_tel" value="<?=$s_tel?> " name="s_tel"></td>
									</tr>
									<tr>
										<td>Address</td>
										<td class="information"><?=$s_Address_1.$s_Address_2.$s_city.$s_postal_code.$s_country?>
										<input type="hidden"  id="s_Address_1" value="<?=$s_Address_1?> " name="s_Address_1">
										<input type="hidden"  id="s_Address_2" value="<?=$s_Address_2?> " name="s_Address_2">
										<input type="hidden"  id="s_city" value="<?=$s_city?> " name="s_city">
										<input type="hidden"  id="s_postal_code" value="<?=$s_postal_code?> " name="s_postal_code">
										<input type="hidden"  id="s_country" value="<?=$s_country?> " name="s_country"></td>
									</tr>
								</tbody>
							</table>
							<div class="space-bottom"></div>
							<div class="text-right">	
								<a href="<?=base_url('shopcheckout')?>" class="btn btn-group btn-default"><i class="icon-left-open-big"></i> Go Back</a>
								<input type="submit" name="blank_order" id="blank_order" value="Continue">
							</div>
							</form>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="pv-30 dark-translucent-bg padding-bottom-clear" style="background-image:url('images/shop-banner.jpg');background-position: 50% 32%;">
				<div class="container">
					<div class="row grid-space-10">
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<span class="icon default-bg"><i class="fa fa-diamond"></i></span>
								<h3>Premium &amp; Guaranteed Quality</h3>
								<div class="separator clearfix"></div>
								<p>Voluptatem ad provident non repudiandae beatae cupiditate.</p>
								<a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
								<span class="icon default-bg"><i class="icon-lock"></i></span>
								<h3>Secure &amp; Safe Payment</h3>
								<div class="separator clearfix"></div>
								<p>Iure sequi unde hic. Sapiente quaerat sequi inventore.</p>
								<a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
								<span class="icon default-bg"><i class="icon-globe"></i></span>
								<h3 class="pl-10 pr-10">Free &amp; Fast Shipping</h3>
								<div class="separator clearfix"></div>
								<p>Inventore dolores aut laboriosam cum consequuntur.</p>
								<a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
								<span class="icon default-bg"><i class="icon-thumbs-up"></i></span>
								<h3>24/7 Customer Support</h3>
								<div class="separator clearfix"></div>
								<p>Inventore dolores aut laboriosam cum consequuntur.</p>
								<a href="page-services.html" class="link-dark">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="pv-30 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="block clearfix">
								<h3 class="title">Top Rated</h3>
								<div class="separator-2"></div>
								<div class="media margin-clear">
									<div class="media-left">
										<div class="overlay-container">
											<img class="media-object" src="images/product-1.jpg" alt="blog-thumb">
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
											<img class="media-object" src="images/product-2.jpg" alt="blog-thumb">
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
											<img class="media-object" src="images/product-3.jpg" alt="blog-thumb">
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
											<img class="media-object" src="images/product-4.jpg" alt="blog-thumb">
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
						</div>
						<div class="col-md-4">
							<div class="block clearfix">
								<h3 class="title">Related</h3>
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
						</div>
						<div class="col-md-4">
							<div class="block clearfix">
								<h3 class="title">Best Sellers</h3>
								<div class="separator-2"></div>
								<div class="media margin-clear">
									<div class="media-left">
										<div class="overlay-container">
											<img class="media-object" src="images/product-3.jpg" alt="blog-thumb">
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
											<img class="media-object" src="images/product-5.jpg" alt="blog-thumb">
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
											<img class="media-object" src="images/product-1.jpg" alt="blog-thumb">
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
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->