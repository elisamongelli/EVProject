<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/css/stle-custom.css" rel="stylesheet">
<link href="../css/login.css" rel="stylesheet">

<body>
	<div class="main-content">
		<?php include __DIR__ . "/../common/navbar_accesso.php";?><!--

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
		
		<div id="error2" class="errorDiv" >La password inserita è errata</div>

		<h1 class="h1-ruoli" style='text-align:center';><b></br></br>Accedi</b></h1>
		
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
					<div class="card-body pt-md-4"><!--
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
					  <center>
						<form method="post" action="controllaCampi">
						
							<p class="pt-md-4">
								<input class="form-control" type="text" name="email" placeholder="Email" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="password" name="password" placeholder="Password" style="width:90%" required>
							</p>
							
							<p class="pt-md-4" id="mySelect" style="width:90%">
								<select name="ruolo" class="form-control" required>
								  <option class="firstOption" disabled selected value="">Ruolo</option>
								  <option class="otherOptions">Cittadino</option>
								  <option class="otherOptions">Datore di Lavoro</option>
								  <option class="otherOptions">Medico di Medicina Generale</option>
								  <option class="otherOptions">Laboratorio di Analisi</option>
								  <option class="otherOptions">Azienda Sanitaria</option>
								</select>
							</p>
							
							<button class="w3-button w3-section w3-teal w3-ripple accesso"> Accedi </button>
						</form>
						<p style="color:black">Non sei ancora registrato?<a href="/Registrazione">&nbsp Registrati</a></p>
					  </center>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</body>


