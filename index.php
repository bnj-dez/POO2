<?php

require_once 'Truck.php';

$truck = new Truck('red', 3, 40,10);
var_dump($truck);

$truck->setCurrentSpeed(30);

echo $truck->fillin();
echo "<br>";
echo $truck->brake();
