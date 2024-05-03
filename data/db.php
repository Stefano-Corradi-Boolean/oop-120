<?php

$db = [
  new User('Ugo', 'Deughi', 'ugo@gmail.com', new Address('Via delle Margherite', 'Roma', '00100')),
  new User('Giuseppe', 'Verdi', 'pino@gmail.com'),
  new Employee('Giovanni', 'Bianchi', 'bianchi@gmail.com', new Address('Via Roma', 'Roma', '00100'), 3),
  new User('Martina', 'Rossi', 'matry@gmail.com', new Address('Via delle Martine', 'Milano', '20100')),
  new PremiumUser('Mario', 'Brambilla', 'mario@gmail.com', new Address('Via Roma', 'Roma', '00100'), new Membership('Premium', 100, '2024-05-03') ),
  new User('Alfonso', 'De Alfonsi', 'alf@gmail.com', new Address('Via degli Alfonsi', 'Milano', '20100')),
];