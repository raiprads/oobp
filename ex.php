<?php 


class Person
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

class Business
{
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(Person $person)
	{
		$this->staff->add($person);
	}

	public function getStaffMembers()
	{
		return $this->staff->members();
	}
}

class Staff
{
	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function add(Person $person)
	{
		$this->members[] = $person;	
	}

	public function members()
	{
		return $this->members;
	}
}

$ryan = new Person('Ryan Prader');

$staff = new Staff([$ryan]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());