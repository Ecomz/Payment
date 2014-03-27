<?php

namespace Ecomz\Payment\Provider;
use Ecomz\Payment\Container as Container;

abstract class Provider{
	public function request(Container $request)
	{
		if (!$this->validateResource($request))
			throw new \Ecomz\Payment\Exception("Invalid Request for {$request->get('PROVIDER')}", 1);
			

	}
	protected function validateResource(Container $request)
	{
		return ($this->hasMethod($request->get('METHOD')));
	}
	protected function hasMethod($method)
	{
		$from =explode('\\',get_called_class());
		var_dump($from);
	}
}