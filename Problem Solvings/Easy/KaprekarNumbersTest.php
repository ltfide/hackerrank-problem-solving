<?php 

class KaprekarNumber
{
   static function kaprekarNumbers(int $n)
   {
      $result = [];
      for ($i=100; $i <= $n; $i++) { 
         $ax = pow($i, 2); //100
         
         
         if (strlen($ax) === 1) {
            $con = str_split($ax, 1);
         } else {
            $con = str_split($ax, floor(strlen($ax) / 2));
         }

         if ($i == array_sum($con)) {
            $result[] = $i;
         }
      }

      // return $result;
      print_r(implode(" ", $result));
   }
}

// print_r(KaprekarNumber::kaprekarNumbers(1000));
// print_r(KaprekarNumber::kaprekarNumbers(300));


$arr = 82093;

$con = str_split($arr, round(strlen($arr) / 2));

print_r(array_reverse($con));