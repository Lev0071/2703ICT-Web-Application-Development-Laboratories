
@extends('layouts.master')

@section('heading')
    Total Booking Time
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                          
              

 @section('mainContent')                             
              

                                                  

 <div id="bookingHeading" style="margin-top:50px;">
                  <p> Total Booking Times (Days)</p>
                </div>  

                @foreach($noOfDays as $data)
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
                                    <p>Number of Days Booked</p>
                                </div>
                                <div class="vehicle_description">
                                    <p>{{$data->days_inclusive}}</p>
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