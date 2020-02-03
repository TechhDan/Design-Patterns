<?php

namespace DesignPatterns\Creational\AbstractFactory\PHP;

class CarFactory
{
	public function createMustang(): Mustang
	{
		return new Mustang;
	}

	public function createTesla(): Tesla
	{
		return new Tesla;
	}
}