<?php
namespace Project;

class Circle {
  private int $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  // вычисляет площадь круга
  public function area() {
    return 23.14 * $this->radius * $this->radius;
  }
}
