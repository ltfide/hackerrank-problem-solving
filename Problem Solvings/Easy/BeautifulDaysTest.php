<?php

use PHPUnit\Framework\TestCase;

class BeautifulDays
{
   /**
    * Complete the beautifulDays function in the editor below.
    *
    *  beautifulDays has the following parameter(s):
    *  int i: the starting day number
    *  int j: the ending day number
    *  int k: the divisor
    *
    *  Returns
    *  int: the number of beautiful days in the range
    */
   static function beautifulDays(int $startDay, int $endDay, int $divisor) :int
   {
      $result = 0;
      foreach (range($startDay, $endDay) as $value) {
         if (is_int(($value - strrev($value)) / $divisor)) {
            $result++;
         }
      }
      
      return $result;
   }
}

class BeautifulDaysTest extends TestCase
{
   public function testBeuatifulDays()
   {
      $this->assertSame(2, BeautifulDays::beautifulDays(20,23,6));
   }
}