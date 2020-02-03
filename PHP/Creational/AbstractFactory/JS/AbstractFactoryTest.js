import CarFactory from 'CarFactory';
import Mustang from 'Mustang';
import Tesla from 'Tesla';

let factory = new CarFactory,
	mustang = factory.createMustang(),
	tesla = factory.createTesla();

