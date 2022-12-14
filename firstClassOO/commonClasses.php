<?php

// DOMACI
class Calculator {
  private string $name = "Dig i Tron";
  public float $num1;
  public float $num2;
  private float $result;

  function __construct($num1, $num2)
  {
    $this->num1 = $num1;
    $this->num2 = $num2;
  }
  
  function add() {
    $this->result = $this->num1 + $this->num2;
  }
  function sub() {
    $this->result = $this->num1 - $this->num2;
  }
  function mul() {
    $this->result = $this->num1 * $this->num2;
  }
  function div() {
    $this->result = $this->num1 / $this->num2;
  }

  function getResult() {
    return $this->name . ": " . round($this->result, 2);
  }
}


class Vehicle {
  private $manufacturer;
  private $type;

  public function setType($newType) {
    if($newType == "car") {
      $this->type = $newType;
    } else {
      $this->setDefaultType();
    }
  }

  private function setDefaultType() {
    $this->type = "undefined";
  }

  function getType() {
    return $this->type;
  }

  function setManufacturer($newManufacturer) {
    $this->manufacturer = $newManufacturer;
  }
  function getManufacturer() {
    return $this->manufacturer;
  }

}

class Student {
  private string $name;
  private string $lastName;
  private int $age;
  private int $grade;

  public function __construct($firstName, $lastName, $age) {
    $this->name = $firstName;
    $this->lastName = $lastName;
    $this->age = $age;
  }

  static function sayHi() { // uvek dostupna metoda
    return "Hi there";
  }

  // public function __destruct()
  // {
  //   echo "Remove from memory";
  // }

  function setName($newName) {
    $this->name = $newName;
  }

  function doExam() {
    $this->grade = rand(1, 5);
  }

  function getStatus() {
    return $this->name . " " . $this->lastName . " " . $this->grade;
  }
}





?>