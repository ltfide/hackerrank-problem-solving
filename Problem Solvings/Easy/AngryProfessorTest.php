<?php

use PHPUnit\Framework\TestCase;

class AngryProfessor
{
   /**
    *Complete the 'angryProfessor' function below.
    *
    * The function is expected to return a STRING.
    * The function accepts following parameters:
    *  1. INTEGER k = total students arrived on time
    *  2. INTEGER_ARRAY a = total student
   */
   static function angryProfessor(int $k, array $students) :string 
   {
      $result = count(array_filter($students, function ($student) {
         return $student <= 0;
      }));

      return $result >= $k ? 'NO' : 'YES';
   }
}

class AngryProfessorTest extends TestCase
{
   public function testAngryProfessor()
   {
      $this->assertSame('YES', AngryProfessor::angryProfessor(3, [-1,-3,4,2]));
      $this->assertSame('YES', AngryProfessor::angryProfessor(4, [-2,-1,3,4]));
      $this->assertSame('NO', AngryProfessor::angryProfessor(4, [-2,-1,-3,-4]));
      $this->assertSame('NO', AngryProfessor::angryProfessor(2, [0,-1,2,1]));
   }
}