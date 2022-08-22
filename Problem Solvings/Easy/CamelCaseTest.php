<?php

use PHPUnit\Framework\TestCase;

class CamelCase 
{
   /**
   * Complete the 'camelcase' function below.
   *
   * The function is expected to return an INTEGER.
   * The function accepts STRING s as parameter.
   */
   static function camelCase(string $s)
   {
      // if (preg_match_all("/[A-Z]/", $s, $matches)) {
      //    return count($matches[0]) + 1;
      // }
      // return 1;

      $matches = preg_match_all("/[A-Z]/", $s, $match);
      return $matches ? $matches+1 : 1;
   }
}

class CamelCaseTest extends TestCase
{
   public function testCamelCase()
   {
      $this->assertEquals(5, CamelCase::camelCase("saveChangesInTheEditor"));
      $this->assertEquals(1, CamelCase::camelCase("save"));
   }
}