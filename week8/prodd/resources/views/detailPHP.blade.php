
<?php

  // $bookings[] = array(
  //   'driver' => 'Joe Sanders',
  //   'liNo' => '456-097-568',
  //   'pickupDate' => 'dd/mm/yyyy',
  //   'returnDate' => 'dd/mm/yyyy'
  // );

  // $bookings[] = array(
  //   'driver' => 'Sally Driver',
  //   'liNo' => '757-868-347',
  //   'pickupDate' => 'dd/mm/yyyy',
  //   'returnDate' => 'dd/mm/yyyy'
  // );

  // $bookings[] = array(
  //   'driver' => 'john Doe',
  //   'liNo' => '356-578-979',
  //   'pickupDate' => 'dd/mm/yyyy',
  //   'returnDate' => 'dd/mm/yyyy'
  // );

  // $vehicles[0] = array(
  //   'rego'=> '438•SFD',
  //   'make'=> 'Toyota',
  //   'year' => '2020',
  //   'model'=> 'Kluger',
  //   'image'=> 'images/vehicles/klugger.jpg',
  //   'odometer'=> '56846',
  //   'capacity'=> '5',
  //   'transmission'=> 'Automatic',
  //   'type'=> 'Sedan',
  //   'bookings' => $bookings
  // );
?>

@extends('layouts.master')

@section('heading')
    Detail Page
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                                                                    


              <div id="vehicles">


                <div class="vehicle">
                  <div class="vehicle_image">
                  <img src="../images/vehicles/{{$vehicle->img}}">
                  </div>
                  <div class="vehicle_details">
                    <div class="vehicle_rego">
                      <p>{{ $vehicle->Rego }}</p>
                    </div>
                    <div class="vehicle_description">
                      <p>{{ $vehicle->Make }} {{ $vehicle->Model }}</p>
                      <p>Year: {{ $vehicle->YearModel }}</p>
                      <p>Odometer: {{ $vehicle->Odometer }}</p>
                      <p>Capacity: {{ $vehicle->Capacity }}</p>
                      <p>Transmission: {{ $vehicle->Transmision }}</p>
                      <p>Type: {{ $vehicle->Type }}</p>
                    </div>

                  </div>
                  <a href="{{ url('home') }}" class="btn btn-primary" role="button">HOME</a>
                </div>
                
               

                <div id="bookingHeading">
                  <p>Bookings</p>
                </div>

 
                @forelse($bookings as $booking)
                <div class="booking">
                  <div class="booking_details">
                    <div class="vehicle_rego">
                      <p>Name: {{ $booking->Name }}</p>
                      <p>Lisence No.: {{ $booking->LisenceNo }}</p>
                    </div>
                    <div class="vehicle_description">
                      <p>Pick-up date: {{ $booking->Pickup }}</p>
                      <p>Return date: {{ $booking->Dropoff }}</p>
                    </div>
                    <a href="{{ url("returnVehicle/$booking->Booking_id") }}" class="btn btn-primary" role="button">Return Vehicle</a>
                  </div>
                </div>
                @empty
                <div class="booking">
                      <p>No bookings for {{$vehicle->Rego}}</p>
                </div>
                @endforelse



              </div>
@endsection