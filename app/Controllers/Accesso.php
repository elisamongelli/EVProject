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
	{
		
		$ruolo = $_POST['ruolo'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		
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
					return redirect()->to('/Dashboard/vdDashboard/Cittadino');
					break;
				case "Datore di Lavoro":
					return redirect()->to('/Dashboard/vdDashboard/Datore');
					break;
				case "Medico di Medicina Generale":
					return redirect()->to('/Dashboard/vdDashboard/Medico');
					break;
				case "Laboratorio di Analisi":
					return redirect()->to('/Dashboard/vdDashboard/Laboratorio');
					break;
				case "Azienda Sanitaria":
					return redirect()->to('/Dashboard/vdDashboard/AziendaSanitaria');
					break;
			}
		}
	}
}