<?php

namespace App\Controllers;

use App\Models\RefertoModel;

use CodeIgniter\Controller;

class Referto extends Controller
{
    public function index()
    {
		$model = new RefertoModel();
		
		$data = [
			'referti' => $model->getReferti('Medico'),
		];
		
		return view('elenco_referti', $data);
    }
	
	
	public function visualizzaRefertiCittadino()
    {
		$model = new RefertoModel();
		
		$data = [
			'referti' => $model->getReferti('Cittadino'),
		];
		
		return view('elenco_referti', $data);
    }
	
	
	public function visualizzaRefertiDatore()
    {
		$model = new RefertoModel();
		
		$data = [
			'referti' => $model->getReferti('Datore'),
		];
		
		return view('elenco_referti', $data);
    }
	
	
	public function cercaReferto($ruolo)
    {
		$codice = $_POST['codice'];
		
		$model = new RefertoModel();		
		$referto = $model->getReferto($codice, $ruolo);
		
		
		if ($referto == 1) {
			
			$data = [
				'referti' => $model->getReferti($ruolo),
			];
			
			return view('errors/referto_nonTrovato', $data);
		}
		else {
			
			return view('referto_trovato', $referto);
		}
    }
}