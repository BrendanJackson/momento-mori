<?php
	//Momento Mori app
	class Person 
{
	public $job_title;
	public $age;
	//construct is run at instantiation
	public function __construct($job_title) 
	{
		$this->job_title = $job_title;
	}

	public function set_age($age) 
	{
		if ($age < 18)
		{
			echo "This person is not old enough";
		} else {
		$this->age = $age;		
		}
	}	

	public function get_age() 
	{
		return $this->age * 365;
	}
}

// Argument given to the construct method
$Brendan = new Person("Web Developer");
$Brendan->set_age(27);
// var_dump($Brendan->get_age());
var_dump("job_title: " . $Brendan->job_title);
var_dump("age in days: " . $Brendan->get_age());