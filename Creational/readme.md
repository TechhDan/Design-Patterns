# Singleton

## Intent

Ensure a class only has one instance, and provide a global point of access to it.

## Motivation

It's important for some classes to have exactly one instance. Although there can be many printers a system, there should be only one printer spooler (manages sending jobs to the printer). There should be only one file system and one window manager. A digital filter will have one A/D converter. An accounting system will de dedicated to serving one company.

How do we ensure that a class has only one instance and that the instance is easily accessible? A global variable makes an object accessible, but it doesn't keep you from instantiating multiple objects.

A better solution is to make the class itself responsible for keeping track of its sole instance. The class can ensure that no other instance can be created (by intercepting requests to create new objects), and it can provide a way to access the instance. This is the Singleton pattern.

## Applicability

Use the singleton pattern when

1. There must be exactly one instance of a class, and it must be accessible to clients from a well-known access point.
2. When the sole instance should be extensible by subclassing, and clients should be able to use an extended instance without modifying their code.

## Code Structure

example in PHP
```php
class Singleton
{
	private static $instance;

	public static function getInstance(): Singleton
	{
		if (null == static::$instance) {
			static::$instance = new static();
		}
		return static::$instance;
	}

	private function __construct() {}
	private function __clone() {}
	private function __wakeup() {}
}
```
example in JAVA
```java
class Singleton
{
	private static Singleton instance = null;

	private Singleton() {}

	public static Singleton getInstance()
	{
		if (instance == null) {
			instance = new Singleton();
		}
		return instance;
	}
}

```
example in JavaScript
```javascript
// Old way

var Singleton = (function() {
	var _data = [];

	function add(item) {
		_data.push(item);
	}

	function get(id) {
		return _data.find((d) => {
			return d.id === id;
		});
	}

	return {
		add: add,
		get: get
	};
}());

// New Way : method 1 

const _data = [];
const Singleton = {
	add: item => _data.push(item),
	get: id => _data.find(d => d.id === id)
}
Object.freeze(Singleton);
export default Singleton;

// New Way: method 2

class Singleton {
	constructor() {
		this._data = [];
	}

	add(item) {
		this._data.push(item);
	}

	get(id) {
		return this._data.find(d => d.id === id);
	}
}

const instance = new Singleton();
Object.freeze(instance);

export default instance;
```

## Participants

1. Singleton
	* Defines an Instance operation that lets clients access its unique instance. Instance is a class operation (that is, a class method in Smalltalk and a static member function in C++, PHP, and Java)
	* May be responsible for creating its own unique instance.

## Collaborations

Clients access a Singleton instance solely through Singleton's Instance operation.

## Consequences

The Singleton pattern has several benefits.

1. Controlled access to sole instance. Becasue the Single class encapsulates its sole instance, it can have strict controll over how when clients access it.
2. Reduced name space. The Singleton pattern is an improvement over global variables. It avoids polluting the name space with global variables that store sole instances.
3. Permits refinements of operations and representation. The Singleton class may be subclassed, and it's easy to configure an application with an instance of this extended class. You can configure an application with an instance of this extended class. You can configure the application with an instance of the class you need at run-time.
4. Permits a variable number of instances. The pattern makes it easy to change your mind and allow more than once instance of the Single class. Moreover, you can use the same approach to control the number of instances that the application uses. Only the operation that grants access to the Singleton instance needs to change.
5. More flexible than class operations. Another way to package a singleton's functionality is to use class operations (that is, static member functions in C++, PHP, and Java or class methods in SmallTalk and Javascript). But both of these languages techniques make it hard to change a design to allow more than one instance of the class. Moreover, static member functions in C++, PHP, and Java are never virtual, so subclasses can't override them polymorphically.

## Implementation

Here are implementation issues to consider when using the Singleton pattern

1. Ensuring a unique instance. The Singleton pattern makes the sole instance a normal instance of a class, but that is written so that only one instance can ever be created. A common way to do this is to hide the operation that creates the instance behind a class operation (that is, either a static member function or a class method) that guarantees only one instance is created. This operation has access to the variable that holds the unique instance, and it ensures the variable is initialized with the unique instance befoire returning its value. This approach ensures that a singleton is created and initialized before its first use.

You can define the class operation in C++, PHP, and Java with a static member function Instance of the Singleton class. Singleton also defines a static member variable 'instance' that contains a pointer to its unique instance.

_to be continued...