<?php

namespace Jossephus\MakeResponsable\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Jossephus\MakeResponsable\MakeResponsableServiceProvider;

class TestCase extends  Orchestra
{
	public function setUp(): void
	{
		parent::setUp();
	}

	protected function getPackageProviders($app)
	{
		return [MakeResponsableServiceProvider::class];
	}
	protected function getEnvironmentSetUp($app)
	{
	}
}
