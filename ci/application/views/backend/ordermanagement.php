
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
							<h1 class="page-title">Order Management</h1>
							<div class="separator-2"></div>
                            <a href='<?= base_url('export')?>'>Export</a><br><br>
							<!-- page-title end -->
                            <div style="height: 900px; overflow: auto">
							<table class="table cart" >
								<thead>
									<tr>
										<th>Order Number </th>
										<th>User id </th>
										<th>Billing Adress </th>
										<th>Shipping Address</th>
										<th>Place Order Date</th>
										<th>Attachment</th>
										<th>Payment Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                         
                                <tr ng-repeat='order in orders'>
								<td><button ng-click="orderdetail(order.id)" >{{ order.id }}</button></td>
                                <td>{{ order.user_id }}</td>
                                <td>{{ order.bill_firstname}}{{ order.bill_lastname}}{{ order.bill_tel}}{{ order.bill_email}}</td>
                                <td>{{ order.ship_firstname}}{{ order.ship_lastname}}{{ order.ship_tel}}{{ order.ship_email}}</td>
                                <td>{{ order.created_date }}</td>
                                <td>{{ order.payment_photo }}</td>
                                <td>{{ order.payment_status }}</td>
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