<?php

namespace App\Models;

use CodeIgniter\Model;

class LaboratorioModel extends Model
{
	
	protected $table = 'LaboratoriAnalisi';

	
	public function getUtente($email, $password) {
		
		
		$laboratorio = $this->asArray()
					->where(['Email' => $email])
					->first();
		
		
		if (empty($laboratorio))
		{
			return 1;
		}
		if ($laboratorio['Password'] != $password) {
			return 2;
		}
		return 3;
	}
	
}