<?php
class Person {
	private $personName;
	private $personAge;
	private $personGender;
	/**
	 * constructor for person
	 *
	 * @param string $newPersonName
	 * @param int $newPersonAge
	 * @param bool $newPersonGender
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 * @Documentation https://php.net/manual/en/language.oop5.decon.php
	 **/
	public function __construct(string $newPersonName, int $newPersonAge, bool $newPersonGender) {
		try {
			$this->setPersonName($newPersonName);
			$this->setPersonAge($newPersonAge);
			$this->setPersonGender($newPersonGender);
		} catch (\InvalidArgumentException | \RangeException | \TypeError | \Exception $e) {
			//determine what exception type was thrown
			throw(new \Exception($e->getMessage(), 0, $e));
		}
	}
	public function getPersonName() : string
	{
		return($this->personName);
	}
	public function setPersonName(string $newPersonName)
	{
		// validate and sanitize
		// if no exceptions have been thrown, assign a new value to Person name
		$this->personName = $newPersonName;
	}
	public function getPersonAge() : int
	{
		return($this->personAge);
	}
	public function setPersonAge(int $newPersonAge)
	{
		// validate and sanitize
		// if no exceptions have been thrown, assign a new value to Person age
		$this->personAge = $newPersonAge;
	}
	public function getPersonGender() : bool
	{
		return($this->personGender);
	}
	public function setPersonGender(bool $newPersonGender)
	{
		// validate and sanitize
		// if no exceptions have been thrown, assign a new value to Person passed class (true of false)
		$this->personGender = $newPersonGender;
	}
	/* all the rest of the class goes here */
}
function listNewPersonInfo (Person $newPerson) : string {
	return "This is " .$newPerson->getPersonName() ."./n".$newPerson->getPersonGender()." is ".$newPerson->getPersonAge()." years old.";
}
// test a function
$newPerson = new Person("George", 28, true);
echo listNewPersonInfo($newPerson);