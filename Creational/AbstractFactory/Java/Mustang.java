public class Mustang implements CarInterface {

	EngineInterface $gas_engine; 

	@Override
	public void drive() {
		fillGasTank();
		ready();
	}
}