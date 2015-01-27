<?php 

class Car
{
	public $price, $speed, $fuel, $mileage, $tax;

	public function __construct($price_p, $speed_p, $fuel_p, $mileage_p)
	{
		$this->price = $price_p;
		$this->speed = $speed_p;
		$this->fuel = $fuel_p;
		$this->mileage = $mileage_p;
		if($this->price > 10000)
		{
			$this->tax = 0.15;
		}
		else
		{
			$this->tax = 0.12;
		}
	$this->Display_all();

	}
	public function Display_all()
	{
		echo 'Price: '. $this->price .'<br>';
		echo 'Speed: '.$this->speed .'<br>';
		echo 'Fuel: '.$this->fuel .'<br>';
		echo 'Mileage: '.$this->mileage .'<br>';
		echo 'Tax: '.$this->tax .'<br><br>';
	}
}

$car1 = new Car(2000,'35mph','Full', '15mpg');
$car2 = new Car(2000,'5pmph','Not Full','105mpg');
$car3 = new Car(2000,'25mph','Kind of full','95mpg');
$car4 = new Car(2000,'45mph','Empty','25mpg');
$car5 = new Car(2000000,'35mpg','Empty','15mpg');


 ?>