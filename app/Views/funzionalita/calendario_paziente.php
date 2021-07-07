<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">


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
            <div class="card-body pt-0 pt-md-4" style="padding-top : 4.5rem !important">
	
				
              <div class="text-center">
                <!--<h2 style="color:black;">Informazioni e FAQ</h2></br>-->
				<!--<div class="h3 mt-4"></br>Codice Fiscale</span></div></br>
                <div class="h2 mt--3"></br><?= esc(session()->get('codicefiscale')) ?></span></div></br>-->
				<!--<form method="post" action="DatiCalendario/controllaCampi">
						<p class="mt-0">
						<div class="h3 mt-4"></br>Data</span></div></br>
						<input class="h2 mt--3" type="text" name="data" value="<?= esc(session()->get('data'))?>">
						</p>
				</form>-->
				<div class="h3 mt-4" style="margin-top : -2.5rem !important"></br>Le Tue Prenotazioni</span></div></br>
				<div class="h2 mt--3" style="margin-top :1rem !important"></br><?php
						$servername = "freedb.tech";
						$username = "freedbtech_prenotatamponi";
						$password = "tamponi";
						$dbname = "freedbtech_PrenotaTamponi";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
						}
						

						$sql = "SELECT Data FROM Prenotazioni WHERE CodiceFiscale='" . $_SESSION['codicefiscale'] . "'";
						$result = $conn->query($sql);
						$sql2 = "SELECT Esito FROM Referti WHERE CodiceFiscale='" . $_SESSION['codicefiscale'] . "'";
						$result2 = $conn->query($sql2);
						

						if ($result !== false && $result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							  
							  echo "<div style='color:black;'>" . "Data e ora : " . $row["Data"]. "<br>" . "</div>";
							  
							  if ($result2 !== false && $result2->num_rows > 0) {
								while($row = $result2->fetch_assoc()) {
								
								if($row["Esito"]=="Positivo"){
									echo "<br>" . "<div style='color:black;'>" . "Esito : " ."<div style='color:red;'>" . $row["Esito"]. "<br>" . "</div>";
								}
								else if($row["Esito"]=="Negativo"){
									echo "<br>" . "<div style='color:black;'>" . "Esito : " . "</div>" .  "<div style='color:green;'>" . $row["Esito"]. "<br>" . "</div>";
								}
							}
							  }
							else{
								echo "<span class='deleteMember'>
										<form action='/EliminaPrenotazione' method='POST'>
										<button type='submit'>Elimina Prenotazione</button>
									</form>
									</span>";	       
							}
							  
						  }
						  
						} else {
						  echo "Non hai prenotazioni";
						}
						
						$conn->close();
						?></b></span></div>

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

