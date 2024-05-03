<?php

class PremiumUser extends User {
  public $membership;

  // ricreo il costruttore "gemello" della classe genitore con in più (opzionale) le sue proprità
  function __construct(string $_name,string  $_surname,string  $_email, Address $_address = null, Membership $_membership){
    // eredito il costruttore del genitore
    // cpn parent si accede ai metodi/proprità del genitore
    parent::__construct($_name, $_surname, $_email, $_address);

    $this->membership = $_membership;

  }

  public function getUserInfo(){
    // prendo i dati dal metodo del genitore

    return parent::getUserInfo() . ", Memebrship" . $this->membership->getMebershipDetail();
  }

}