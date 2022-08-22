<?php

use PhpParser\Lexer\TokenEmulator\ExplicitOctalEmulator;
use PHPUnit\Framework\TestCase;

class FindDigits 
{
   static function findDigits($n)
   {
      $split = str_split($n);
      $result = 0;

      foreach ($split as $value) 
      {
         if ($value != 0 && $n % $value === 0) {
            $result++;
         }   
      }

      return $result;
   }
}

// print_r(FindDigits::findDigits(12));

class FindDigitsTest extends TestCase
{
   public function testFindDigits()
   {
      $this->assertEquals(2, FindDigits::findDigits(12));
      $this->assertEquals(3, FindDigits::findDigits(1012));
      $this->assertEquals(1, FindDigits::findDigits(100));
   }
}