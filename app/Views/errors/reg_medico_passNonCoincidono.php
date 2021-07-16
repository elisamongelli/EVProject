<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">

<body>
	<div class="main-content">
		<?php include __DIR__ . "/../common/navbar_accesso.php";?>
		
		<div id="error2" class="errorDiv" >Password e Conferma Password non coincidono</div>

<div class="header pb-8 pt-5 pt-lg-88 d-flex align-items-center" style="min-height: 100%; background-image: url(/img/photo_2021-05-19_18-17-14.jpg); background-position: bottom; position: relative">
      <!-- Mask -->
	  
      <span class="mask bg-gradient-default opacity-8"></span>
		
		
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
						<h1>Registrati </h1></br></br>					  
						<form method="post" action="/Registrazione/creaAccount/Medico">
						
							<p class="pt-md-4">
								<input class="form-control" type="text" name="nome" placeholder="Nome" value="<?= esc($Nome) ?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="cognome" placeholder="Cognome" value="<?= esc($Cognome) ?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="codiceFiscale" placeholder="Codice Fiscale" value="<?= esc($CodiceFiscale) ?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="partitaIva" placeholder="Partita IVA" value="<?= esc($PartitaIva) ?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="codiceRegionale" placeholder="Codice Regionale" value="<?= esc($CodiceRegionale) ?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4" id="mySelect" style="width:90%">
								<select name="AziendaSanitariaLocale" class="form-control" required>
								  <option class="firstOption"><?= esc($AziendaSanitariaLocale) ?></option>
								  <?php
									$codiciASL = file(__DIR__ . "/../registrazioni/asl_italiane.txt", 1);

									foreach ($codiciASL as $codice)
									{
									   echo "<option class='otherOptions'>$codice</option>";
									}
								  ?>
								</select>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="email" placeholder="Email" value="<?= esc($Email) ?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="password" name="password" placeholder="Password" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="password" name="confermaPassword" placeholder="Conferma Password" style="width:90%" required>
							</p>
							
							<button class="w3-button w3-section w3-teal w3-ripple accesso"> Registrati </button>
						</form>
					  </center>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</body>


