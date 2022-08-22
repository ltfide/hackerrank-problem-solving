<?php 

class MinimumDistances
{
   static function minimumDistances(array $arr)
   {
      $newArray = array_diff($arr, $arr);
      return $newArray;
   }
}

// print_r(MinimumDistances::minimumDistances([7,1,3,4,1,7]));
$arr1 = [7,1,3,4,1,7];

function sum($carry, $item) {
   $carry += $item;
   return $carry;
}

print_r(array_reduce($arr1, function ($a, $item) {
   $a *= $item;
   return $a;
}, 1));

// print_r(array_unique($arr1));

print_r(array_key_exists(7, $arr1));