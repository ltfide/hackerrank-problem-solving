<?php

use PHPUnit\Framework\TestCase;

class ViralAdvertising
{
   /**
   * Complete the 'viralAdvertising' function below.
   *
   * The function is expected to return an INTEGER.
   * The function accepts INTEGER n as parameter.
   * Day Shared Liked Cumulative
   * ===========================
   * || 1      5     2       2 ||
   * || 2      6     3       5 ||
   * || 3      9     4       9 ||
   * || 4     12     6      15 ||
   * || 5     18     9      24 ||
   * ===========================
   */
   static function viralAdvertising(int $day) :int
   {
      $shared = 5;
      $cummulative = 2;
      for ($i=1; $i < $day; $i++) { 
         // 5/2 * 3 = 6
         $shared = floor($shared / 2) * 3;
         // 6 / 2 = 3
         $cummulative += floor($shared / 2);
      }

      return $cummulative;
   }
}

class ViralAdvertisingTest extends TestCase
{
   public function testViralAdvertising()
   {
      $this->assertEquals(9, ViralAdvertising::viralAdvertising(3));
      $this->assertEquals(15, ViralAdvertising::viralAdvertising(4));
      $this->assertEquals(24, ViralAdvertising::viralAdvertising(5));
      $this->assertSame(24, ViralAdvertising::viralAdvertising(5));
   }
}