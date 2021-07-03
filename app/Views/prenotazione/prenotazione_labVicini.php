<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">

<head>
	<title>Prenotazione Tampone</title>
	<style>
		#map {
			height: 500px;
			width: 90%;
		}
	</style>
</head>

<body>
  <div class="main-content">
    <!-- Top navbar -->
	<?php
		include __DIR__ . "/../common/navbar_account_funzionalita.php";
	?>
	<!-- Top navbar -->

    <!-- Header --><!--
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(/img/photo_2021-05-19_18-17-14.jpg); background-position: center;">
      <!-- Mask --
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid align-items-center" style="padding-top: 200px">
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 order-xl-1 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="text-center">
                <!--<h2 style="color:black;">Informazioni e FAQ</h2></br>-->
				<center>
					
					<div id="map"></div>
					
					<script type="text/javascript">
						if (navigator.geolocation) {
							navigator.geolocation.getCurrentPosition(function (p) {
								var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
								var mapOptions = {
									center: LatLng,
									zoom: 13,
									mapTypeId: google.maps.MapTypeId.ROADMAP
								};
								var map = new google.maps.Map(document.getElementById("map"), mapOptions);
								var marker = new google.maps.Marker({
									position: LatLng,
									map: map,
									title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.longitude
								});
								google.maps.event.addListener(marker, "click", function (e) {
									var infoWindow = new google.maps.InfoWindow();
									infoWindow.setContent(marker.title);
									infoWindow.open(map, marker);
								});
							});
						} else {
							alert('Geo Location feature is not supported in this browser.');
						}
						</script>
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAGD-JlQ-N1_FSLdrJJu1g6i1oLpSQJNA&callback=initMap"></script>
					
					<!--
					<div id="map"></div>
					
					<script>
						const successCallback = (position) => {
							console.log(position);
						};
						
						const errorCallback = (error) => {
							console.error(error);
						};
						
						navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
						
						function initMap() {
							var location = position;
							var map = new google.maps.Map(document.getElementById("map"), {
								zoom: 4,
								center: location
							});
							var marker = new google.maps.Marker({
								position: location,
								map: map
							});
						}
						
						//navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
					</script>
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAGD-JlQ-N1_FSLdrJJu1g6i1oLpSQJNA&callback=initMap"></script>
					
					
					<div id="map"></div>
					
					<script type="text/javascript">
						function initMap() {
							var location = {lat: -25.363, lng: 131.044};
							var map = new google.maps.Map(document.getElementById("map"), {
								zoom: 4,
								center: location
							});
							var marker = new google.maps.Marker({
								position: location,
								map: map
							});
						}
					</script>
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAGD-JlQ-N1_FSLdrJJu1g6i1oLpSQJNA&callback=initMap"></script>
					-->
					<!--
					<form name="labPrenotazione" method="post" action="/Prenotazione/scegliData">
						
						<p class="mt-0">
							<label>Numero di prenotazioni:</label>
							<select id="numero" name="numeroPrenotazioni" style="width:70%" class="form-control" required>
							  <option class="firstOption">1</option>
							  <?php
								for ($i = 2; $i <= 10; $i++)
								{
									echo "<option class='otherOptions'>$i</option>";
								}
							  ?>
							</select>
						</p>
						
						<?php
							if (session()->get('ruolo') == 'Datore') {
								echo "
									<p class='mt-0'>
										<label>Nome Azienda</label>
										<input class='form-control' type='text' name='azienda' placeholder='Nome Azienda' value='".session()->get('nomeazienda')."' style='width:70%' required>
									</p>
								";
							}
						?>
					  
					  <button class="w3-button w3-section w3-teal w3-ripple accesso"> Avanti  &rarr; </button>
					</form>-->
				</center>
			  </div>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      <!--</div>
    </div>
  </div>-->
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <!--<div class="copyright">
          <p>Made with <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Argon Dashboard</a> by Creative Tim</p>
        </div>-->
      </div>
    </div>
  </footer>
</body>

