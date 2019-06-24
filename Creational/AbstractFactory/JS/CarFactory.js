import Mustang from 'Mustang';
import Tesla from 'Tesla';

export default class CarFactory {

	createMustang() {
		return new Mustang;
	}

	createTesla() {
		return new Tesla;
	}
}
