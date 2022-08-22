<?php

use PHPUnit\Framework\TestCase;

class CountingValleys
{
   static function countingValleys($steps, $path)
   {
      $valley_count = 0;
      $sea_level = 0;
      $cases = ['U' => 1, 'D' => -1];

      for ($i=0; $i < strlen($path); $i++) { 
         if ($sea_level > 0) {
            $sea_level += $cases[$path[$i]];
            continue;
         }
         $sea_level += $cases[$path[$i]];

         if ($sea_level == 0) {
            $valley_count += 1;
         }
      }

      // echo $sea_level;
      return $valley_count;
   }
}

// echo CountingValleys::countingValleys(8, 'DDUUUUUUUUU');

class CountingValleysTest extends TestCase
{
   public function testCountingValleys()
   {
      $this->assertEquals(1, CountingValleys::countingValleys(8, 'UUDDDDUU'));
   }
}
