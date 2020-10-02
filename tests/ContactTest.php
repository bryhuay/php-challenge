<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Contact;

class ContactTest extends TestCase
{
	
	/** @test */
	public function it_returns_null_when_name_empty()
	{
		
		$mobile = new Contact($provider=null);

		$this->assertNull($mobile->makeCallByName(''));
	}

}
