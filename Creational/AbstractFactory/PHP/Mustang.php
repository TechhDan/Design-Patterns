<?php

namespace DesignPatterns\Creational\AbstractFactory\PHP;

class Mustang implements CarInterface
{
	protected $gas_engine;

	public function drive()
	{
		$this->fillGasTank();
		$this->ready();
	}
}