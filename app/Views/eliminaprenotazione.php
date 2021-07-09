<?php

	$cf = esc(session()->get('codicefiscale'));
	
	$con = mysqli_connect('freedb.tech','freedbtech_prenotatamponi','tamponi');
    $mysqli = mysqli_select_db($con, 'freedbtech_PrenotaTamponi');
	
	$query = mysqli_query($con, "SELECT * FROM Prenotazioni WHERE CodiceFiscale='$cf'");
	
	
	if($query){
		$query2 = mysqli_query($con, "DELETE FROM Prenotazioni WHERE CodiceFiscale='$cf'");
		echo view("funzionalita/calendario_paziente");
	}
	
	mysqli_close($con);
	
	
?>

