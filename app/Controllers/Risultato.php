<?php

namespace App\Controllers;

use App\Models\AziendaSanitariaModel;
use App\Models\RefertoModel;

use CodeIgniter\Controller;

class Risultato extends Controller
{
    public function index()
    {
		$model = new RefertoModel();
        $referti = $model->getAllReferti();

        $i = 0;
        foreach($referti as $referto) {
            $medico = explode(" ", $referto['MedicoCurante'], 4);
            if (count($medico) > 2) {
                $asl[$i] = $medico[3];
                echo ($i.") MEDICO CORRENTE : ");
                print_r($medico);
                echo ("<br />ASL [".$asl[$i]."]<br /><br />");
                $i++;
            }
            else {
                echo ("MEDICO NON DISPONIBILE");
                //print_r($medico);
                echo ("<br /><br />");
            }
        }

        echo ("<br /><br /><br />* ARRAY PRECEDENTI CON TABELLA DELLE AZIENDE SANITARIE: <br /><br />");
        
        $model = new AziendaSanitariaModel();
        $aziendeSanitarie = $model->getAllAziendeSanitarie();

        foreach($aziendeSanitarie as $aziendaSanitaria) {

            for ($i = 0; $i < count($asl); $i++) {
                if ($asl[$i] == $aziendaSanitaria['Nome']) {
                    echo($asl[$i]." uguale a<br /><br />");
                    print_r($aziendaSanitaria);
                    echo "<br /><br /><br /><br />";
                }
            }
        }
    }
}