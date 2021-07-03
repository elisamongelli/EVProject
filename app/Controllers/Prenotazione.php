<?php

namespace App\Controllers;

use App\Models\PrenotazioneModel;

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
		
		$data = [
			'numeroPrenotazioni' => $numeroPrenotazioni,
		];
		
		return view('prenotazione/prenotazione_dati', $data);
    }
	
	public function salvaDati()
    {
		$numeroPrenotazioni = $_POST['numeroPrenotazioni'];
		
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
		$tipologiaTampone = $_POST['tipologia'];
		
		$data = [
			'tipologiaTampone' => $tipologiaTampone,
		];
		
		return view('prenotazione/prenotazione_labVicini', $data);
    }/*
	
	public function visualizzaQuestionari()
    {
		$model = new QuestionarioModel();
		
		$data = [
			'questionari' => $model->getAllQuestionari(),
		];
		
		//print_r($data);
		
		return view('elenco_questionari', $data);
    }
	
	public function cercaQuestionario()
    {
		$codice = $_POST['codice'];
		
		$model = new QuestionarioModel();
		
		$questionario = $model->getQuestionario($codice);
		
		
		if ($questionario == 1) {
			
			$data = [
				'questionari' => $model->getAllQuestionari(),
			];
			
			return view('errors/questionario_nonTrovato', $data);
		}
		else {
			
			return view('questionario_trovato', $questionario);
		}
    }*/
}