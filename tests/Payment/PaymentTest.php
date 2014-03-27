<?php

namespace Ecomz\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase{

	public function testClass()
	{
		$file = __DIR__."/../resources/confitests.php";
		$config = Config::fromFile($file, 'TEST');
		$payment = new Payment($config);
		$this->assertInstanceOf('\Ecomz\Payment\Payment', $payment);
	}
	public function testSetRequest()
	{
		$file = __DIR__."/../resources/confitests.php";
		$config = Config::fromFile($file, 'TEST');
		$payment = new Payment($config);
		$request = new Container();
		$requestData = array('PROVIDER'=>'ProviderTest','METHOD'=>'BILLET','clientID'=>1,'value'=>14.90,'product'=>'livro');
		$request->fromArray($requestData);
		$payment->request($request);
		$this->assertInstanceOf('\Ecomz\Payment\Payment', $payment);
	}
}