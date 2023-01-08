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
                <img src="{{$product->image}}" width="200" height=auto>
                </div>
                <div class="vehicle_details">
                  <div class="vehicle_rego">
                    <p>{{ $product->name }}</p>
                  </div>
                  <div class="vehicle_description">
                    <p>$ {{ $product->price }}</p>
                    <p>Manufacturer: {{ $product->manufacturer->name }}</p>
                  </div>

                </div>
                <div class="btn-group">
                  <a href="{{ url('product') }}" class="btn btn-primary" role="button">HOME</a>
                  <form method="GET" action="{{ url("product/$product->id/edit") }}">
                  <input type="submit" class="btn btn-primary" role="button" value="EDIT">
                  </form>
                  <form method="POST" action="{{ url("product/$product->id") }}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-primary" role="button" value="DELETE">
                  </form>
                </div>

              </div>
              
             





            </div>
@endsection


<?php

// <div id="bookingHeading">
// <p>Bookings</p>
// </div>


// @forelse($bookings as $booking)
// <div class="booking">
// <div class="booking_details">
//   <div class="vehicle_rego">
//     <p>Name: {{ $booking->Name }}</p>
//     <p>Lisence No.: {{ $booking->LisenceNo }}</p>
//   </div>
//   <div class="vehicle_description">
//     <p>Pick-up date: {{ $booking->Pickup }}</p>
//     <p>Return date: {{ $booking->Dropoff }}</p>
//   </div>
//   <a href="{{ url("returnVehicle/$booking->Booking_id") }}" class="btn btn-primary" role="button">Return Vehicle</a>
// </div>
// </div>
// @empty
// <div class="booking">
//     <p>No bookings for {{$vehicle->Rego}}</p>
// </div>
// @endforelse


?>