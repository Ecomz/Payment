<?php

namespace Ecomz\Payment\Provider\ProviderTest;
use Ecomz\Payment\Container as Container;

class Provider extends \Ecomz\Payment\Provider\Provider{

	public function validateResource(Container $request)
	{
		return parent::validateResource($request);
	}
}
