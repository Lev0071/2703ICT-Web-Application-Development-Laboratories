
@extends('layouts.master')

@section('heading')
    Frequently Booked Cars
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                         
              

                                                  

 <div id="bookingHeading" style="margin-top:50px;">
                  <p> Frequently Booked Vehicles</p>
                </div>  

                @foreach($frequency_data as $data)
                <div class="vehicle">
                                <div class="vehicle_image">
                                    <img src="images/vehicles/{{ $data->img }}">
                                </div>
                    <div class="vehicle_details">
                    <div class="vehicle_rego">
                                    <p>Vehicle</p>
                                </div>
                                <div class="vehicle_description">
                                    <p>Registration: {{$data->Rego}}</p>
                                    <p>{{$data->Make}} {{$data->Model}}</p>
                                </div>

                                <div class="vehicle_rego">
                                    <p>Number of Bookings</p>
                                </div>
                                <div class="vehicle_description">
                                    <p>Number Of Bookings: {{$data->No_of_Bookings}}</p>
                                </div>

                                    <div class="vehicle_rego">
                                        <p></p>
                                    </div>
                                    <div class="vehicle_description">
                                        <p</p>
                                        <p></p>
                                    </div>
                    </div>
                </div>
                @endforeach
              

  

@endsection 