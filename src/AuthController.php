<?php 

namespace Acme;

class AuthController implements RespondToUserRegistration{

	protected $registration;

	public function __construct(RegisterUser $registration)
	{
		$this->registration = $registration;
	}

	public function register()
	{
		$registration->execute([], $this);
	}

	public function userRegisteredSuccesfully()
	{
		var_dump('created successfully. redirect somewhere.');
	}

	public function userRegisteredFailed()
	{
		var_dump('created unsuccessfully. redirect back.');
	}

}