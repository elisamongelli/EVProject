<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">

<body>
	<div class="main-content">
		<?php
		$ruolo = "AziendaSanitaria";
		include __DIR__ . "/../common/navbar_account_funzionalita.php";
		?><!--

		<div class="w3-container w3-half w3-margin-top">
			<div class="w3-container w3-card-4">
				<form method="post" action="login.php">

					<p>
					<input class="w3-input" type="text" name="name" style="width:90%" required>
					<label>Email</label></p>
					<p>
					<input class="w3-input" type="password" name="password" style="width:90%" required>
					<label>Password</label></p>
				
					<button class="w3-button w3-section w3-teal w3-ripple"> Log In </button>
				</form>

				<a href="signin.html"><button class="w3-button w3-section w3-teal w3-ripple singin"> Sign Up </button>
				
			</div>
		</div>-->

		<h1 class="h1-ruoli" style='text-align:center';><b></br></br>Il Mio Account</b></h1>
		
		<div class="header pb-8 pt-0 d-flex align-items-center" style="min-height: 83%; background-color:#1a174dc9">
		
		
		<!--<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 94%; background-color:#1a174dc9">-->
		<!-- Mask --
		<span class="mask bg-gradient-default opacity-8"></span>-->
			<div class="container-fluid pt-5">
			  <div class="row">
				<div class="col-xl-8 order-xl-1 mb-5 mb-xl-0">
				  <div class="card card-profile shadow"><!--
					<div class="row justify-content-center">
					  <div class="col-lg-3 order-lg-2">
						<div class="card-profile-image">
						  <a href="#">
							<img src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg" class="rounded-circle">
						  </a>
						</div>
					  </div>
					</div>
					<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
					  <div class="d-flex justify-content-between">
						<a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
						<a href="#" class="btn btn-sm btn-default float-right">Message</a>
					  </div>
					</div>-->
					<div class="card-body pt-md-4"><b><span style="color: #9f9ee5;">
						<?php
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
						

						$sql = "SELECT Nome, CodiceFiscale, PartitaIva, Email FROM AziendeSanitarie LIMIT 1";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							echo "<br>" . "NOME AZIENDA: " . "&nbsp&nbsp" . $row["Nome"]. "<br><br><br>" . "CODICE FISCALE AZIENDA: " . "&nbsp&nbsp" . $row["CodiceFiscale"]. "<br><br><br>" . "EMAIL: " . "&nbsp&nbsp" . $row["Email"]. "<br>"; 
						  }
						} else {
						  echo "0 results";
						}
						$conn->close();
						?></b></span></div><!--
					  <div class="text-center">
						<h2 style="color:black;">OPUSCOLO INFORMATIVO</h2></br>
						<div class="h3 mt-4"><span style="color:#3a3133c7;">
						  QUANTE E QUALI SONO LE TIPOLOGIE DI TAMPONE?</span>
						</div></br>
						<div class="h3 mt-4"><span style="color:#3a3133c7;">
						  COSA DEVO FARE PRIMA DI EFFETTUARE IL TAMPONE?</span>
						</div></br>
						<div class="h3 mt-4"><span style="color:#3a3133c7;">
						  COME DEVO COMPORTARMI SE IL RISULTATO DEL MIO TEST E' NEGATIVO?</br>E COME INVECE SE E' POSITIVO?</span>
						</div></br>
						</br></br><a href="Opuscolo"><b>Consulta Opuscolo</b></a></br></br><!--
						<button class="w3-button w3-section w3-teal w3-ripple opuscolo"> Leggi tutto </button>
						</br></br><a href="docs/Consenso test antigenico compilabile.pdf" download>CONSENSO AL TEST</a></br></br>--
					  </div>-->
            <div class="card-body pt-0 pt-md-4">
              <div class="text-center">
                <!--<h2 style="color:black;">Informazioni e FAQ</h2></br>-->
		        <!--
				<button class="w3-button w3-section w3-teal w3-ripple opuscolo"> Leggi tutto </button>
				</br></br><a href="docs/Consenso test antigenico compilabile.pdf" download>CONSENSO AL TEST</a></br></br>-->
              </div>
            </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</body>