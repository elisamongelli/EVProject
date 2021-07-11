<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">

<!-- efettua pagamento -->

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
      <form method="POST" action="/Pagamento/salvaDati" id="formPagamento">

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
            <input type="text" id="ccnum" name="cardnumber">
			
			
            <label for="expmonth">Mese</label>
            <!--<input type="text" id="month" name="expmonth">-->
			 <select name="mese" class="form-control" required>
			 <option class="firstOption" disabled selected value="">Mese</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			 </select>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Anno</label>
                <!--<input type="text" id="year" name="expyear">-->
				<select name="anno" class="form-control" required>
				<option class="firstOption" disabled selected value="">Anno</option>
				<?php 
				for($i = 2021; $i < 2031; $i++) {

						echo "<option class='otherOptions'>$i</option>";

				}
				?>
				<!--<option value="1940">1940</option>
				<option value="1941">1941</option>
				<option value="1942">1942</option>
				<option value="1943">1943</option>
				<option value="1944">1944</option>
				<option value="1945">1945</option>
				<option value="1946">1946</option>
				<option value="1947">1947</option>
				<option value="1948">1948</option>
				<option value="1949">1949</option>
				<option value="1950">1950</option>
				<option value="1951">1951</option>
				<option value="1952">1952</option>
				<option value="1953">1953</option>
				<option value="1954">1954</option>
				<option value="1955">1955</option>
				<option value="1956">1956</option>
				<option value="1957">1957</option>
				<option value="1958">1958</option>
				<option value="1959">1959</option>
				<option value="1960">1960</option>
				<option value="1961">1961</option>
				<option value="1962">1962</option>
				<option value="1963">1963</option>
				<option value="1964">1964</option>
				<option value="1965">1965</option>
				<option value="1966">1966</option>
				<option value="1967">1967</option>
				<option value="1968">1968</option>
				<option value="1969">1969</option>
				<option value="1970">1970</option>
				<option value="1971">1971</option>
				<option value="1972">1972</option>
				<option value="1973">1973</option>
				<option value="1974">1974</option>
				<option value="1975">1975</option>
				<option value="1976">1976</option>
				<option value="1977">1977</option>
				<option value="1978">1978</option>
				<option value="1979">1979</option>
				<option value="1980">1980</option>
				<option value="1981">1981</option>
				<option value="1982">1982</option>
				<option value="1983">1983</option>
				<option value="1984">1984</option>
				<option value="1985">1985</option>
				<option value="1986">1986</option>
				<option value="1987">1987</option>
				<option value="1988">1988</option>
				<option value="1989">1989</option>
				<option value="1990">1990</option>
				<option value="1991">1991</option>
				<option value="1992">1992</option>
				<option value="1993">1993</option>
				<option value="1994">1994</option>
				<option value="1995">1995</option>
				<option value="1996">1996</option>
				<option value="1997">1997</option>
				<option value="1998">1998</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>-->
				</select>
              </div>
			  
			  
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="c" name="cvv">
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
      <p><span>€<?= esc($prezzo) ?></span></p></br>
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
		<div class="textError" id="errorString" style="display:none">Tutti i campi sono obbligatori</div>
		<button type="button" onClick="submitForm();" class="w3-button w3-section w3-teal w3-ripple accesso"> Conferma Pagamento</button>
		
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
	

<!-- script che controlla i campi prima di fare submit -->	
<script text="text/javascript">

window.scrollBy({ 
  top: 100, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});

	function submitForm(){
		var form = document.getElementById('formPagamento');
		
		var error=false;

		//controlla tutti i campi di form (es. form.card number, form.nome carta ecc...) se senza errori submit
		
		if(form.nome[0].value == ""){
			form.nome[0].classList.add("errordiv");
			error=true;
		}else{
			form.nome[0].classList.remove("errordiv");
		}
		
		if(form.cognome.value == ""){
			form.cognome.classList.add("errordiv");
			error=true;
		}else{
			form.cognome.classList.remove("errordiv");
		}
		
		if(form.codiceFiscale.value == ""){
			form.codiceFiscale.classList.add("errordiv");
			error=true;
		}else{
			form.codiceFiscale.classList.remove("errordiv");
		}
		
		if(form.email.value == ""){
			form.email.classList.add("errordiv");
			error=true;
		}else{
			form.email.classList.remove("errordiv");
		}
		
		if(form.citta.value == ""){
			form.citta.classList.add("errordiv");
			error=true;
		}else{
			form.citta.classList.remove("errordiv");
		}
		
		if(form.indirizzo.value == ""){
			form.indirizzo.classList.add("errordiv");
			error=true;
		}else{
			form.indirizzo.classList.remove("errordiv");
		}
		
		if(form.cap.value == "" || form.cap.value.length!=5){
			form.cap.classList.add("errordiv");
			error=true;
		}else{
			form.cap.classList.remove("errordiv");
		}
		
		
		if(form.cardname.value == ""){
			form.cardname.classList.add("errordiv");
			error=true;
		}else{
			form.cardname.classList.remove("errordiv");
		}
		
	
		var ccnum = form.cardnumber.value.replaceAll('-', '');
		 
		 
		if(ccnum == "" || ccnum.length!= 16){
			form.ccnum.classList.add("errordiv");
			error=true;
		}else{
			form.ccnum.classList.remove("errordiv");
		}
		
		
		/*if(expmonth == "" || expmonth.length!= 2){
			form.expmonth.classList.add("errordiv");
			error=true;
		}else{
			form.expmonth.classList.remove("errordiv");
		}
				
		
		if(expyear == "" || expyear.length!= 4){
			form.expyear.classList.add("errordiv");
			error=true;
		}else{
			form.expyear.classList.remove("errordiv");
		}
		
		if(cvv == "" || cvv.length!= 3){
			form.cvv.classList.add("errordiv");
			error=true;
		}else{
			form.cvv.classList.remove("errordiv");
		}*/


		
		if(!error){
			document.getElementById("errorString").style.display = "none";
			form.submit();
			
		}else{
			document.getElementById('formPagamento').scrollIntoView();
			document.getElementById("errorString").style.display = "block";
		}
			
		
			
		};

    
</script>
	
</body>







