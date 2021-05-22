<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">


<head>
	<title>Scelta Ruolo</title>
</head>

<body>
	<div class="main-content">
		<?php include 'common/navbar_accesso.php';?>
	</div>
		
		<h1 class="h1-ruoli" style='text-align:center';><b></br></br>Scegli il tuo ruolo</b></h1>
		
		<div class="header pb-8 pt-0 d-flex align-items-center" style="min-height: 83%; background-color:#1a174dc9">
		
		<div class="container-fluid pt-5">
		  <div class="row">
			<div class="col-xl-8 order-xl-1 mb-5 mb-xl-0">
			  <div class="card card-profile shadow">
				<div class="card-body pt-md-4">
				  <center><!--
					<form method="post" action="login.php">
					
						<p class="pt-md-4">
							<input class="form-control" type="text" name="email" placeholder="Email" style="width:90%" required>
						</p>
						
						<p class="pt-md-4">
							<input class="form-control" type="password" name="password" placeholder="Password" style="width:90%" required>
						</p>
						
						<p class="pt-md-4" id="mySelect">
							<select class="form-control" required>
							  <option class="firstOption" disabled selected>Ruolo</option>
							  <option>Cittadino</option>
							  <option>Datore di Lavoro</option>
							  <option>Medico di Medicina Generale</option>
							  <option>Laboratorio di Analisi</option>
							  <option>Azienda Sanitaria</option>
							</select>
						</p>
						
						<button class="w3-button w3-section w3-teal w3-ripple accesso"> Accedi </button>
					</form>
					<p style="color:black">Non sei ancora registrato?<a href="#">&nbsp Registrati</a></p>-->
					
					<a href="Registrazione"><button class="w3-button w3-section w3-teal w3-ripple ruoli"> Cittadino </button></a></br></br></br>
					<a href="Registrazione"><button class="w3-button w3-section w3-teal w3-ripple ruoli"> Datore di Lavoro </button></a></br></br></br>
					<a href="Registrazione"><button class="w3-button w3-section w3-teal w3-ripple ruoli"> Medico di Medicina Generale </button></a></br></br></br>
					<a href="Registrazione"><button class="w3-button w3-section w3-teal w3-ripple ruoli"> Laboratorio di Analisi</button></a></br></br></br>
					<a href="Registrazione"><button class="w3-button w3-section w3-teal w3-ripple ruoli"> Azienda Sanitaria </button></a></br></br>
				  </center>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</body>


