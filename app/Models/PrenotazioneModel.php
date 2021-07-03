<?php

namespace App\Models;

use CodeIgniter\Model;

class PrenotazioneModel extends Model
{
	
	protected $table = 'PrenotazioniDati';
	
	protected $allowedFields = ['Nome', 'Cognome', 'CodiceFiscale', 'DataNascita', 'LuogoNascita', 'Citta', 'NumTelefono', 'Email', 'LaboratorioAnalisi'];
	
	
	public function getAllPrenotazioni() {
		
		return $this->findAll();
	}/*
	
	public function getPrenotazioniLab() {
		
		$lab = session()->get('nomelab');
		
		$questionari = $this->asArray()
					->where(['LaboratorioAnalisi' => $lab])
					->findAll();
		
		return $questionari;
	}
	
	public function getQuestionario($codice) {
		
		
		$questionario = $this->asArray()
					->where(['Codice' => $codice])
					->first();
		
		$lab = session()->get('nomelab');
		
		if (empty($questionario) or $questionario['LaboratorioAnalisi'] != $lab)
		{
			return 1;
		}
		return $questionario;
	}*/
}