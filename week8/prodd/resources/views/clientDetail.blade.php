@extends('layouts.master')

@section('heading')
    Client Detail
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                                                                    


              <div id="vehicles">


                <div class="vehicle">
                  <div class="vehicle_details">
                    <div class="vehicle_rego">
                      <p>{{ $client->Name }}</p>
                    </div>
                    <div class="vehicle_description">
                      <p>Name: {{$client->Name}}</p>
                      <p>Age: {{$client->Age}}</p>
                      <p>Lisence Type: {{ $client->LicenceType }}</p>
                      <p>Gender: {{ $client->Gender }}</p>
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
                      <p>Vehicle: {{ $booking->Make }} {{ $booking->Model }}</p>
                      <p>Registration: {{ $booking->Rego }}</p>
                    </div>
                    <div class="vehicle_description">
                      <p>Pick-up date: {{ $booking->Pickup }}</p>
                      <p>Return date: {{ $booking->Dropoff }}</p>
                    </div>
                    <a href="{{ url('home') }}" class="btn btn-primary" role="button">Return Vehicle</a>
                  </div>
                </div>
                @empty
                <div class="booking">
                      <p>No bookings for {{$client->Name}}</p>
                </div>
                @endforelse



              </div>
@endsection