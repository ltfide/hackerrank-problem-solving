<?php

use PharIo\Manifest\PhpElement;

class EqualizeTheArray
{
   static function equalizeTheArray(array $arr)
   {
      // $min = array_filter($arr, function($x)use($arr) {
      //    return $x !== array_keys(array_count_values($arr), max(array_count_values($arr)))[0];
      // });
      // return count($min);

      // Solution II
      $occurence = 0;
      foreach ($arr as $value) {
         $len = count(array_filter($arr, function($item)use($value) {
            return $item === $value;
         }));
         if ($len > $occurence) {
            $occurence = $len;
         }
      }
      return count($arr) - $occurence;
   }
}

print_r(EqualizeTheArray::equalizeTheArray([3, 3, 2, 1, 3,4,3,3,3,3]));
// print_r(EqualizeTheArray::equalizeTheArray([1,2,3]));