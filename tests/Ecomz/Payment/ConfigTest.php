<?php

namespace Ecomz\Payment;

class ConfigTest extends \PHPUnit_Framework_TestCase{

    public function testSetGet()
    {
        $config = new Config();
        $expected =  array('name'=>'propertyOne', 'value'=>'valueOne');
        $config->set($expected['name'],$expected['value']);
        $this->assertEquals($expected['value'], $config->get($expected['name']));
    }
    public function testGetNotExistentName()
    {
        $config = new Config();
        $this->assertTrue( is_null($config->get('NameNotSet')));
    }
    public function testLoadFromFileTest()
    {
        $expected = array('nome'=> 'ivo', 'sobrenome'=> 'nascimento');
        $file = __DIR__."/../../resources/confitests.php";
        $config = Config::fromFile($file, 'TEST');
        $this->AssertEquals($expected['nome'], $config->get('nome'));
        $this->AssertEquals($expected['sobrenome'], $config->get('sobrenome'));
    }
    public function testLoadFromFileOther()
    {
        $expected = array('nome'=> 'andre', 'sobrenome'=> 'nascimento');
        $file = __DIR__."/../../resources/confitests.php";
        $config = Config::fromFile($file, 'OTHER');
        $this->AssertEquals($expected['nome'], $config->get('nome'));
        $this->AssertEquals($expected['sobrenome'], $config->get('sobrenome'));
    }

    /**
    * @expectedException Ecomz\Payment\Exception
    * @expectedExceptionMessage File Not Found
    */    
    public function testLoadFromFileNotValidFile()
    {
        $file = __DIR__."/../../resources/invalidconfig.php";
        $config = Config::fromFile($file, 'OTHER');
    }

    /**
    * @expectedException Ecomz\Payment\Exception
    * @expectedExceptionMessage File Env:[OTHER2] Not Found
    */    
    public function testLoadFromFileNotValidEnvironment()
    {
        $file = __DIR__."/../../resources/confitests.php";
        $config = Config::fromFile($file, 'OTHER2');
    }

    public function testFromArray()
    {
        $expected = array('nome'=> 'andre', 'sobrenome'=> 'nascimento');
        $config  = new Config();
        $config->fromArray($expected);
        $this->AssertEquals($expected['nome'], $config->get('nome'));
        $this->AssertEquals($expected['sobrenome'], $config->get('sobrenome'));
    }
}
