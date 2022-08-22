<?php

use PHPUnit\Framework\TestCase;

class CutTheSticks
{
   /**
   * Function Description
   *
   * Complete the cutTheSticks function in the editor below. It should return an array of integers representing the number of sticks before each cut operation is performed.
   * 
   * cutTheSticks has the following parameter(s):
   * int arr[n]: the lengths of each stick
   *
   * Returns
   * int[]: the number of sticks after each iteration
   */
   static function cutTheSticks($arr)
   {  
      $res = [];
      while ($arr) {
         $res[] = count($arr);
         $arr = array_map(function($x)use($arr) {
            return $x - min($arr);
         }, array_filter($arr, function($x)use($arr) {
            return $x != min($arr);
         }));
      }
      return $res;
   }
}

class CutTheSticksTest extends TestCase
{
   public function test_cut_sticks_success()
   {
      $this->assertEquals([3,2,1], CutTheSticks::cutTheSticks([1,2,3]));
      $this->assertEquals([6,4,2,1], CutTheSticks::cutTheSticks([5,4,4,2,2,8]));
      $this->assertEquals([8,6,4,1], CutTheSticks::cutTheSticks([1,2,3,4,3,3,2,1]));
   }
}