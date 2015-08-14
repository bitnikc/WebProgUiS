<?php

/**
 * Subscription class
 */
class Subscription {

	private $subscriptions = array();

	public static function listMagazines($magazines) {
    $list = "";
    foreach($magazines as $mag) {
      $list .= '<input type="checkbox" name="' . $mag->id . '" value="1"';
      if($mag->checked) {$list .= "checked";}
      $list .= " /> \r\n    ";
      $list .= "<label>$mag->name ($mag->price kr/year)</label> <br /> \r\n    ";
    }
    return $list;
  }

	public function subscribe($magazine_id, $email) {
		$this->subscriptions["$magazine_id"] = $email;
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
