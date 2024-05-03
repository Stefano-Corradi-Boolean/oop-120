<?php 

class Membership {

  public $name;
  public $price;
  public $start_date;

  public function __construct(string $_name,int $_price,string $_start_date){
    $this->name = $_name;
    $this->price = $_price;
    $this->start_date = $_start_date;
  }

  public function getMebershipDetail(){
    return "$this->name | $this->price |$this->start_date";
  }


}