<?php

use PHPUnit\Framework\TestCase;

class LibraryFine
{
   /** 
   * Complete the 'libraryFine' function below.
   *
   * The function is expected to return an INTEGER.
   * The function accepts following parameters:
   *  1. INTEGER d1
   *  2. INTEGER m1
   *  3. INTEGER y1
   *  4. INTEGER d2
   *  5. INTEGER m2
   *  6. INTEGER y2
   */
   static function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) :int
   {
      if ($y1 > $y2) return 10000;
      if ($y1 === $y2 && $m1 > $m2) return 500 * ($m1 - $m2);
      if ($y1 >= $y2 && $m1 === $m2 && $d1 > $d2) return 15 * ($d1 - $d2);
      return 0;
   }
}

class LibraryFineTest extends TestCase
{
   public function test_library_fine_success()
   {
     $this->assertEquals(0, LibraryFine::libraryFine(15,7,2014,1,7,2015)); 
     $this->assertEquals(135, LibraryFine::libraryFine(14,7,2018,5,7,2018)); 
     $this->assertEquals(45, LibraryFine::libraryFine(9,6,2015,6,6,2015));
   }
}