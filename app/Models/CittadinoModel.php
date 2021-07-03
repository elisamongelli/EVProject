<?php

namespace App\Models;

use CodeIgniter\Model;

class CittadinoModel extends Model
{
	
	protected $table = 'Cittadini';
	
	protected $allowedFields = ['Nome', 'Cognome', 'CodiceFiscale', 'Email', 'Password'];
	

	
	public function getUtente($email, $password) {
		
		
		$cittadino = $this->asArray()
					->where(['Email' => $email])
					->first();
		
		if (empty($cittadino))
		{
			return 1;
		}
		if ($cittadino['Password'] != $password) {
			return 2;
		}
		return 3;
	}
}