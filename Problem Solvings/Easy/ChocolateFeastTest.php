<?php

use PHPUnit\Framework\TestCase;

class ChocolateFeast
{
   /**
    * Function Description
    *
    * chocolateFeast has the following parameter(s):
    * int n: Bobby's initial amount of money
    * int c: the cost of a chocolate bar
    * int m: the number of wrappers he can turn in for a free bar
    *
    * Returns
    * int: the number of chocolates Bobby can eat after taking full advantage of the promotion
    * 
    * Note: Little Bobby will always turn in his wrappers if he has enough to get a free chocolate.
    * 
    * Input Format
    * The first line contains an integer, t, the number of test cases to analyze.
    * Each of the next  lines contains three space-separated integers: n, c, and m. They represent money to spend, cost of a chocolate, and the number of wrappers he can turn in for a free chocolate.
   */
   static function chocolateFeast($n, $c, $m) 
   {
      $candies = floor($n / $c);
      $wrappers = $candies;

      while($m <= $wrappers) {
         $candies++; 
         $wrappers++; 
         $wrappers -= $m;
      }

      return $candies;
   }
}

class ChocolateFeastTest extends TestCase
{
   public function test_cholocate_feast_success()
   {
      $this->assertEquals(9, ChocolateFeast::chocolateFeast(15,3,2));
      $this->assertEquals(6, ChocolateFeast::chocolateFeast(10,2,5));
      $this->assertEquals(3, ChocolateFeast::chocolateFeast(12,4,4));
      $this->assertEquals(5, ChocolateFeast::chocolateFeast(6,2,2));
   }
}