<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="<?=base_url()?>">Home</a></li>
						<li class="active">Page Login</li>
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
								<h2 class="title">Login</h2>
								<form method="POST" action="<?=base_url('usersubmit')?>" class="form-horizontal">
									<div class="form-group has-feedback">
										<label for="inputUserName" class="col-sm-3 control-label">Email</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputUserName" placeholder="User Name" name="email" required>
											<i class="fa fa-user form-control-feedback"></i>
										</div>
									</div>
									<div class="form-group has-feedback">
										<label for="inputPassword" class="col-sm-3 control-label">Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
											<i class="fa fa-lock form-control-feedback"></i>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-8">
											<div class="checkbox">
												<label>
													<input type="checkbox" > Remember me.
												</label>
											</div>											
											<button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
											<ul class="space-top">
												<li><a href="#">Forgot your password?</a></li>
											</ul>
											<span class="text-center text-muted">Login with</span>

											<fb:login-button 
															  scope="public_profile,email"
															  onlogin="checkLoginState();">
															</fb:login-button>
														<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>


											<ul class="social-links colored circle clearfix">
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
							<p class="text-center space-top">Don't have an account yet? <a href="<?=base_url('signup')?>">Sign up</a> now.</p>
						</div>
						<!-- main end -->
					</div>
				</div>
			</div>
			<!-- main-container end -->

			<script>
		     function onSignIn(googleUser) {
											        // Useful data for your client-side scripts:
											        var profile = googleUser.getBasicProfile();
											        var id_token = googleUser.getAuthResponse().id_token;

											        $.post("<?=base_url('api/glogin')?>",{
											        	/*"id":profile.getId(),
											        	"fullname":profile.getName(),
											        	"given_name":profile.getGivenName(),
											        	"family_name":profile.getFamilyName(),
											        	"email":profile.getEmail(),
											        	"image":profile.getImageUrl(),*/
											        	"token":id_token,
											        }, function(response){

											        	response = JSON.parse(response);


											        	if(response.status == "OK") {


											        		console.log("login success");

											        	} else {
											        		alert(response.result);
											        	}

											        });

											        /*
											        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
											        console.log('Full Name: ' + profile.getName());
											        console.log('Given Name: ' + profile.getGivenName());
											        console.log('Family Name: ' + profile.getFamilyName());
											        console.log("Image URL: " + profile.getImageUrl());
											        console.log("Email: " + profile.getEmail());
											        // The ID token you need to pass to your backend:
											        
											        console.log("ID Token: " + id_token);
											        */
											      };
		    </script>
		    <script>
	// This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {

    	$.post("<?=base_url('api/flogin')?>",
    		{"token":response.authResponse.accessToken}, 
    		function(response){

			response = JSON.parse(response);

			if(response.status == "OK") {
				console.log("login success");
			} else {
				alert(response.result);
			}

		});

      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      console.log('Please log ' +
        'into this app.');
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '159816581382232',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

    // Now that we've initialized the JavaScript SDK, we call 
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      console.log('Thanks for logging in, ' + response.name + '!');
    });
  }


 


</script>