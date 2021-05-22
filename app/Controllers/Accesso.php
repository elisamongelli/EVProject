<?php

namespace App\Controllers;

use App\Models\AccessoModel;
use CodeIgniter\Controller;

class Accesso extends Controller
{
    public function index()
    {		
		return view('accesso');
    }
	
	public function controllaCampi()
	{/*
		$model = new NewsModel();

		if ($this->request->getMethod() === 'post' && $this->validate([
				'title' => 'required|min_length[3]|max_length[255]',
				'body'  => 'required',
			]))
		{
			$model->save([
				'title' => $this->request->getPost('title'),
				'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
				'body'  => $this->request->getPost('body'),
			]);

			echo view('news/success');

		}
		else
		{
			echo view('templates/header', ['title' => 'Create a news item']);
			echo view('news/create');
			echo view('templates/footer');
		}*/
		
		
		$ruolo = $_POST['ruolo'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		// echo($ruolo.$email.$password);
		
		$model = new AccessoModel();
		
		$userValid = $model->controlla($ruolo, $email, $password);
		
		if ($userValid == 1) {
			// $error = "error1";
			echo view('emailEsistente');
		}/*
		else if ($userValid == true) {
			echo('CORRETTO');
		}
		else echo('SBAGLIATO');*/
		
		//echo($userValid);
		// echo($user['Email']['Password']);
	}
}