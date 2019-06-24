<?php

namespace DesignPatterns\Creational\AbstractFactory\PHP;

class Tesla implements CarInterface
{
	protected $electric_engine;

	public function drive()
	{
		$this->chargeBattery();
		$this->ready();
	}
}