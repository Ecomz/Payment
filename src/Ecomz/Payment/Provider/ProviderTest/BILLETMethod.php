<?php
namespace Ecomz\Payment\Provider\ProviderTest;
use Ecomz\Payment\Container as Container;

class BILLETMethod implements \Ecomz\Payment\Provider\Method
{
    private $request;
    private $response;
    public function perform(Container $request)
    {
        $this->request  = $request;
        $this->response = new Container(); 
        $this->response->set('BOLETO-CODE','00000.00000.00000.000000.00000.000000.0.51980000000000');
        $this->response->set('success',true);
        return $this->response;
    }
    public function hasSuccess()
    {
        return $this->response->get('success');
    }
}
