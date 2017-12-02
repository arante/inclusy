<?php
// header.php

include 'partials/header.php';

?>

	<div class="container text-center">

		<img id="logo" src="img/logo.png">

		<!-- messenger bot id: 136105417165279 -->

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

	    <div class="fb-page" 
	         data-href="https://www.facebook.com/136105417165279/" 
	         data-tabs="messages" 
	         data-width="400" 
	         data-height="300" 
	         data-small-header="true">
	      <div class="fb-xfbml-parse-ignore">
	        <blockquote></blockquote>
	      </div>
	    </div>

	</div>

<?php
// footer.php

include 'partials/footer.php';

?>