

@extends('layouts.master')

@section('heading')
    Record to be deleted
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
                  <a href="" class="btn btn-primary" role="button">Delete</a>
                  <a href="" class="btn btn-primary" role="button">Edit</a>
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

                  </div>
                </div>
                @empty
                <div class="booking">
                      <p>No bookings for {{$vehicle->Rego}}</p>
                </div>
                @endforelse



              </div>
@endsection