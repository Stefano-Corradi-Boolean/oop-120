<?php

trait Position {
  public $lat;
  public $lng;

  public function getCoordinates() {
 
     return "$this->lat, $this->lng";
 
  }
}