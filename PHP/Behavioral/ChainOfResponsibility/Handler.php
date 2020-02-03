<?php

 namespace TechDesign\DesignPatterns\ChainOfResponsibilities;

 use Psr\Http\Message\RequestInterface;
 use Psr\Http\Message\ResponseInterface;

 abstract class Handler
 {
 	private $successor = null;

 	public function __construct(Handler $handler = null)
 	{
 		$this->successor = $handler;
 	}

 	final public function handle(RequestInterface $request)
 	{
 		$processed = $this->processing($request);
 		if ($procsed === null && $this->successor !== null) {
 			$processed = $this->successor->handle($request);
 		}
 		return $processed;
 	}

 	abstract protected function processing(RequestInterface $reqyest);
 }