<?php

namespace AfipBundle\Util;

use AfipBundle\Repository\PadronConstanciaRepository;
use AfipBundle\Repository\RetencionRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * @Route(service="app.connector")
 */
class Connector
{

    private $serializer;
    private $apiBaseUrl;
    private $logger;
    private $translator;

    public function __construct($urls, $serializer, $logger)
    {
        $this->serializer = $serializer;
        $this->apiBaseUrl = $urls;
        $this->apiBaseUrl = $urls;
        $this->logger = $logger;
        //$this->translator = $translator;
    }

    public function getApiRepository($repositoryName)
    {
        $repository = null;
        switch ($repositoryName) {
            case "PadronConstancia": {
                $repository = new PadronConstanciaRepository($this->apiBaseUrl['padron'], $this->serializer, $this->logger, $this->translator);
                echo "Este el argumento que le pasamos a la función con el array de padron";
		dump($this->apiBaseUrl['padron']);
		break;
            }
            case "Retencion": {
                $repository = new RetencionRepository($this->apiBaseUrl['sire'], $this->serializer, $this->logger, $this->translator);
                break;
            }

            default: {
                throw new \Exception('ApiRepository not found: ' . $repositoryName, 500);
            }
        }

        return $repository;
    }

}
