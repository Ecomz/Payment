<?php
namespace Ecomz\Payment\Provider;
use Ecomz\Payment\Container as Container;

interface Method{
	public function perform(Container $request);
    public function hasSuccess();
}
