<?php 

class User {
  
  // una porpità privata è visibile solo dalla classe stessa. NON dall'esterno e NON dai figli
  private $name;
  private $surname;
  private $email;

  public $address;
  public $discount = 0;
  // una proprità protected non è visibile dall'esterno ma solo dai suoi "figli"
  protected $age = 18; 
  public $phone_nuber;
  public static $country = 'Italy';

  // passando le proprità al costruttore rendo obbligatori i dati
  function __construct(string $_name,string  $_surname,string  $_email, Address $_address = null){
    // $this fa riferimento alla classe e la variabile d'istanza è collegara con -> senza $
    
    // non valorizzo qui le variabili perché passo dalle funzioni setter che li controllano
    // $this->name = $_name;
    // $this->surname = $_surname;
    // $this->email = $_email;
    
    $this->setName($_name);
    $this->setSurname($_surname);
    $this->setEmail($_email);
    $this->address = $_address;

    $this->setDiscount($this->age);
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

  public function setAge($_age){
    $this->age = $_age;
    $this->setDiscount($_age);
  }

  private function setDiscount($_age){
    if($_age >= 65){
      $this->discount = 40;
    }
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

  public function getAge(){
      return $this->age;
  }

  public function getUserInfo(){
    return "$this->name $this->surname - anni $this->age";
  }

  // METODI STATICI
  public static function getSaluto($name){
    // da un metodo stati con non posso accedere alle proprità dell'stanza ma posso accedere alle proprità statiche con self::$miaPropita
    return 'Ciao ' . $name . ' benvenuto in ' . self::$country;
  }

}