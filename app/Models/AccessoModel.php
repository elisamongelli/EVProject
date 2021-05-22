<?php

namespace App\Models;

use CodeIgniter\Model;

class AccessoModel extends Model
{/*
    protected $table = 'news';.
	
	protected $allowedFields = ['title', 'slug', 'body'];
	
	public function getNews($slug = false)
	{
		if ($slug === false)
		{
			return $this->findAll();
		}

		return $this->asArray()
					->where(['slug' => $slug])
					->first();
	}*/
	
	protected $table = 'Cittadini';
	
	public function controlla($ruolo, $email, $password) {
		
		
		/*
		switch ($ruolo) {
			case "Cittadino":
				$table = 'Cittadini';
				break;
			case "Datore di Lavoro":
				$table = 'Datori';
				break;
			case "Medico di Medicina Generale":
				$table = 'Medici';
				break;
			case "Laboratorio di Analisi":
				$table = 'Laboratori';
				break;
			case "Azienda Sanitaria":
				$table = 'AziendeSanitarie';
				break;
		}*/
		/*
		if ($ruolo == 'Cittadino') {
			protected $table = 'Cittadini';
		}
		
		$user = $this->find($email);*/
		
		$user = $this->asArray()
					->where(['Email' => $email])
					->first();
		
		
		if (empty($user['Email']))
		{
			return 1;
		}
		/*
		if ($user['Password'] == $password) {
			return true;
		}
		else return false;*/
		
		//echo('$user');
	}
	
}