<?php

namespace Ecomz\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase{

	public function testClass()
	{
		$a = new Payment();
		$this->assertInstanceOf('\Ecomz\Payment\Payment', $a);
	}
}