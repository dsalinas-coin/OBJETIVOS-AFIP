<?php


namespace AfipBundle\Repository;


class BaseRepository
{

    protected $client;
    protected $serializer;
    protected $logger;
    protected $translator;
    protected $authInfo;

    public function __construct($urls, $serializer, $logger, $translator,$factory)
    {

        $this->client = $factory::factory($urls['wsdl']);
        $response=\Unirest\Request::get($urls['token']);
        $data=json_decode($response->raw_body,true);
	$valid  = ['wsaa_sign', 'wsaa_token'];
        echo "Esto pertenece a la variable valid que tiene el wsaa_sign y el wsaa_token";
	dump($valid  = ['wsaa_sign', 'wsaa_token']);
        $data = array_filter(
            $data,
            function ($key) use ($valid) {
                return in_array($key, $valid);
            },
            ARRAY_FILTER_USE_KEY
        );
        
	$this->authInfo=$data;
	//echo "Esta es la info que trae auth";
	//dump($this->authInfo=$data);
        $this->serializer = $serializer;
        $this->logger = $logger;
        $this->translator = $translator;

    }


}
