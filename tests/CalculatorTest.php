<?php

use App\Libraries\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{

	public function testAddNumbers()
	{
		$calculator = new Calculator;

		$response = $this->assertEquals(3, $calculator->add(1, 2));
	}


	public function testThrowsExceptionsIfNonNumericIsPassed()
	{
		$calculator = new Calculator;

		//get exception from Calculator class
		$this->expectException(InvalidArgumentException::class);
		$calculator->add('a', 'b');
	}
}