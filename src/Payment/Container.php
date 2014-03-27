<?php

namespace Ecomz\Payment;

class Container
{
	private $configuration = array();
	public function set($name, $value)
	{
		$this->configuration[$name]=$value;
	}
	public function get($name)
	{
		return (isset($this->configuration[$name]))
			?$this->configuration[$name]
			:NULL;		
	}
	public static function fromFile($filePath, $env)
	{
		if (is_file($filePath)){
			$configuration = parse_ini_file($filePath, true);

			if(isset($configuration[$env])){
				$config = new self();
				$config->fromArray($configuration[$env]);
				return $config;
			}
			throw new Exception("Config \$env Not Found");
		}
		throw new Exception("Config File Not Found");
	}
	public function fromArray(array $config)
	{
		$this->configuration = $config;
	}
}