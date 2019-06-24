public class Tesla implements CarInterface {

	EngineInterface $electric_engine; 

	@Override
	public void drive() {
		chargeBattery();
		ready();
	}
}