<?php

  $bookings[] = array(
    'driver' => 'Joe Sanders',
    'liNo' => '456-097-568',
    'pickupDate' => 'dd/mm/yyyy',
    'returnDate' => 'dd/mm/yyyy'
  );

  $bookings[] = array(
    'driver' => 'Sally Driver',
    'liNo' => '757-868-347',
    'pickupDate' => 'dd/mm/yyyy',
    'returnDate' => 'dd/mm/yyyy'
  );

  $bookings[] = array(
    'driver' => 'john Doe',
    'liNo' => '356-578-979',
    'pickupDate' => 'dd/mm/yyyy',
    'returnDate' => 'dd/mm/yyyy'
  );

  $vehicles[0] = array(
    'rego'=> '438•SFD',
    'make'=> 'Toyota',
    'year' => '2020',
    'model'=> 'Kluger',
    'image'=> 'images/vehicles/klugger.jpg',
    'odometer'=> '56846',
    'capacity'=> '5',
    'transmission'=> 'Automatic',
    'type'=> 'Sedan',
    'bookings' => $bookings
  );
?>