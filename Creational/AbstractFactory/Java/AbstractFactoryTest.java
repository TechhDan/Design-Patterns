public class AbstractFactoryTest {

	public static void main(String []args) {
		CarFactory factory = new CarFactory;
		Mustang mustang = factory.createMustang();
		Tesla tesla = factory.createTesla();
	}
}