	<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
						<li class="active">Wishlist</li>
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
							<h1 class="page-title">Wishlist</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
                          
							<table class="table cart table-hover table-colored">
								<thead>
									<tr>
										<th>Product </th>
										<th>Price </th>
										<th>Remove </th>
										<th class="amount">Total</th>
									</tr>
								</thead>
								<tbody>
                                <?php
                            $total_amount = 0;
                            // $total_qty = 0;
                            if(!empty($wishList))
                            {
                                foreach($wishList as $v)
                                {
                            ?>
									<tr class="remove-data">
										<td class="product"><a href="shop-product.html"><?=$v['product_title']?></a> <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</small></td>
										<td class="price">RM<?=$v['product_price']?> </td>
										<!-- <td class="quantity">
											<div class="form-group">
												<input type="text" class="form-control" value="<?=$v['qty']?>">
											</div>											
										</td> -->
										<td class="remove"><a  href="javascript:;" onclick="removewishlistAjax('<?=$v['id']?>')" class="btn btn-remove btn-sm btn-default">Remove</a></td>
										<td class="amount">RM<?=$v['product_price']?> </td>
                                    </tr>
                                    <?php
                                        // $total_qty    += $v['qty'];
                                        $total_amount += $v['product_price'];
                                          }
                                           }                            
                                           ?>
								<tr>
										<td class="total-quantity" colspan="3">Total 4 Items</td>
										<td class="total-amount">RM<?=$total_amount?></td>
									</tr>
								</tbody>
							</table>
							<div class="text-right">	
								<a href="shop-cart.html" class="btn btn-group btn-default">Update Cart</a>
								<a href="<?=base_url('shopcheckout')?>" class="btn btn-group btn-default">Checkout</a>
							</div>

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