<?php

namespace App\Models;

use CodeIgniter\Model;

class DatoreModel extends Model
{
	
	protected $table = 'DatoriLavoro';
	
	protected $allowedFields = ['Nome', 'Cognome', 'CodiceFiscale', 'NomeAzienda', 'PartitaIva', 'CodiceFiscaleAzienda', 'Email', 'Password'];
	
	
	public function getUtente($email, $password) {
		
		
		$datore = $this->asArray()
					->where(['Email' => $email])
					->first();
		
		
		if (empty($datore))
		{
			return 1;
		}
		if ($datore['Password'] != $password) {
			return 2;
		}
		return 3;
	}
	
}