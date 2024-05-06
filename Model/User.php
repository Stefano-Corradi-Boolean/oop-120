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

    if(empty($_name) || strlen($_name) < 3){
      throw new Exception('Il nome deve avere almeno 3 caratteri');
    }
    $this->name = $_name;
  }

  public function setSurname($_surname){
    // qui effettuo i controlli ed eventualmente restituisco un errore
    if(empty($_surname) || strlen($_surname) < 3){
      throw new Exception('Il nome deve avere almeno 3 caratteri');
    }
    $this->surname = $_surname;
  }
  
  public function setEmail($_email){
    // qui effettuo i controlli ed eventualmente restituisco un errore
    if(!$this->checkValidEmail($_email)){
      throw new Exception('L\'indirizzo email non è valido');
    }
    $this->email = $_email;
  }

  public function setAge($_age){
    if( !is_numeric($_age) || $_age < 18 || $_age > 120  ){
      throw new Exception('L\'età deve essere un numero compreso fra 18 3e 120');
    }
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

  private function checkValidEmail($email){
    $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

    return (preg_match($pattern,$email));
  }

}