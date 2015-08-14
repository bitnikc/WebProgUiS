<?php

/**
 * Magazine class
 */
class Magazine {

  private $id;
  private $name;
  private $price;
  private $checked = false; //Adding to detect if chosen

  public function __construct($id, $name, $price) {
    $this->id =     $id;
    $this->name =   $name;
    $this->price =  $price;
  }

  public function __get($property) {
    if (property_exists($this,$property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }

    return $this;
  }
}

?>
