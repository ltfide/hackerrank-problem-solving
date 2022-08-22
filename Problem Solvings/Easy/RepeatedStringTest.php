<?php

use PHPUnit\Framework\TestCase;

class RepeatedString
{
   /**
    * Function Description 
    * Complete the repeatedString function in the editor below.
    *
    * repeatedString has the following parameter(s):
    * s: a string to repeat
    * n: the number of characters to consider
    *
    * Returns
    * int: the frequency of a in the substring
    *
    * Input Format
    * The first line contains a single string, s.
    * The second line contains an integer, n.
   */ 
   static function repeatedString(string $s, int $n) 
   {
      // Solution 1
      // Panjang string 
      $length = strlen($s);
      // Banyaknya huruf a
      $aCount = preg_match_all("/a/i", $s);
      // 10 / 3 = 3
      $multiplier = floor($n / $length);
      // 10 % 3 = 1 
      $reminder = floor($n % $length);
      $inReminder = 0;
      // 3 * 2 = 6
      $inMultiplier = $multiplier * $aCount;
      for ($i=0; $i < $reminder; $i++) { 
         if ($s[$i] === 'a') $inReminder++;
      }
      return $inMultiplier + $inReminder;
   }
}

class RepeatedStringTest extends TestCase
{
   public function test_repeated_string_success()
   {
      $this->assertEquals(4, RepeatedString::repeatedString('abcac', 10));
      $this->assertEquals(7, RepeatedString::repeatedString('aba', 10));
      $this->assertEquals(5, RepeatedString::repeatedString('abax', 10)); 
      $this->assertEquals(1000000000000, RepeatedString::repeatedString('a', 1000000000000));

   }
}