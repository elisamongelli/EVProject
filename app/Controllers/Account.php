<?php

namespace App\Controllers;

class Account extends BaseController
{
	public function index()
	{
		return view('account/il_mio_account');
	}
	
	public function infoAccount($ruolo)
	{
		
		switch ($ruolo) {
			case "Cittadino":
				echo view('account/il_mio_account_cittadino');
				break;
			case "Datore":
				echo view('account/il_mio_account_datore');
				break;
			case "Medico":
				echo view('account/il_mio_account_medico');
				break;
			case "Laboratorio":
				echo view('account/il_mio_account_laboratorio');
				break;
			case "AziendaSanitaria":
				echo view('account/il_mio_account_aziendasanitaria');
				break;
		}
	}
}
