<?php

use PHPUnit\Framework\TestCase;

class SequenceEquation
{
   /**
   * Complete the 'permutationEquation' function below.
   *
   * The function is expected to return an INTEGER_ARRAY.
   * The function accepts INTEGER_ARRAY p as parameter.
   */
   static function sequenceEquation(array $arr)
   {
      $result = [];
      foreach ($arr as $key => $value) {
         $result[] += array_search(array_search($key+1, $arr)+1, $arr) + 1;
         // return $arr[array_search($value, $arr) + 1] + 1;
      }
      return $result;
   }
}

print_r(SequenceEquation::sequenceEquation([5,2,1,3,4]));
// print_r(SequenceEquation::sequenceEquation([4,3,5,1,2]));
// print_r(SequenceEquation::sequenceEquation([2,3,1]));

// class SequenceEquationTest extends TestCase
// {
//    public function testSequenceEquation()
//    {
//       $this->assertEquals([4,2,5,1,3], SequenceEquation::sequenceEquation([5,2,1,3,4]));
//    }
// }