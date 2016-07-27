<?php 

interface Provider {
	public function getAuthorizationUrl();
}

abstract class Provider{
	abstract protected function getAuthorizationUrl();
}

class FacebookProvider implements Provider{

	protected function getAuthorizationUrl()
	{
		return '';
	}
}