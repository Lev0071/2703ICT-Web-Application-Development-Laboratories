
@extends('layouts.master')

@section('heading')
    All Bookings
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                          
              

 @section('mainContent')    

                <div id="bookingHeading" style="margin-top:50px;">
                  <p> All Bookings</p>
                </div>  

                @foreach($bookings as $booking)
                <div class="vehicle">
                                <div class="vehicle_image">
                                    <img src="images/vehicles/{{ $booking->img }}">
                                </div>
                                <a href="{{ url("returnVehicle/$booking->Booking_id") }}" class="btn btn-primary" role="button">Return</a>
                    <div class="vehicle_details">
                    <div class="vehicle_rego">
                                    <p>Vehicle</p>
                                </div>
                                <div class="vehicle_description">
                                    <p>Registration: {{$booking->Rego}}</p>
                                    <p>{{$booking->Make}} {{$booking->Model}}</p>
                                </div>

                                <div class="vehicle_rego">
                                    <p>Client</p>
                                </div>
                                <div class="vehicle_description">
                                    <p>Name: {{$booking->Name}}</p>
                                    <p>Lisence Number: {{$booking->LisenceNo}}</p>
                                </div>

                                    <div class="vehicle_rego">
                                        <p>Booking Detail</p>
                                    </div>
                                    <div class="vehicle_description">
                                        <p>Pick up: {{$booking->Pickup}}</p>
                                        <p>Return: {{$booking->Dropoff}}</p>
                                    </div>
                    </div>
                </div>
                @endforeach


              

@endsection