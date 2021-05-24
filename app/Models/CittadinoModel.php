<?php

namespace App\Models;

use CodeIgniter\Model;

class CittadinoModel extends Model
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