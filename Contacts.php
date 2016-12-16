<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
	<style>
       #map-c{
		height: 500px;
        width: 100%;
        z-index: 3;
	}
    </style>

	</head>
	<body>
		<?php include 'login.php' ?>
	<div class="fon-test">
	</div>
	<!--<div class="container clearfix">-->
		<div class="main">
			<?php include 'test.php' ?>
			<div class="content-table">
			<div class="cmap">
	 			<div id="map-c">
	 			</div>
	 		</div>

		<div class="sidebar">
		<form method="get" action="smth.php">
		<p><label for="login">Login</label><br>
			<input type="text" value="" name="login"/>
		</p>
		<p> <label for="subject">Subject</label><br>
			<input type="text" value="" name="subject"/>
		</p>
		<p> <label for="comment">Comment</label><br>
			<input type="textarea" value="" name="comment"/>
		</p>
		<p>
			<input type="radio" name="gender" value="W" /><label>W</label>
			<br>
			<input type="radio" name="gender" value="W" /><label>M</label>
		</p>
		<p>
			<input type="checkbox" name="some" value="answer 1" /><label >answer 1</label>
			<br>
			<input type="checkbox" name="some" value="answer 2" /><label >answer 2</label>
			<br>
			<input type="checkbox" name="some" value="answer 3" /><label >answer 3</label>
		</p>
		<p>
			<input type="file" name="f1"/>
		</p>
		<p>
			<input type="date" value="" name="date1"/>
		</p>
		<p>
			<input type="submit" name="submit" value="send"/>
		</p>
		</form>
		</div>
		</div>
<!--	<script>
      function initMap() {
        var uluru = {lat: 49.993500, lng: 36.230383};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcqt088ZNaengMnfTifVpWkRpTAbEwTbU&callback=initMap">
    </script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcqt088ZNaengMnfTifVpWkRpTAbEwTbU">
    </script>
    <script>
        function initialize(){
            var mapOptions = {
                center: new google.maps.LatLng(49.993500,36.230383),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById('map-c'), mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </div>
<footer>
	</footer>
	</body>
<script src="images.js"></script>
</html>