<?php 

// impoerto la classe. Il nome della file della classe deve avere lo stesso nome della classe
require_once __DIR__ . '/Model/User.php';
require_once __DIR__ . '/Model/Address.php';

$ugo = new User('Ugo', 'Deughi', 'ugo@gmail.com', new Address('Via delle Margherite', 'Roma', '00100'));

$giuseppe = new User('Giuseppe', 'Verdi', 'pino@gmail.com', new Address('Via dei Platani', 'Milano', '20100'));
$giuseppe->phone_nuber = ' + 39 654 654 654';

 $ugo->setEmail('ugo@aruba.it');

var_dump($ugo);
var_dump($giuseppe);
var_dump($giuseppe->getName());
var_dump($giuseppe->getFullName());

// address è una classe 'iniettata' al momente della creazione dell'istanza
// quindi accedo ai suoi metodi passando per l'istanza
var_dump($giuseppe->address->getFullAddress());

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
    <h2 id="output"></h2>
  </div>
  



  <script src="js/script.js"></script>
</body>
</html>