<?php

namespace App\Controllers;

use App\Models\CittadinoModel;
use App\Models\DatoreModel;
use App\Models\MedicoModel;
use App\Models\LaboratorioModel;
use App\Models\AziendaSanitariaModel;

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
			case "Datore":
				echo view('registrazioni/reg_datore');
				break;
			case "Medico":
				echo view('registrazioni/reg_medico');
				break;
			case "Laboratorio":
				echo view('registrazioni/reg_laboratorio');
				break;
			case "AziendaSanitaria":
				echo view('registrazioni/reg_aziendasan');
				break;
		}
	}
	
	public function creaAccount($ruolo)
	{
		
		switch ($ruolo) {
			
			case "Cittadino":
				$nome = $_POST['nome']; $cognome = $_POST['cognome']; $cf = $_POST['codiceFiscale']; $email = $_POST['email']; $password = $_POST['password']; $confermaPass = $_POST['confermaPassword'];
				$data = [
					'Nome' => $nome,
					'Cognome' => $cognome,
					'CodiceFiscale' => $cf,
					'Email' => $email,
					'Password' => $password,
				];
				
				$model = new CittadinoModel();
				
				if ($model->getUtente($email, $password) == 1) {
					
					if (strlen($password)>= 8 && strlen($password)<= 15 && preg_match("#[0-9]+#",$password)) {
						
							if (strcmp($password, $confermaPass) == 0) {
								
								$model->save($data);
								//echo view('dashboard/dashboard_cittadino');
								return redirect()->to('/Dashboard/vdDashboard/Cittadino');
							}
							else {
								echo view('errors/reg_cittadino_passNonCoincidono', $data);
							}
					}
					else {
						echo view('errors/reg_cittadino_passNonValida', $data);
					}
				}
				else {
					echo view('errors/reg_cittadino_accountEsistente', $data);
				}
				
				break;
			
			case "Datore":
				$nome = $_POST['nome']; $cognome = $_POST['cognome']; $cf = $_POST['codiceFiscale']; 
				$nomeAzienda = $_POST['nomeAzienda']; $partitaIVA = $_POST['partitaIVA']; $cfAzienda = $_POST['codiceFiscaleAzienda']; 
				$email = $_POST['email']; $password = $_POST['password']; $confermaPass = $_POST['confermaPassword'];
				
				$data = [
					'Nome' => $nome,
					'Cognome' => $cognome,
					'CodiceFiscale' => $cf,
					'NomeAzienda' => $nomeAzienda,
					'PartitaIva' => $partitaIVA,
					'CodiceFiscaleAzienda' => $cfAzienda,
					'Email' => $email,
					'Password' => $password,
				];
				
				$model = new DatoreModel();
				
				if ($model->getUtente($email, $password) == 1) {
					
					if (strlen($password)>= 8 && strlen($password)<= 15 && preg_match("#[0-9]+#",$password)) {
						
							if (strcmp($password, $confermaPass) == 0) {
								
								$model->save($data);
								return redirect()->to('/Dashboard/vdDashboard/Datore');
							}
							else {
								echo view('errors/reg_datore_passNonCoincidono', $data);
							}
					}
					else {
						echo view('errors/reg_datore_passNonValida', $data);
					}
				}
				else {
					echo view('errors/reg_datore_accountEsistente', $data);
				}
				
				break;
			
			case "Medico":
				$nome = $_POST['nome']; $cognome = $_POST['cognome']; $cf = $_POST['codiceFiscale']; 
				$partitaIVA = $_POST['partitaIva']; $codiceRegionale = $_POST['codiceRegionale'];  $asl = $_POST['AziendaSanitariaLocale']; 
				$email = $_POST['email']; $password = $_POST['password']; $confermaPass = $_POST['confermaPassword'];
				
				$data = [
					'Nome' => $nome,
					'Cognome' => $cognome,
					'CodiceFiscale' => $cf,
					'PartitaIva' => $partitaIVA,
					'CodiceRegionale' => $codiceRegionale,
					'AziendaSanitariaLocale' => $asl,
					'Email' => $email,
					'Password' => $password,
				];
				
				$model = new MedicoModel();
				
				if ($model->getUtente($email, $password) == 1) {
					
					if (strlen($password)>= 8 && strlen($password)<= 15 && preg_match("#[0-9]+#",$password)) {
						
							if (strcmp($password, $confermaPass) == 0) {
								
								$model->save($data);
								return redirect()->to('/Dashboard/vdDashboard/Medico');
							}
							else {
								echo view('errors/reg_medico_passNonCoincidono', $data);
							}
					}
					else {
						echo view('errors/reg_medico_passNonValida', $data);
					}
				}
				else {
					echo view('errors/reg_medico_accountEsistente', $data);
				}
				
				break;
			
			case "Laboratorio":
				$nomet = $_POST['nometitolare'];
				$cognomet = $_POST['cognometitolare'];
				$codfist = $_POST['codfistitolare'];
				$nome = $_POST['nome'];
				$pi = $_POST['partitaIva'];
				$codicefiscale = $_POST['codicefiscale'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$cpassword = $_POST['confermaPassword'];
				
				$data=[
				'NomeTitolare'=>$nomet,
				'CognomeTitolare'=>$cognomet,
				'CodFisTitolare'=>$codfist,
				'Nome'=>$nome,
				'PartitaIva'=>$pi,
				'CodiceFiscale'=>$codicefiscale,
				'Email'=>$email,
				'Password'=>$password
				];
				
				$model = new LaboratorioModel();
				
				$userValido = NULL;
				$userValido = $model->getUtente($email, $password);
				
				if ($userValido == 1) {
				  
				  if(strlen($password)>=8 && strlen($password)<= 15 && preg_match("#[0-9]+#",$password)){
					
					if(strcmp($password, $cpassword)==0){
					  
					  $model->save($data);
					  //echo view('dashboard/dash_laboratorio');
					  return redirect()->to('/Dashboard/vdDashboard/Laboratorio');
					}
					else{
					  echo view('errors/passwordNonCorrispLab', $data);
					}
				  }  
				  else{
					echo view('errors/passwordNonValidaLab', $data);
				  }
				}  
				else{
				  echo view('errors/emailEsistenteLab', $data);
				}
				
				break;
				
			  case "AziendaSanitaria":
				$nomea = $_POST['nomeazienda'];
				$part = $_POST['partitaiva'];
				$codfis = $_POST['codicefiscale'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$cpassword = $_POST['confermaPassword'];
				
				$data=[
				'Nome'=>$nomea,
				'PartitaIva'=>$part,
				'CodiceFiscale'=>$codfis,
				'Email'=>$email,
				'Password'=>$password
				];
				
				$model = new AziendaSanitariaModel();
				
				$userValido = NULL;
				$userValido = $model->getUtente($email, $password);
				
				if ($userValido == 1) {
				  
				  if(strlen($password)>=8 && strlen($password)<= 15 && preg_match("#[0-9]+#",$password)){
					
					if(strcmp($password, $cpassword)==0){
					  
					  $model->save($data);
					  //echo view('dashboard/dash_aziendasan');
					  return redirect()->to('/Dashboard/vdDashboard/AziendaSanitaria');
					}
					else{
					  echo view('errors/passwordNonCorrispAz', $data);
					}
				  }
				  else{
					echo view('errors/passwordNonValidaAz', $data);
				  }
				}  
				else{
				  echo view('errors/emailEsistenteAz', $data);
				}
				
				break;
		}
	}
}