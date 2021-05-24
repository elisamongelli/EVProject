<?php

namespace App\Controllers;

use App\Models\CittadinoModel;
use App\Models\DatoreModel;
use App\Models\MedicoModel;
use App\Models\LaboratorioModel;
use App\Models\AziendaSanitariaModel;

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
		
		// $model = new CittadinoModel();
		
		
		switch ($ruolo) {
			case "Cittadino":
				$model = new CittadinoModel();
				break;
			case "Datore di Lavoro":
				$model = new DatoreModel();
				break;
			case "Medico di Medicina Generale":
				$model = new MedicoModel();
				break;
			case "Laboratorio di Analisi":
				$model = new LaboratorioModel();
				break;
			case "Azienda Sanitaria":
				$model = new AziendaSanitariaModel();
				break;
		}
		
		
		$userValido = $model->getUtente($email, $password);
		
		
		if ($userValido == 1) {
			echo view('errors/emailInesistente');
		}
		else if ($userValido == 2) {
			echo view('errors/passwordErrata');
		}
		else if ($userValido == 3) {
			switch ($ruolo) {
				case "Cittadino":
					echo view('opuscolo');
					break;
				case "Datore di Lavoro":
					echo view('opuscolo');
					break;
				case "Medico di Medicina Generale":
					echo view('opuscolo');
					break;
				case "Laboratorio di Analisi":
					echo view('opuscolo');
					break;
				case "Azienda Sanitaria":
					echo view('opuscolo');
					break;
			}
		}
	}
}