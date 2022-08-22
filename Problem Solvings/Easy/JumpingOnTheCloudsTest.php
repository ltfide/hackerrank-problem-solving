<?php 

class JumpingOnTheClouds
{
   /**
    * Function Description
    * Complete the jumpingOnClouds function in the editor below.
    *
    * jumpingOnClouds has the following parameter(s):
    * int c[n]: an array of binary integers
    *
    * Returns
    * int: the minimum number of jumps required
    */
   static function jumpingOnClouds(array $arr)
   {
      $jumps = 0;
      for ($i=0; $i < count($arr)+1; $i+=2) { 
         // 0 = 0 => i = 0
         // 2 = 1 => i = 1
         // 3 = 0 => i = 3
         // 5 = 1 => i = 4
         // 6 = 0 => i = 8
         echo $i . PHP_EOL;
         if ($arr[$i] === 1) $i-=1;
         $jumps++;
      }
      return $jumps-1;
   }  
}

// print_r(JumpingOnTheClouds::jumpingOnClouds([0,1,0,0,0,1,0]));
print_r(JumpingOnTheClouds::jumpingOnClouds([0,0,1,0,0,1,0]));
// print_r(JumpingOnTheClouds::jumpingOnClouds([0,0,0,0,1,0]));
