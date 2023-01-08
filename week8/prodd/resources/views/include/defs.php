<?php

include 'classes/clientSeeder.php';
include 'classes/vehicleSeeder.php';

$clients = ClientSeeder::seedClients();
$vehicles = VehicleSeeder::seedVehicles();