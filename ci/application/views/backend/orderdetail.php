
			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div  ng-app='myapp' ng-controller='orderCtrl' class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Order detail</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
                            <div style="height: 900px; overflow: auto">
							<table class="table cart" >
								<thead>
									<tr>
										<th>Order ID </th>
										<th>Product ID </th>
										<th>Product Title </th>
										<th>SProduct Price</th>
                                        <th>Quantity</th>
										<th>Place Order Date</th>
									</tr>
								</thead>
								<tbody>
                         
                                <tr ng-repeat='order in myOrderdetail'>
								<td>{{ order.oid }}</td>
                                <td>{{ order.product_id }}</td>
                                <td>{{ order.product_title }}</td>
                                <td>{{ order.product_price }}</td>
                                <td>{{ order.qty }}</td>
                                <td>{{ order.created_date }}</td>
                                <td><button ng-click="edit(order.id)" class="btn btn-primary">Edit</button></td>
                                </tr>

								</tbody>
								</table>
                                </div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->