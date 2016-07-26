<?php 

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$ryan = new Person('Ryan Prader');

$staff = new Staff([$ryan]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());