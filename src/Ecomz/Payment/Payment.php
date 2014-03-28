<?php
namespace Ecomz\Payment;


class Payment{
	private $config;
	private $request;
	public function __construct(Container $configuration)
	{
		$this->config = $configuration;
	}
	public function request(Container $request)
	{
		$this->request = $request;
		$provider = "\\Ecomz\\Payment\\Provider\\{$this->request->get('PROVIDER')}\\Provider"; 
		$provider = new $provider();
		return $provider->request($request);
	}
}
