<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicoModel extends Model
{
	
	protected $table = 'Medici';

	
	public function getUtente($email, $password) {
		
		
		$medico = $this->asArray()
					->where(['Email' => $email])
					->first();
		
		
		if (empty($medico))
		{
			return 1;
		}
		if ($medico['Password'] != $password) {
			return 2;
		}
		return 3;
	}
	
}