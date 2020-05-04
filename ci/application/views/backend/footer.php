<!-- #PAGE FOOTER -->
<div class="page-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="txt-color-white">SmartAdmin 1.8.x <span class="hidden-xs"> - Web Application Framework</span> © 2014-2016</span>
				</div>
			</div>
			<!-- end row -->
		</div>
		<!-- END FOOTER -->

		<!-- #SHORTCUT AREA : With large tiles (activated via clicking user name tag)
			 Note: These tiles are completely responsive, you can add as many as you like -->
		<div id="shortcut">
			<ul>
				<li>
					<a href="index.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
			</ul>
		</div>
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->


		<!-- #PLUGINS -->
		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')?>"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="<?=base_url('assets/backend/js/libs/jquery-2.1.1.min.js')?>"><\/script>');
			}
		</script>

		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="<?=base_url('assets/backend/js/libs/jquery-ui-1.10.3.min.js')?>"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="<?=base_url('assets/backend/js/app.config.seed.js')?>"></script>

		<!-- BOOTSTRAP JS -->
		<script src="<?=base_url('assets/backend/js/bootstrap/bootstrap.min.js')?>"></script>

		<!--[if IE 8]>
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="<?=base_url('assets/backend/js/app.seed.js')?>"></script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
	
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>


	
		<script>
			var order = angular.module("order",[]);
			order.controller("ordermanagement", ['$scope','$http',
			function Formcontroller($scope,$http)
			{

			
			//get review angular js
			$scope.getreview = function(){

			$http({
			method: 'get',
			url:  "<?=base_url('getorder')?>",
			}).then(function successCallback(response) {
			// Assign response to users object
			$scope.reviews = response.data;
			}); 
			}
			$scope.getreview();
			
		


			//add review  angular js
			// $scope.review = {};

			// $scope.submitForm=function()
			// {	
			// 	$scope.review['product_id'] = '<?=$productData['id']?>';

			// 	$http({
			// 		method:'post',
			// 		url: "<?=base_url('addproductreview')?>",
			// 		data : $scope.review, 
			// 		headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
			// 	}) .then(function(response){
			// 		$scope.getreview();
			// 		alert("Add cart successfully");
					
			// 	}, function(error){
			// 		$scope.errortext = "Unable to post review";
			// 		console.log($scope.errortext);
			// 	});
			// };
		


		</script>	

	</body>

</html>