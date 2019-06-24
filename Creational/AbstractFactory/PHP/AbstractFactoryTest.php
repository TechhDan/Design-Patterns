<?php

namespace DesignPatterns\Creational\AbstractFactory\PHP;

use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
	public function testCanCreateMustang()
	{
		$factory = new CarFactory;
		$mustang = $factory->createMustang();

		$this->assertInstanceOf(Mustang::class, $mustang);
	}

	public function testCanCreateTesla()
	{
		$factory = new CarFactory;
		$tesla = $factory->createTesla();

		$this->assertInstanceOf(Tesla::class, $tesla);
	}
}