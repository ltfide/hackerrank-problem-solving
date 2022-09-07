<?php

use PHPUnit\Framework\TestCase;

class CavityMap
{
   static function cavityMap($grid)
   {
      for ($i=1; $i < sizeof($grid) - 1; $i++) { 
         for ($j=1; $j < sizeof($grid) - 1; $j++) { 
            if ($grid[$i][$j] > $grid[$i][$j-1] && $grid[$i][$j] > $grid[$i][$j+1] &&  $grid[$i][$j] > $grid[$i-1][$j] && $grid[$i][$j] > $grid[$i+1][$j]) {
               $grid[$i][$j] = 'X';
            }
         }
      }

      return $grid;
   }
}

class CavityMapTest extends TestCase
{
   public function test_cavity_map()
   {
      $firstTest = ['989', '1X1', '111'];
      $secondTest = ['1112', '1X12', '18X2', '1234'];
      $thirdTest = ['6254', '9979', '9153', '6678'];
      $fourthTest = ['1234', '4321', '4312', '8972'];
      $this->assertSame($firstTest, CavityMap::cavityMap(['989', '191', '111']));
      $this->assertSame($secondTest, CavityMap::cavityMap(['1112', '1912', '1892', '1234']));
      $this->assertSame($thirdTest, CavityMap::cavityMap(['6254', '9979', '9153', '6678']));
      $this->assertSame($fourthTest, CavityMap::cavityMap(['1234', '4321', '4312', '8972']));
   }
}