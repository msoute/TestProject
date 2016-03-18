<?php
namespace Sander\TestProject;

class Greeter
{
  private $name;

  public function __construct($name = "World")
  {
      $this->name = $name;
  }

  public function greet()
  {
    return "Hello, {$this->name}!";
  }
}
