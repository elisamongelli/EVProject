<?php

	
	$con = mysqli_connect('remotemysql.com','iESeA9LQ9x','TQ5cw89N0z');
    $mysqli = mysqli_select_db($con, 'iESeA9LQ9x');
	
	$result = mysqli_query($con, "SELECT * FROM Prenotazioni");
	
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		  
		echo "<div class='date' id='data'>".$row['Data']." ".$row['CodiceFiscale']."</div>";
	  }
	  
	} else {
	  echo "0 results";
	}
	
	mysqli_close($con);
	
	
?>