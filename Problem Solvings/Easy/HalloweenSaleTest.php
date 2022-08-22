<?php

use PHPUnit\Framework\TestCase;

class HalloweenSale
{
   /**
    * Function Description
    * Complete the howManyGames function in the editor below.
    *
    * howManyGames has the following parameters:
    * int p: the price of the first game
    * int d: the discount from the previous game price
    * int m: the minimum cost of a game
    * int s: the starting budget
    *
    * Input Format
    * The first and only line of input contains four space-separated integers p, d, m and s.
    */
   static function howManyGames($p, $d, $m, $s)
   {
      $result = 0;
      // 20<70 // 17<50 // 14<33 // 11<11 
      while($p <= $s) {
         // result=1 // result=2 // result=3 // result=4
         $result++;
         // s=70-20=50 // s=50-17=33 // s=33-14=19 // s=19-11=8
         $s = $s - $p;
         // p=17 // p=14 // p=11 // p=8
         $p = ($p - $d) > $m ? $p - $d : $m;
      }
      return $result;
   }
}

class HalloweenSaleTest extends TestCase
{
   public function test_halloween_sale_success()
   {
      $this->assertEquals(5, HalloweenSale::howManyGames(20,3,6,70));
      $this->assertEquals(6, HalloweenSale::howManyGames(20,3,6,80));
      $this->assertEquals(7, HalloweenSale::howManyGames(20,3,6,85));
   }
}