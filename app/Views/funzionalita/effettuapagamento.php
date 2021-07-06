<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">


<body style="color: black">
	<div class="main-content">
		<?php
		$ruolo = "Cittadino";
		include __DIR__ . "/../common/navbar_account_funzionalita.php";
		?>
		
		
			<div class="container-fluid pt-5">
			  <div class="row">
				<div class="col-xl-8 order-xl-1 mb-5 mb-xl-0">
		
				<center>
				
				<link rel="stylesheet" href="css/pagamento.css">
				
				<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST" action="/Pagamento/salvaDati">

        <div class="row">
          <div class="col-50">
			<p class="mt-0">
			<label>Nome</label>
			<input class="form-control" type="text" name="nome" placeholder="Nome" value="<?= esc(session()->get('nome')) ?>" style="width:70%" required>
			
			<label>Cognome</label>
			<input class="form-control" type="text" name="cognome" placeholder="Cognome" value="<?= esc(session()->get('cognome')) ?>" style="width:70%" required>
            
			<label>Codice Fiscale</label>
			<input class="form-control" type="text" name="codiceFiscale" placeholder="Codice Fiscale" value="<?= esc(session()->get('codicefiscale')) ?>" style="width:70%" required>
							
			<label>Email</label>
			<input class="form-control" type="text" name="email" placeholder="Email" value="<?= esc(session()->get('email')) ?>" style="width:70%" required>
            
			<label>Città di Residenza</label>
			<input class="form-control" type="text" name="citta" style="width:70%" required>
			
			<label>Indirizzo</label>
			<input class="form-control" type="text" name="indirizzo" style="width:70%" required>
			
			<label>CAP</label>
			<input class="form-control" type="text" name="cap" style="width:70%" required>
            

            <!--<div class="row">
              <div class="col-50">
                <label for="state">Stato</label>
                <input type="text" id="state" name="state" placeholder="IT">
              </div>
              <div class="col-50">
                <label for="zip">CAP</label>
                <input type="text" name="cap">
              </div>
            </div>-->
          </div>

          <div class="col-50">
            <label for="fname">Carta di credito accettata : </label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nome sulla carta</label>
            <input type="text" id="nome" name="cardname">
            <label for="ccnum">Numero della carta</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Mese</label>
            <input type="text" id="expmonth" name="expmonth">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Anno</label>
                <input type="text" id="expyear" name="expyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv">
              </div>
			  <!--<div class="col-50">
		      <br><b><label for="expmonth">Prezzo 25€</label></b></br>
		      </div>-->
            </div>
			 <div class="col-25">
    <div class="container">
      <br><br><h4>Prezzo del Tampone 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <!--<b>4</b>-->
        </span>
      </h4>
      <p><span>€25</span></p></br>
      <!--<p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>-->
      <!--<hr>-->
      <!--<p>Total <span class="price" style="color:black"><b>$30</b></span></p>-->
    </div>
  </div>
          </div>

        </div>

        <!--<input type="submit" value="Conferma Pagamento" class="btn">-->
		<button class="w3-button w3-section w3-teal w3-ripple accesso"> Conferma Pagamento</button>
		
      </form>
    </div>
  </div>
</div>					
				</center>
					
				  
				</div>
			  </div>
			</div>
		</div>
	</div>
</body>







