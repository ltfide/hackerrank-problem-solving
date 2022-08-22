<?php

use PHPUnit\Framework\TestCase;

class JumpingOnTheCloudsRev
{
   /** 
    * Function Description
    * Complete the jumpingOnClouds function in the editor below.
    *
    * jumpingOnClouds has the following parameter(s):
    * int c[n]: the cloud types along the path
    * int k: the length of one jump
    *
    * Returns
    * int: the energy level remaining.
    */
   static function jumpingOnCloudsRev($c, $k) 
   {
      $energy = 100;
      $index = 0;

      do {
         $energy -= ($c[$index] == 1) ? 3 : 1;
         $index = ($index + $k) % count($c);
      } while ($index != 0);
    
      return $energy;
   }
}

class JumpingOnTheCloudsRevTest extends TestCase
{
   public function test_jumping_on_the_clouds_success()
   {
      $this->assertEquals(96, JumpingOnTheCloudsRev::jumpingOnCloudsRev([0, 0, 1, 0], 2));
      $this->assertEquals(92, JumpingOnTheCloudsRev::jumpingOnCloudsRev([0, 0, 1, 0, 0, 1, 1, 0], 2));
      $this->assertEquals(80, JumpingOnTheCloudsRev::jumpingOnCloudsRev([1, 1, 1, 0, 1, 1, 0, 0, 0, 0], 3));
   }
}

