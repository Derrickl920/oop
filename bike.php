<?php 

class Bike
{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price_p, $max_speed_p)
	{
		$this->price = $price_p;
		$this->max_speed = $max_speed_p;
		$this->miles =0;
	}

	public function displayinfo()
	{
		echo $this ->price. '<br>';
		echo $this ->max_speed. '<br>';
		echo $this ->miles. '<br>';
		return $this;

	}
	public function drive()
	{
		echo 'Driving...<br>';
		echo $this->miles += 10;
		echo 'miles driven <br>';
		return $this;

	}
	public function reverse()
	{
		
		if($this->miles < 5)
		{
			echo 'cannot reverse...<br>';
		}
		else
		{
		echo 'Reversing....<br>';
		echo $this->miles -= 5;
		echo 'miles driven <br>';
			return $this;

		}
	}
}

$bike1 = new Bike(100, "10mph");
var_dump($bike1);
$bike2 = new Bike(200, "20mph");
var_dump($bike2);
$bike3 = new Bike(300, "30mph");
var_dump($bike3);


echo '<h1> bike1 </h1>';
 $bike1-> displayinfo()->drive()->drive()->drive()->reverse()->displayinfo();
 echo '<br>';

 echo '<h1> bike2 </h1>';

 $bike2-> drive();
 $bike2-> drive();
 $bike2-> reverse();
  $bike2-> reverse();
$bike2-> displayinfo();
 echo '<br>';

echo '<h1> bike3 </h1>';

$bike3-> reverse();
$bike3-> reverse();
$bike3-> reverse();
$bike3-> displayinfo();




 ?>