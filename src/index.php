<?php

use App\OOP\PHP\BMW;
use App\OOP\PHP\Mercedes;
use App\OOP\PHP\Order;
use App\OOP\PHP\HttpClient;
use App\OOP\PHP\TCPClient;

require_once __DIR__ . '/../vendor/autoload.php';

$bmw = new BMW(320, 2,'FRONT', 'BLACK');
$mercedes = new Mercedes(250, 4,'BACK', 'WHITE');

$order1 = new Order('Cairo', 'Alexandria', 120);
$order2 = new Order('El Minya', 'Aswan', 300);

$order1->deliverOrder($mercedes);
$order2->deliverOrder($bmw);

$http = new HttpClient('http://www.abc.com', 5);
$http = new TCPClient('http://www.abc.com', 5,'8000');

var_dump($http->connect() . "\n" . $http->call('/users') . "\n" .  $http->terminate('/') . "\n" . $http->welcomeAfterConnection());