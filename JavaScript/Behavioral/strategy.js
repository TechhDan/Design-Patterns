/**
 * The Strategy Patterns consists of two parts.
 * 1. The Context
 * 2. The Strategies
 * In this example the Shipping will be the context and the shipping
 * companies will be the strategies.
 */

// Context

let Shipping = function() {
	this.company = null;
};

Shipping.prototype = {
	setStrategy: function(company) {
		this.company = company;
	},

	calculate: function(package) {
		return this.company.calculate(package);
	}
};

// Strategies

let UPS = function() {
	this.calculate = function(package) {
		return "$45.95";
	}
};

let USPS = function() {
	this.calculate = function(package) {
		return "$39.40";
	}
};

let Fedex = function() {
	this.calculate = function(package) {
		return "$43.20";
	}
};

// Example

let ups = new UPS(),
	usps = new USPS(),
	fedex = new Fedex(),
	shipping = new Shipping(),
	package = {weight: 100};

shipping.setStrategy(ups);
console.log(shipping.calculate(package));

shipping.setStrategy(usps);
console.log(shipping.calculate(package));

shipping.setStrategy(fedex);
console.log(shipping.calculate(package));
