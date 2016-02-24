<?php
class Greeter
{
  private $name;

  function __construct($name = "World")
  {
      $this->name = $name;
  }

  public function greet()
  {
    return "Hello, {$this->name}!";
  }
}
