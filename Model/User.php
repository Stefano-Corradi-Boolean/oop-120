<?php 

class User {
  
  private $name;
  private $surname;
  private $email;

  public $address;
  public $phone_nuber;

  // passando le proprità al costruttore rendo obbligatori i dati
  function __construct(string $_name,string  $_surname,string  $_email, Address $_address){
    // $this fa riferimento alla classe e la variabile d'istanza è collegara con -> senza $
    
    // non valorizzo qui le variabili perché passo dalle funzioni setter che li controllano
    // $this->name = $_name;
    // $this->surname = $_surname;
    // $this->email = $_email;
    
    $this->setName($_name);
    $this->setSurname($_surname);
    $this->setEmail($_email);
    $this->address = $_address;

  }

  /// SETTER /////////
  public function setName($_name){
    // qui effettuo i controlli ed eventualmente restituisco un errore
    $this->name = $_name;
  }

  public function setSurname($_surname){
    // qui effettuo i controlli ed eventualmente restituisco un errore
    $this->surname = $_surname;
  }

  public function setEmail($_email){
    // qui effettuo i controlli ed eventualmente restituisco un errore
    $this->email = $_email;
  }


  /// GETTER /////////
  // le funzione di tipo get (getter) devono avere un return
  public function getFullName(){
      return $this->name . ' ' . $this->surname;
  }

  // avendo impostato le variabili come private per potere accedere ai dati devo creare delle funzioni public che li restituiscono
  public function getName(){
      return $this->name;
  }

  public function getSurname(){
      return $this->surname;
  }

  public function getEmail(){
      return $this->name;
  }

}