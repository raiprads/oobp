<?php

namespace Acme;

interface RespondToUserRegistration{
	public function userRegisteredSuccesfully();

	public function userRegisteredFailed();
}