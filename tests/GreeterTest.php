<?php
require 'src/Greeter.php';

class GreeterTest extends PHPUnit_Framework_TestCase
{
  function testEmptyConstructor()
  {
    $greeter = new Greeter();
    $this->assertEquals("Hello, World!", $greeter->greet());
  }

  function testPassName()
  {
    $greeter = new Greeter("Piet");
    $this->assertEquals("Hello, Piet!", $greeter->greet());
  }

  function testPassEmptyString()
  {
    $greeter = new Greeter("");
    $this->assertEquals("Hello, !", $greeter->greet());
  }
}
