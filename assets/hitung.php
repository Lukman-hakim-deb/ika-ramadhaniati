<?php

class Calculator
{

  public $num1;
  public $num2;
  public $calc;

  public function __construct($number1, $number2, $calculate)
  {
    $this->num1 = $number1;
    $this->num2 = $number2;
    $this->calc = $calculate;
  }

  //method to calculate what inside the calculator
  public function calcMethod()
  {

    switch ($this->calc) {
      case "Ditambah":
        $result = $this->num1 + $this->num2;
        break;
      case "Dikurang":
        $result = $this->num1 - $this->num2;
        break;
      case "Dikali":
        $result = $this->num1 * $this->num2;
        break;
      case "Dibagi":
        $result = $this->num1 / $this->num2;
        break;
      default:
        $result = "ERROR";
        break;
    }

    return $result; //return the result

  }
}
