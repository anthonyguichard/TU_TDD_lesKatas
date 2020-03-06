<?php
namespace App;

class FizzBuzz
{
	// if number is divisible by three is replaced by the word fizz
	public function isFizz(int $number)
	{
		return $number % 3 === 0 
			? 'Fizz' 
			: false;
	}

	// if number is divisible by five is replaced by the word buzz
	public function isBuzz($number)
	{
		return $number % 5 === 0 
			? 'Buzz' 
			: false;
	}

	// if number is fizz or buzz
	public function isFizzOrBuzz($number)
	{
		return $this->isFizz($number) || $this->isBuzz($number);
	}

	public function calc(int $count, array $result = [], int $iteration = 1)
	{
		if ($iteration > $count) return $result;

		$result[$iteration] = $this->isFizzOrBuzz($iteration)
				    ? $this->isFizz($iteration) . $this->isBuzz($iteration)
				    : $iteration;

		$iteration++;

		return $this->calc($count, $result, $iteration);
	}
}