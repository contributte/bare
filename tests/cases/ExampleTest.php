<?php declare(strict_types = 1);

namespace Tests\Cases;

use Contributte\Bare\Example;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../bootstrap.php';

class ExampleTest extends TestCase
{

	public function testFoo(): void
	{
		$example = new Example();
		Assert::same('foo', $example->getFoo());
	}

}

(new ExampleTest())->run();
