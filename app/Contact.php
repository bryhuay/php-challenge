<?php

namespace App;
use App\Interfaces\CarrierInterface;
use App\Services\ContactService;



class Contact
{
	
	protected $provider;
	
	function __construct(CarrierInterface $provider = null)
	{
		$this->provider = $provider;
	}


	public function makeCallByName($name = '')
	{
		if( empty($name) ) return;

		$contact = ContactService::findByName($name);
		
		if( $contact == null) return;
		$this->provider->dialContact($contact);

		return $this->provider->makeCall();
	}
}