<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">

<head><title>Il Mio Account</title></head>

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
      <div class="container-fluid align-items-center" style="padding-top: 70px">
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
	
			  <div style="text-align:right"><a href="/Account/modificaInfo/<?= esc(session()->get('ruolo')) ?>"><i class="fas fa-pen-alt"></i>    Modifica</a></div>
				
              <div class="text-center">
                <!--<h2 style="color:black;">Informazioni e FAQ</h2></br>-->
                <div class="h3 mt-4"></br>Nome</span></div></br>
                <div class="h2 mt--3"></br><?= esc(session()->get('nome')) ?></span></div></br>
                <div class="h3 mt-4"></br>Partita IVA</span></div></br>
				<div class="h2 mt--3"></br><?= esc(session()->get('partitaIVA')) ?></span></div></br>
                <div class="h3 mt-4"></br>Codice Fiscale</span></div></br>
				<div class="h2 mt--3"></br><?= esc(session()->get('codicefiscale')) ?></span></div></br>
				
				<hr width="70%" align="center" style="margin-left:15%">
				
                <div class="h3 mt-4"></br>Email</span></div></br>
				<div class="h2 mt--3"></br><?= esc(session()->get('email')) ?></span></div></br>
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

