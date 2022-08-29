<?php

use PHPUnit\Framework\TestCase;

class MinimumDistances
{
   static function minimumDistances(array $a)
   {
      $nums = [];
      $min = -1;
      for($i=0;$i<sizeof($a);$i++){
         $nums[$a[$i]] [] = $i;
         if(sizeof($nums[$a[$i]]) == 2) {
               $cMin = abs($nums[$a[$i]][0] - $nums[$a[$i]][1]);
               if($cMin < $min || $min == -1){
                  $min = $cMin;
               }
         }
      }
      return $min;
   }
}

class MinimumDistancesTest extends TestCase
{
   public function test_minimum_distances()
   {
      $this->assertEquals(2, MinimumDistances::minimumDistances([3,2,1,2,3]));
      $this->assertEquals(3, MinimumDistances::minimumDistances([7,1,3,4,1,7]));
   }
}