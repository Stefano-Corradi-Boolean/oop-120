<?php 

// impoerto la classe. Il nome della file della classe deve avere lo stesso nome della classe
require_once __DIR__ . '/Model/User.php';
require_once __DIR__ . '/Model/Employee.php';
require_once __DIR__ . '/Model/Membership.php';
require_once __DIR__ . '/Model/PremiumUser.php';
require_once __DIR__ . '/Model/Address.php';
require_once __DIR__ . '/data/db.php';


// gestione del trait
// $dipendente = new Employee('Giovanni', 'Bianchi', 'bianchi@gmail.com', new Address('Via Roma', 'Roma', '00100'), 3);
// $dipendente->lat = 'XXXXXX';
// $dipendente->lng = 'YYYYYYY';
// var_dump($dipendente->getCoordinates());

// Generazione di un ERRORE PHP
//throw new Exception('Ciao sono un errore PHP');


$db[1]->setAge(80);
// propiretà statica
// si accede dalla classe e non dall'istanza e la sibìntassi è:
// MiaClasse::$miaPoprieta
// var_dump(User::$country);
// var_dump(User::getSaluto('Filippo'));

// // controllo senza nullsafe operator
// if(isset($db[1]->address)){
//   var_dump($db[1]->address->getFullAddress());
  
// }else{
//   var_dump('noooooooo');
// }

// // controllo con nullsafe operator
// var_dump($db[1]->address?->getFullAddress() ?? 'noooooo!!!!!');
// die();

// $ugo = new User('Ugo', 'Deughi', 'ugo@gmail.com', new Address('Via delle Margherite', 'Roma', '00100'));

// $giuseppe = new User('Giuseppe', 'Verdi', 'pino@gmail.com', new Address('Via dei Platani', 'Milano', '20100'));
// $giuseppe->phone_nuber = ' + 39 654 654 654';

//  $ugo->setEmail('ugo@aruba.it');

// var_dump($ugo);
// var_dump($giuseppe);
// var_dump($giuseppe->getName());
// var_dump($giuseppe->getFullName());

// // address è una classe 'iniettata' al momente della creazione dell'istanza
// // quindi accedo ai suoi metodi passando per l'istanza
// var_dump($giuseppe->address->getFullAddress());


// ereditarità ///////////////////////

// $nuovo_dipendente = new Employee('Giovanni', 'Bianchi', 'bianchi@gmail.com', new Address('Via Roma', 'Roma', '00100'), 3);

// $nuovo_utente = new User('Giovanni', 'Bianchi', 'bianchi@gmail.com', new Address('Via Roma', 'Roma', '00100'));

// var_dump($nuovo_dipendente);
// var_dump($nuovo_utente);

// var_dump($nuovo_dipendente->level);
// var_dump($nuovo_utente->level);  // null 


// ERRORI
// stampo l'errore se fallisce la creazione del nuovo utente
try {
  $ugo = new User('Ugo', 'Deughi', 'ugo@gmail.com', new Address('Via delle Margherite', 'Roma', '00100'));
} catch (Exception $e) {
  var_dump($e->getMessage());
}

// stampo l'errore se fallisce il settaggio dell'età
try {
  $ugo->setAge(200);
} catch (Exception $e) {
  var_dump($e->getMessage());
}

var_dump($ugo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="css/style.css">
  <title>OOP</title>

</head>
<body>
  <div class="container my-5">
    <h1>OOP</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Info</th>
          <th scope="col">Indirizzo</th>
          <th scope="col">Livello</th>
          <th scope="col">Sconto</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($db as $user): ?>
          <tr>
            <td><?php echo $user->getUserInfo() ?></td>
            <!-- stampo l'indirizzo solo se c'è  -->
            <td><?php echo $user->address?->getFullAddress() ?? '-' ?></td>
            <!-- stampo il livello solo se c'è  -->
            <td><?php echo $user->level ?? '-' ?></td>
            <td><?php echo $user->discount ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  



  <script src="js/script.js"></script>
</body>
</html>