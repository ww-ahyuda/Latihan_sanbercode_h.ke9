<?php

require ('kendaraan.php');
require('motor.php');

$object = new   kendaraan("shaun");

echo "nama : $object->name<br>";
echo "lengs : $object->roda<br>";
echo "cold blooded : $object->no<br>";
"<br>";
$object2 = new  motor("buduk");


echo "nama  : $object2->name<br>";
echo "lengs : $object2->roda<br>";
echo "cold blooded : $object2->no<br>";

$object2->jalan();