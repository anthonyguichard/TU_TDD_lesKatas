<?php
require __DIR__ . "/../src/fizzbuzz.php";
use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

final class FizzBuzzTest extends TestCase
{
	public function test_a_number_divisible_by_three_is_replaced_by_the_word_fizz()
	{
		$fizz = new FizzBuzz();

		$this->assertEquals('Fizz', $fizz->isFizz(3 * rand()));
	}

}