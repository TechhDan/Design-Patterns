<?php

// Context

class Shipping
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function calculate()
    {
        return $this->strategy->calculate();
    }
}

// Strategies

interface Strategy
{
    public function calculate();
}

class UPS implements Strategy
{
    public function calculate()
    {
        return '$39.99';
    }
}

class USPS implements Strategy
{
    public function calculate()
    {
        return '$40.99';
    }
}

class FedEx implements Strategy
{
    public function calculate()
    {
        return '$50.97';
    }
}

// Example

$shipping = new Shipping(new UPS);
echo "UPS: " . $shipping->calculate() . PHP_EOL;

$shipping->setStrategy(new USPS);
echo "USPS: " . $shipping->calculate() . PHP_EOL;

$shipping->setStrategy(new FedEx);
echo "FedEx: " . $shipping->calculate() . PHP_EOL;

