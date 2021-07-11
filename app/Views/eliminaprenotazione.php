<?php

	$cf = esc(session()->get('codicefiscale'));
	
	$con = mysqli_connect('remotemysql.com','iESeA9LQ9x','TQ5cw89N0z');
    $mysqli = mysqli_select_db($con, 'iESeA9LQ9x');
	
	$query = mysqli_query($con, "SELECT * FROM Prenotazioni WHERE CodiceFiscale='$cf'");
	
	if($query){
		$query2 = mysqli_query($con, "DELETE FROM Prenotazioni WHERE CodiceFiscale='$cf'");
		$query3 = mysqli_query($con, "DELETE FROM PrenotazioniDati WHERE CodiceFiscale='$cf'");
		$query4 = mysqli_query($con, "DELETE FROM Pagamenti WHERE CodiceFiscale='$cf'");
		echo view("funzionalita/calendario_paziente");
	}
	
	mysqli_close($con);
	
	
?>
  
