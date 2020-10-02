<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;

class MobileTest extends TestCase
{
	
	/** @test */
	public function it_returns_null_when_name_empty()
	{
		
		$mobile = new Mobile($provider=null);

		$this->assertNull($mobile->makeCallByName(''));
	}

}
