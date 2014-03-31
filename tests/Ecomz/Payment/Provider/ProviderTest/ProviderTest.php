<?php
namespace Ecomz\Payment\Provider\ProviderTest;
use Ecomz\Payment\Container as Container;


class ProviderTest extends \PHPUnit_Framework_TestCase{


    public function testHasMethod()
    {
        $provider = new Provider(new Container());
        $this->assertFalse($provider->validateResource(new Container()));
    }

}

