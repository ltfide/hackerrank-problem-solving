<?php

use PHPUnit\Framework\TestCase;

class BeautifulTriplets
{
   /**
    * Function Description
    *
    * Complete the beautifulTriplets function in the editor below.
    *
    * beautifulTriplets has the following parameters:
    * int d: the value to match
    * int arr[n]: the sequence, sorted ascending
    *
    * Returns
    * int: the number of beautiful triplets
    *
    * Input Format
    * The first line contains 2 space-separated integers, n and d, the length of the sequence and the beautiful difference.
    * The second line contains n space-separated integers arr[i].
   */
   static function beautifulTriplets(int $d, array $arr)
   {
      $count = 0;
      for ($i=0; $i < count($arr); $i++) { 
         // 1+3=4 && 1+3+3=7
         // 2+3=5 && 2+3+3=8
         // 4+3=7 && 4+3+3=10
         // 5+3=8 && 5+3+3=11
         if(in_array($arr[$i]+$d, $arr) && in_array($arr[$i]+$d+$d, $arr)) {
            $count++;
         }
      }
      return $count;
   }
}

class BeautifulTripletsTest extends TestCase
{
   public function test_beautiful_triplets_success()
   {
      $this->assertEquals(3, BeautifulTriplets::beautifulTriplets(1, [2,2,3,4,5]));
      $this->assertEquals(3, BeautifulTriplets::beautifulTriplets(3, [1,2,4,5,7,8,10]));
   }
}