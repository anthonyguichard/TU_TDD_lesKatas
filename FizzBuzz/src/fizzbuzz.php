<?php
namespace App;

class FizzBuzz
{
	public function isFizz(int $number)
	{
		return $number % 3 === 0 
			? 'Fizz' 
			: false;
	}
}