<?php

use PHPUnit\Framework\TestCase;

class GameOfThrones
{
   /**
    * Function Description
    * Complete the gameOfThrones function below.
    *
    * gameOfThrones has the following parameter(s):
    * string s: a string to analyze
    *
    * Returns
    * string: either YES or NO
    *
    * Input Format
    * A single line which contains s.
   */
   static function gameOfThrones(string $s) :string
   {
      $total = 0;
      foreach (array_count_values(str_split($s)) as $key => $value) {
         $total += $value % 2;
      }
      return $total > 1 ? 'NO' : 'YES';
   }
}

class GameOfThronesTest extends TestCase
{
   public function test_game_of_thrones_success()
   {
      $this->assertEquals('YES', GameOfThrones::gameOfThrones("aaabbbb"));
      $this->assertEquals('YES', GameOfThrones::gameOfThrones("cdcdcdcdeeeef"));
      $this->assertEquals('NO', GameOfThrones::gameOfThrones("cdefghmnopqrstuvw"));
   }
}