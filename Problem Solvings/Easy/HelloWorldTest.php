<?php

use PHPUnit\Framework\TestCase;

class HelloWorld 
{
   static function helloWorld() {
      return 'Hello World';
   }
}

class HelloWorldTest extends TestCase
{  
   public function testHelloWorld()
   {
      $this->assertEquals("Hello World", HelloWorld::helloWorld());
   }
}