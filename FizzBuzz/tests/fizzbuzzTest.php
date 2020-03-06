<?php
require __DIR__ . "/../src/fizzbuzz.php";
use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

final class FizzBuzzTest extends TestCase
{
	// if number is divisible by three is replaced by the word fizz
	public function test_a_number_divisible_by_three_is_replaced_by_the_word_fizz()
	{
		$fizz = new FizzBuzz();

		$this->assertEquals('Fizz', $fizz->isFizz(3 * rand()));
	}

	public function test_a_number_divisible_by_five_is_replaced_by_the_word_buzz()
	{
		$buzz = new FizzBuzz();

		$this->assertEquals('Buzz', $buzz->isBuzz(5 * rand()));
	}
}