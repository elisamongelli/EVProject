<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">

<body>
	<div class="main-content">
		<?php include __DIR__ . "/../common/navbar_accesso.php";?>
		
		<div id="error2" class="errorDiv" >L'email è già in uso. Inserisci un'altra email oppure <a href="/Accesso" style="color:#525f7f"><u>effettua l'accesso</u></a></div>

		<h1 class="h1-ruoli" style='text-align:center';><b></br></br>Registrati</b></h1>
		
		<div class="header pb-8 pt-0 d-flex align-items-center" style="min-height: 83%; background-color:#1a174dc9">
			<div class="container-fluid pt-5">
			  <div class="row">
				<div class="col-xl-8 order-xl-1 mb-5 mb-xl-0">
				  <div class="card card-profile shadow">
					<div class="card-body pt-md-4">
					
					  <center>						
						<form method="post" action="/Registrazione/creaAccount/Datore">
						
							<p class="pt-md-4">
								<input class="form-control" type="text" name="nome" placeholder="Nome" value="<?= esc($Nome)?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="cognome" placeholder="Cognome" value="<?= esc($Cognome)?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="codiceFiscale" placeholder="Codice Fiscale" value="<?= esc($CodiceFiscale)?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="nomeAzienda" placeholder="Nome Azienda" value="<?= esc($NomeAzienda)?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="partitaIVA" placeholder="Partita IVA" value="<?= esc($PartitaIva)?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="codiceFiscaleAzienda" placeholder="Codice Fiscale Azienda" value="<?= esc($CodiceFiscaleAzienda)?>" style="width:90%" required>
							</p>
							
							<p class="pt-md-4">
								<input class="form-control" type="text" name="email" placeholder="Email" style="width:90%" required>
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


