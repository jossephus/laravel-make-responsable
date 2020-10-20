<?php


namespace Jossephus\MakeResponsable\Tests\Feature\Commands;

use Jossephus\MakeResponsable\Tests\TestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class MakeFooCommandTest extends TestCase
{
	function test_command_works()
	{
		$this
			->artisan('make:responsable ResponsableTestClass')
			->assertExitCode(0);
	}

	function test_it_creates_a_new_foo_class()
	{
		$responsableClass = app_path('Http/Responses/ResponsableTestClass.php');

		if (File::exists($responsableClass)) {
			unlink($responsableClass);
		}

		$this->assertFalse(File::exists($responsableClass));

		$this->artisan('make:responsable ResponsableTestClass');

		$this->assertTrue(File::exists($responsableClass));
	}
}
