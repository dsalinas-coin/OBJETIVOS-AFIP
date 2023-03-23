<?php

namespace AfipBundle\Repository;

use AfipBundle\Soap\Padron as Padron;

class PadronConstanciaRepository extends BaseRepository
{


    const factory = '\AfipBundle\Soap\Padron\PadronClientFactory';

    public function __construct($urls, $serializer, $logger, $translator)
    {
        parent::__construct($urls, $serializer, $logger, $translator, self::factory);
    }

    public function getData(array $cuitsSinLimite)
    {
        $info = array();
	echo "El siguiente dump con la variable CuitsSinLimite no sé que trae... Veremos... Espero...";
	dump($cuitsSinLimite);
	//var_dump($cuitsSinLimite);
        echo "<br>";
        dump($this->authInfo['wsaa_token']);
        echo "<br>";
        dump($this->authInfo['wsaa_sign']);
        $gruposCuit = array_chunk($cuitsSinLimite, 100);
        
        foreach ($gruposCuit as $cuits) {

	    
            $request = new Padron\Type\GetPersonaListV2($this->authInfo['wsaa_token'], $this->authInfo['wsaa_sign'], "33714189919", $cuits);
            $client = $this->client;
            /** @var Padron\PadronClient $client */
            $response = $client->getPersonaList_v2($request)->getPersonaListReturn();
	    echo "Vamos a ver lo que tiene la variable response de cada cliente desde el archivo PadronConstanciaRepository --OJO MIS PANAS-- esto ya viene de la pegada la AFIP";
	    //dump($response);
	    //var_dump($response);        


            foreach ($response->getPersona() as $persona) {
                /** @var Padron\Type\Persona $persona */
                if ($persona->getErrorConstancia() == null && $persona->getErrorMonotributo() == null && $persona->getErrorRegimenGeneral() == null) {
                    if ($persona->getDatosMonotributo() == null) {
                        $impuestoEncontrado = null;
                        $i = 0;
                        // foreach($persona->getDatosRegimenGeneral()->getImpuesto() as $impuesto){
                        if ($persona->getDatosRegimenGeneral() == null) {
                            $info[$this->getCuit($persona)] = array(
                                "status" => "super_error"
                            );
                        } else {
                            while ($i < sizeof($persona->getDatosRegimenGeneral()->getImpuesto()) && $impuestoEncontrado == null) {
                                $impuesto = $persona->getDatosRegimenGeneral()->getImpuesto()[$i];
                                /** @var Padron\Type\Impuesto $impuesto */
                                switch ($impuesto->getIdImpuesto()) {
                                    case 32:
                                        $impuestoEncontrado = $impuesto->getIdImpuesto() . "_exento";
                                        break;
                                    case 30:
                                        $impuestoEncontrado = $impuesto->getIdImpuesto() . "_iva";
                                        break;
                                }
                                $i ++;
                            }
                            $info[$this->getCuit($persona)] = array(
                                "status" => $impuestoEncontrado
                            );
                        }
                    } else {
                        $info[$this->getCuit($persona)] = array(
                            "status" => "mono"
                        );
                    }
                    
                    $domicilioFiscal = $persona->getDatosGenerales()->getDomicilioFiscal();
                    
                    if ( $domicilioFiscal != null) {
                        $info[$this->getCuit($persona)]["provincia"] = $domicilioFiscal->getIdProvincia();
                        $info[$this->getCuit($persona)]["descripcionProvincia"] = $domicilioFiscal->getDescripcionProvincia();
                    }
                    
                } else {
                    $errorDetail = array();
                    switch (true) {
                        case $persona->getErrorRegimenGeneral() != null:

                            $errorDetail = $persona->getErrorRegimenGeneral();
                            break;
                        case $persona->getErrorConstancia() != null:
                            $errorDetail = $persona->getErrorConstancia();
                            break;
                        case $persona->getErrorMonotributo() != null:
                            $errorDetail = $persona->getErrorMonotributo();
                            break;
                    }
                    $info[$this->getCuit($persona)] = array(
                        "status" => "cert_error",
                        "detail" => $errorDetail,
                        "provincia" => 0,
                        "descripcionProvincia" => "CABA"
                    );
		var_dump($info[$this->getCuit($persona)]);
                }               
            }
        }
        
        return $info;
    }

    private function getCuit(Padron\Type\Persona $persona)
    {
        $cuit = "";
        if ($persona->getDatosGenerales() != null) {
            $cuit = $persona->getDatosGenerales()->getIdPersona();
        } elseif ($persona->getErrorConstancia() != null) {
            $cuit = $persona->getErrorConstancia()->getIdPersona();
        }
        //en teoría no hay mas casos
        return $cuit;
    }
}
