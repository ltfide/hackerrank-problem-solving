<?php

use PHPUnit\Framework\TestCase;

class TheHurdleRace
{
   /*
   * Complete the 'hurdleRace' function below.
   *
   * The function is expected to return an INTEGER.
   * The function accepts following parameters:
   *  1. INTEGER k = height the character can jump
   *  2. INTEGER_ARRAY height = the height of each hurdle
   */
   static function hurdleRace(int $k, array $height) :int
   {
      return (max($height) > $k) ? max($height) - $k : 0;
   }
}

class TheHurdleRaceTest extends TestCase
{
   public function testHurdleRace()
   {
      $this->assertEquals(2, TheHurdleRace::hurdleRace(1, [1,2,3,3,2]));
      $this->assertEquals(2, TheHurdleRace::hurdleRace(4, [1,6,3,5,2]));
      $this->assertEquals(0, TheHurdleRace::hurdleRace(7, [2,5,4,5,2]));
   }
}  