<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Registrazione extends Controller
{
    public function index()
    {
        return view('ruoli');
    }
	
	public function visualizzaForm($ruolo)
	{
		
		switch ($ruolo) {
			case "Cittadino":
				echo view('registrazioni/reg_cittadino');
				break;
			case "Datore di Lavoro":
				echo view('registrazioni/reg_datore');
				break;
			case "Medico di Medicina Generale":
				echo view('registrazioni/reg_medico');
				break;
			case "Laboratorio di Analisi":
				echo view('registrazioni/reg_laboratorio');
				break;
			case "Azienda Sanitaria":
				echo view('registrazioni/reg_aziendaSanitaria');
				break;
		}
	}
	
	public function creaAccount($ruolo)
	{
		
		switch ($ruolo) {
			case "Cittadino":
				$nome = $_POST['nome'];
				echo ($nome);/*
				INSERIRE CONTROLLO TRA $_POST['password'] e $_POST['confermaPassword']
				$model = new CittadinoModel();*/
				break;
			case "Datore":
				$model = new DatoreModel();
				break;
			case "Medico":
				$model = new MedicoModel();
				break;
			case "Laboratorio":
				$model = new LaboratorioModel();
				break;
			case "AziendaSanitaria":
				$model = new AziendaSanitariaModel();
				break;
		}
	}
}