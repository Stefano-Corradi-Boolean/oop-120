<?php

class Address {

  public $street;
  public $city;
  public $postcode;
  public $country = 'Italy';

  public function __construct(string $_street, string $_city, string $_postcode){
    $this->street = $_street;
    $this->city = $_city;
    $this->postcode = $_postcode;
  }

  public function getFullAddress(){
    return "$this->street, $this->postcode, $this->city - $this->country";
  }

}