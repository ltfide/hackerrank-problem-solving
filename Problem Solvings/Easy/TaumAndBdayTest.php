<?php

use PHPUnit\Framework\TestCase;

class TaumAndBday
{
   /**
    * Function Description
    * Complete the function taumBday in the editor below. It should return the minimal cost of obtaining the desired gifts.
    * taumBday has the following parameter(s):
    *
    * int b: the number of black gifts
    * int w: the number of white gifts
    * int bc: the cost of a black gift
    * int wc: the cost of a white gift
    * int z: the cost to convert one color gift to the other color
    *
    * Returns
    * int: the minimum cost to purchase the gifts
    *
    * Input Format
    * The first line will contain an integer t, the number of test cases.
    * The next t pairs of lines are as follows:
    * - The first line contains the values of integers b and w.
    * - The next line contains the values of integers bc, wc, and z.
    */
   static function taumBday($b, $w, $bc, $wc, $z) 
   {
      if ($wc+$z < $bc) $bc = $wc + $z;
      if ($bc+$z < $wc) $wc = $bc + $z;
      return $b * $bc + $w * $wc;
   }
}

class TaumAndBdayTest extends TestCase
{
   public function test_taum_and_bday_success()
   {
      $this->assertEquals(29, TaumAndBday::taumBday(3,5,3,4,1));
      $this->assertEquals(20, TaumAndBday::taumBday(10,10,1,1,1));
      $this->assertEquals(37, TaumAndBday::taumBday(5,9,2,3,4));
      $this->assertEquals(12, TaumAndBday::taumBday(3,6,9,1,1));
      $this->assertEquals(35, TaumAndBday::taumBday(7,7,4,2,1));
      $this->assertEquals(12, TaumAndBday::taumBday(3,3,1,9,2));
   }
}
