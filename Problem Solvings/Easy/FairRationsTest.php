<?php

use PHPUnit\Framework\TestCase;

class FairRations
{
   /**
    * Function Description
    *
    * Complete the fairRations function in the editor below.
    * fairRations has the following parameter(s):
    * int B[N]: the numbers of loaves each persons starts with
    *
    * Returns
    * string: the minimum number of loaves required, cast as a string, or 'NO'
    *
    * Input Format
    * The first line contains an integer N, the number of subjects in the bread line.
    * The second line contains N space-separated integers B[i].
    */
   static function fairRations($b)
   {
      $loaves = 0;
      $i = 0;
      $end = sizeof($b) - 1;

      while ($i < $end) {
         if ($b[$i] % 2) {
            $b[$i+1]++;
            $loaves += 2;
         }
         $i++;
      }
      return $b[$end] % 2 ? 'NO' : $loaves;
   }
}

class FairRationsTest extends TestCase
{
   public function test_fair_rations()
   {
      $this->assertEquals(4, FairRations::fairRations([4,5,6,7]));
      $this->assertEquals(4, FairRations::fairRations([2,3,4,5,6]));
      $this->assertEquals('NO', FairRations::fairRations([1,2]));
   }
}