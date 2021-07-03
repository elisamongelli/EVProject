<?php

namespace App\Models;

use CodeIgniter\Model;

class CittadiniPositiviModel extends Model
{
	
	protected $table = 'CittadiniPositivi';
	
	protected $allowedFields = ['Nome', 'Cognome', 'CodiceFiscale', 'Email'];
	
	
	public function getUtente($cf) {
		
		
		$positivo = $this->asArray()
					->where(['CodiceFiscale' => $cf])
					->first();
		
		
		if (empty($positivo))
		{
			return 1;
		}
		else{
			return 2;
		}
		
	}
	
}