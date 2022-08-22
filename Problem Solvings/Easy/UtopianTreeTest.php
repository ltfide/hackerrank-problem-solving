<?php

use PHPUnit\Framework\TestCase;

class UtopianTree
{
   /** 
   * Complete the 'utopianTree' function below.
   *
   * The function is expected to return an INTEGER.
   * The function accepts INTEGER n as parameter.
   * Each spring doubles in height, summer height by 1 meter
   */
   static function utopianTree(int $n)
   {
      // $result = 0;
      // for ($i=0; $i <= $n; $i++) { 
      //    $i % 2 === 0 ? $result += 1 : $result+=$result; 
      // }
      // return $result;

      if ($n < 3) return $n + 1;
      return $n % 2 === 0 ? (self::utopianTree($n - 2) * 2) + 1 : (self::utopianTree($n - 2) + 1) * 2;
   }  
}

class UtopianTreeTest extends TestCase
{
   public function testUtopianTree()
   {
      $this->assertEquals(1, UtopianTree::utopianTree(0));
      $this->assertEquals(3, UtopianTree::utopianTree(2));
      $this->assertEquals(7, UtopianTree::utopianTree(4));
      $this->assertEquals(14, UtopianTree::utopianTree(5));
   }
}
