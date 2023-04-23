<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\PHP\Relationship\Composition\House;
use App\OOP\PHP\Relationship\Composition\Room;

$room1 = new Room('WHITE', 20);

$room2 = new Room('LIGHT GRAY', 30);

$room3 = new Room('LIGHT BLUE', 25);

$house = new House([$room1, $room2, $room3]);

// Inheritance IS-A
// Manager IS-A Employee

// Aggregation HAS-A
// Project HAS-A Developer

// Composition PART-OF
// Room PART-OF House