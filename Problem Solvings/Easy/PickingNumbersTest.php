<?php

use PHPUnit\Framework\TestCase;

class PickingNumbers
{
   static function pickingNumbers(array $arr)
   {
      $biggest = 0;
      $newArr = [];
      foreach ($arr as $value) {
         // example value = 1 2 2 3
         $subArr = array_filter($arr, function($subElem)use($value) {
            /**
             * value = 1
             * loop 1 => 1 - 1 === 0 || 1 - 1 === 1 = true => 1
             *        => 1 - 2 === 0 || 1 - 2 === 1 = false
             *        => 1 - 2 === 0 || 1 - 2 === 1 = false
             *        => 1 - 3 === 0 || 1 - 3 === 1 = false
             * 
             * value = 2
             * loop 2 => 2 - 1 === 0 || 2 - 1 === 1 = true => 1
             *        => 2 - 2 === 0 || 2 - 2 === 1 = true => 2
             *        => 2 - 2 === 0 || 2 - 2 === 1 = true => 2
             *        => 2 - 3 === 0 || 2 - 3 === 1 = false
             * 
             * value = 2
             * loop 3 => 2 - 1 === 0 || 2 - 1 === 1 = true => 1
             *        => 2 - 2 === 0 || 2 - 2 === 1 = true => 2
             *        => 2 - 2 === 0 || 2 - 2 === 1 = true => 2
             *        => 2 - 3 === 0 || 2 - 3 === 1 = false
             * 
             * value = 3
             * loop 4 => 3 - 1 === 0 || 3 - 1 === 1 = false
             *        => 3 - 2 === 0 || 3 - 2 === 1 = true => 2
             *        => 3 - 2 === 0 || 3 - 2 === 1 = true => 2
             *        => 3 - 3 === 0 || 3 - 3 === 1 = true => 3
             */ 
            return $value-$subElem === 0 || $value-$subElem  === 1;
         });

         $newArr[] = $subArr;

         if (count($subArr) > $biggest) {
            $biggest = count($subArr);
         }
      }

      return $biggest;
   }
}

// print_r(PickingNumbers::pickingNumbers([1,2,2,3,1,2,4,7,5]));
// print_r(PickingNumbers::pickingNumbers([1,2,2,3]));

class PickingNumbersTest extends TestCase
{
   public function testPickingNum()
   {
      $this->assertEquals(3, PickingNumbers::pickingNumbers([1,2,2,3]));
      $this->assertEquals(5, PickingNumbers::pickingNumbers([1,2,2,3,1,2,4,7,5]));
      $this->assertEquals(3, PickingNumbers::pickingNumbers([4,6,5,3,3,1]));
      $this->assertEquals(5, PickingNumbers::pickingNumbers([1,2,2,3,1,2]));
   }
}


