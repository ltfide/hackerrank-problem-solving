<?php

use PHPUnit\Framework\TestCase;

class ElectronicsShop
{
   static function ElectronicsShop(array $keyboards, array $drives, int $budget) :int
   {
      $spendings = [];

      for ($i=0; $i < count($keyboards); $i++) { 
         for ($j=0; $j < count($drives); $j++) { 
            $spendings[] += $keyboards[$i] + $drives[$j];
         }
      }

      rsort($spendings);
      foreach ($spendings as $spend) {
         if ($spend < $budget) {
            return $spend;
         } 
      }

      return -1;
   }
}

class ElectronicsShopTest extends TestCase
{
   public function testElectronicsShop()
   {
      $this->assertEquals(58, ElectronicsShop::ElectronicsShop([40,50,60], [5,8,12], 60));
      $this->assertEquals(9, ElectronicsShop::ElectronicsShop([3,1], [5,2,8], 10));
      $this->assertEquals(-1, ElectronicsShop::ElectronicsShop([4],[5], 5));
   }
}