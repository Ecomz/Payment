<?php
namespace Ecomz\Payment\Provider\ProviderTest;

class BILLETMethodTest extends \PHPUnit_Framework_TestCase{

    public function testPerform()
    {
        $billetMethod = new BilletMethod(); 
        $container = new \Ecomz\Payment\Container();
        $container->set('value',12.00);
        $container->set('DUEDATE','2014-04-01');
        $container->set('CLIENT',array('nome'=>'Bruce Wayne','cpf'=>'00000000000', 'ID'=>1));
        $response = $billetMethod->perform($container);
        $this->assertTrue($response->get('success'));
    }
    public function testHasSuccess()
    {
        $billetMethod = new BilletMethod(); 
        $container = new \Ecomz\Payment\Container();
        $container->set('value',12.00);
        $container->set('DUEDATE','2014-04-01');
        $container->set('CLIENT',array('nome'=>'Bruce Wayne','cpf'=>'00000000000', 'ID'=>1));
        $response = $billetMethod->perform($container);
        $this->assertTrue($billetMethod->hasSuccess());
    }


}

