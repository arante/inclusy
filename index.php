<?php
// header.php

include 'partials/header.php';

?>

	<!-- messenger bot id: 136105417165279 -->

	<div class="wrapper">
		<h1>Inclusy Bank</h1>

		<script>      
			window.fbAsyncInit = function() {
			FB.init({
			appId      : '95100348886',
			xfbml      : true,
			version    : 'v2.6'
			});
			};

			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));      
		</script>

		<div class="fb-messengermessageus" 
			messenger_app_id="95100348886" 
			page_id="136105417165279" 
			color="blue"
			size="large">
		</div>

	</div>

<?php
// footer.php

include 'partials/footer.php';

?>