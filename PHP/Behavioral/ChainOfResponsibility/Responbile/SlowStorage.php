<?php

namespace TechDesign\DesignPatterns\ChainOfResponsibilities;

use TechDesign\DesignPatterns\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
	protected function processing(RequestInterface $request)
	{
		return 'Hello world!';
	}
}
