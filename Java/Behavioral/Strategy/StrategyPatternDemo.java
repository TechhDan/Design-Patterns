public class StrategyPatternDemo {

	public static void main(String[] args)
	{
		Shipping shipping = new Shipping(new UPS());
		System.out.println("UPS: " + shipping.calculate());

		shipping.setStrategy(new USPS());
		System.out.println("USPS: " + shipping.calculate());

		shipping.setStrategy(new FedEx());
		System.out.println("FedEx: " + shipping.calculate());
	}

}
