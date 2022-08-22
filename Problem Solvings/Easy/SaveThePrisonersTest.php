<?php

use PHPUnit\Framework\TestCase;

class SaveThePrisoners
{
   /**
   * Complete the 'saveThePrisoner' function below.
   *
   * The function is expected to return an INTEGER.
   * The function accepts following parameters:
   *  1. INTEGER prisioners : the number of prisoners
   *  2. INTEGER sweets : the number of sweets
   *  3. INTEGER start : the chair number to start passing out treats at
   */
   static function saveThePrisoners(int $prisioners, int $sweets, int $start)
   {
      // 3 + (7-1) % 3
      $result = ($start + $sweets-1) % $prisioners;
      
      if ($result === 0) {
         return $prisioners;
      }

      return $result;
   }
}

class SaveThePrisonersTest extends TestCase
{
   public function testSaveThePrisoners()
   {
      $this->assertEquals(2, SaveThePrisoners::saveThePrisoners(5,2,1));
      $this->assertEquals(3, SaveThePrisoners::saveThePrisoners(5,2,2));
      $this->assertEquals(6, SaveThePrisoners::saveThePrisoners(7,19,2));
      $this->assertEquals(3, SaveThePrisoners::saveThePrisoners(3,7,3));
   }
}