public class Shipping {

	private Strategy strategy;

	public Shipping(Strategy strategy) {
		this.strategy = strategy;
	}

	public void setStrategy(Strategy strategy) {
		this.strategy = strategy;
	}

	public int calculate() {
		return strategy.calculate();
	}
}