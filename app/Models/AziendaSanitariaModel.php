<?php

namespace App\Models;

use CodeIgniter\Model;

class AziendaSanitariaModel extends Model
{
	
	protected $table = 'AziendeSanitarie';
	
	protected $allowedFields=['Nome','PartitaIva','CodiceFiscale','Email','Password'];
	
	
	public function getUtente($email, $password) {
		
		
		$aziende = $this->asArray()
					->where(['Email' => $email])
					->first();
		
		
		if (empty($aziende))
		{
			return 1;
		}
		if ($aziende['Password'] != $password) {
			return 2;
		}
		return 3;
	}
	
}