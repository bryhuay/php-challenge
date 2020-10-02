<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	
	public static function findByName($name): Contact
	{
		// queries to the db
		
		return null;
	}

	public static function validateNumber(string $number): bool
	{
		if(is_numeric($number)) {
			return true;
		}
		else{
			return false;
		}
	}
}