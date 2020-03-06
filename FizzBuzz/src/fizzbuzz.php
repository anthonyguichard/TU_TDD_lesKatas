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

	public function isBuzz($number)
	{
		return $number % 5 === 0 
			? 'Buzz' 
			: false;
	}
}