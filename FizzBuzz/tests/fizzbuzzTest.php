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

	// if number is divisible by five is replaced by the word buzz
	public function test_a_number_divisible_by_five_is_replaced_by_the_word_buzz()
	{
		$buzz = new FizzBuzz();

		$this->assertEquals('Buzz', $buzz->isBuzz(5 * rand()));
	}

	// if number is not divisible by five and three
	public function test_a_number_not_divisible_by_five_or_three_remains_a_number()
	{
		$fizzbuzz = new FizzBuzz();

		$num = 7;

		$this->assertFalse($fizzbuzz->isFizz($num));
		$this->assertFalse($fizzbuzz->isBuzz($num));
	}

	// if number is divisible by five and three is replaced by the word fizzbuzz
	public function test_a_number_divisible_by_five_and_three_is_replaced_by_the_word_fizzbuzz()
	{
		$fizzbuzz = new FizzBuzz();

		$num = 15 * rand();

		$this->assertEquals('FizzBuzz', $fizzbuzz->isFizz($num) . $fizzbuzz->isBuzz($num));
	}
}