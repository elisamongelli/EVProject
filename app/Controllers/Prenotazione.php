<?php

namespace App\Controllers;

use App\Models\PrenotazioneModel;
use App\Models\LaboratorioModel;

use CodeIgniter\Controller;

class Prenotazione extends Controller
{
    public function index()
    {
		$ruolo = session()->get('ruolo');

        if ($ruolo == 'Medico' or $ruolo == 'Datore') {
            return view('prenotazione/prenotazione_numero');
        }
        else {
            return view('prenotazione/prenotazione_dati_cittadino');
        }
    }	
	
    public function inserisciDati()
    {
		$numeroPrenotazioni = $_POST['numeroPrenotazioni'];
		session()->set('numeroPrenotazioni', $numeroPrenotazioni);
		
		$data = [
			'numeroPrenotazioni' => $numeroPrenotazioni,
		];
		
		return view('prenotazione/prenotazione_dati', $data);
    }
	
	public function salvaDati()
    {
		$numeroPrenotazioni = $_POST['numeroPrenotazioni'];

		if(session()->get('ruolo') == 'Cittadino') {
			session()->set('numeroPrenotazioni', 1);
		}
		
		$nome = $_POST['nome']; $cognome = $_POST['cognome']; $cf = $_POST['codiceFiscale'];
		$dataNascita = $_POST['dataNascita']; $luogoNascita = $_POST['luogoNascita']; $citta = $_POST['citta'];
		$telefono = $_POST['telefono']; $email = $_POST['email'];
		
		
		$data = [
			'numeroPrenotazioni' => $numeroPrenotazioni,
		];
		
		$datiPersonali = [
			'Nome' => $nome,
			'Cognome' => $cognome,
			'CodiceFiscale' => $cf,
			'DataNascita' => $dataNascita,
			'LuogoNascita' => $luogoNascita,
			'Citta' => $citta,
			'NumTelefono' => $telefono,
			'Email' => $email,
		];
		
		$model = new PrenotazioneModel();		
		$model->save($datiPersonali);
		
		if ($numeroPrenotazioni == 0) {
			return view('prenotazione/prenotazione_tipologia');
		}
		
		return view('prenotazione/prenotazione_dati', $data);
    }
	
	public function cercaLaboratorio()
    {
		$model = new LaboratorioModel();
		
		$data = [
			'laboratori' => $model->getAllLaboratori(),
		];

		return view('prenotazione/prenotazione_labVicini', $data);
    }
	
	public function salvaLab($laboratorio)
    {
		$model = new PrenotazioneModel();

		//session_start();

		//echo(session()->get('numeroPrenotazioni'));

		$prenotazioni = $model->getPrenotazioniNoLab();
		//$_SESSION['prenotazioni'] = array();

		for ($i = 0; $i < count($prenotazioni); $i++) {
			$data = [
				'Nome' => $prenotazioni[$i]['Nome'],
				'Cognome' => $prenotazioni[$i]['Cognome'],
				'CodiceFiscale' => $prenotazioni[$i]['CodiceFiscale'],
				'DataNascita' => $prenotazioni[$i]['DataNascita'],
				'LuogoNascita' => $prenotazioni[$i]['LuogoNascita'],
				'Citta' => $prenotazioni[$i]['Citta'],
				'NumTelefono' => $prenotazioni[$i]['NumTelefono'],
				'Email' => $prenotazioni[$i]['Email'],
				'LaboratorioAnalisi' => $laboratorio,
			];

			$prenotazioni[$i]['LaboratorioAnalisi'] = $laboratorio;

			$model->replace($data);

			$_SESSION['prenotazioni'][$i] = $prenotazioni[$i]['CodiceFiscale'];
			
			//redirect()->to('/CalendarioPrenot');
			//echo($_SESSION['prenotazione']);
			//echo($i);
			//echo view('funzionalita/calendario_prenot');
		}

		session()->set('prenotazioni', $prenotazioni);

		//print_r($_SESSION['prenotazioni']);
		//print_r(session()->get('prenotazioni'));
		//echo(count($_SESSION['prenotazioni']));

		//$_SESSION['numeroPrenotazioni'] = count($prenotazioni);
		//echo session()->get('numeroPrenotazioni');
		//echo($_SESSION['numeroPrenotazioni']);

		return redirect()->to('/CalendarioPrenot');
    }

	public function mostraResoconto() {

		return view('prenotazione/prenotazione_resoconto');
	}
}