<?php

// class NomeClasseFiglio extends NomeClasseMadre
class Employee extends User {
  public $level;

  // ricreo il costruttore "gemello" della classe genitore con in più (opzionale) le sue proprità
  function __construct(string $_name,string  $_surname,string  $_email, Address $_address = null, $_level){
    // eredito il costruttore del genitore
    // con parent si accede ai metodi/proprità del genitore
    parent::__construct($_name, $_surname, $_email, $_address);

    // inoltre gestisco i dati specifici del figlio
    $this->level = $_level;

    // posso leggere $this->age del genitore perché è protected
    $this->setDiscount($this->age);
  }

  public function setLevel($_level){
    $this->level = $_level;
  }

  // POLIMORFISMO
  // sovrascrivo la classe del genitore con delle regole specifiche del figlio
  private function setDiscount($_age){
    if($_age >= 65){
      $this->discount = 50;
    }else{
      $this->discount = $this->level * 10;
    }
  }
}