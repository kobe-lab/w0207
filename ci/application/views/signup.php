<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="<?=base_url()?>">Home</a></li>
						<li class="active">Page Sign up</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<div class="main-container dark-translucent-bg" style="background-image:url('images/background-img-6.jpg');">
				<div class="container">
					<div class="row">
						<!-- main start -->
						<!-- ================ -->
						<div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
							<div class="form-block center-block p-30 light-gray-bg border-clear">
								<h2 class="title">Sign up</h2>
								<form method="POST" action="<?=base_url('addsignup')?> "class="form-horizontal">
									<div class="form-group has-feedback">
										<label for="fullName" class="col-sm-3 control-label">Full Name</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
											<i class="fa fa-user form-control-feedback"></i>
										</div>
									</div>
									<div class="form-group has-feedback">
										<label for="givenName" class="col-sm-3 control-label">Given Name</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="givenName" name="givenname" placeholder="Given Name" required>
											<i class="fa fa-user form-control-feedback"></i>
										</div>
									</div>
                                    <div class="form-group has-feedback">
										<label for="familyName" class="col-sm-3 control-label">Family Name</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="familyName" name="familyname" placeholder="Family Name" required>
											<i class="fa fa-user form-control-feedback"></i>
										</div>
									</div>
                                    <div class="form-group has-feedback">
										<label for="email" class="col-sm-3 control-label">Email</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
											<i class="fa fa-user form-control-feedback"></i>
										</div>
                                    </div>
                                    <div class="form-group has-feedback">
										<label for="password" class="col-sm-3 control-label">Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
											<i class="fa fa-lock form-control-feedback"></i>
										</div>
									</div>
									<div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                    <button type="submit" class="btn btn-group btn-default btn-animated">Sign up <i class="fa fa-user"></i></button>
                                    </div>
                                     </div>
								</form>
						
						<!-- main end -->
					</div>
				</div>
			</div>
			<!-- main-container end -->

			