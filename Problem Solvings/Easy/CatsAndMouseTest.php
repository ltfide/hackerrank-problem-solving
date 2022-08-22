<?php

use PHPUnit\Framework\TestCase;

class CatsAndMouse
{
   static function catsAndMouse(int $catA, int $catB, int $mouseC) :string 
   {
      if (abs($mouseC - $catA) == abs($mouseC - $catB)) return 'Mouse C';
      return abs($mouseC - $catA) > abs($mouseC - $catB) ? 'Cat B' : 'Cat A';
   }
}

class CatsAndMouseTest extends TestCase
{
   public function testCatsAndMouse()
   {
      $this->assertEquals('Cat B', CatsAndMouse::catsAndMouse(2,5,4));
      $this->assertEquals('Cat B', CatsAndMouse::catsAndMouse(1,2,3));
      $this->assertEquals('Mouse C', CatsAndMouse::catsAndMouse(1,3,2));
   }
}