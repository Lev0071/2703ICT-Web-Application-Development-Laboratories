
@extends('layouts.master')

@section('heading')
    Return Vehicle
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                          
              

 @section('mainContent')    

                <div id="bookingHeading" style="margin-top:50px;">
                  <p> Return Vehicle: {{$returnInfo[0]->Rego}}</p>
                </div>  

                @foreach($returnInfo as $returning)
                <div class="vehicle">
                                <div class="vehicle_image">
                                    <img src="../images/vehicles/{{ $returning->img }}">
                                </div>
                                
                    <div class="vehicle_details">
                    <div class="vehicle_rego">
                                    <p>Vehicle</p>
                                </div>
                                <div class="vehicle_description">
                                    <p>Registration: {{$returning->Rego}}</p>
                                    <p>{{$returning->Make}} {{$returning->Model}}</p>
                                </div>

                                <div class="vehicle_rego">
                                    <p>Client</p>
                                </div>
                                <div class="vehicle_description">
                                    <p>Name: {{$returning->Name}}</p>
                                    <p>Lisence Number: {{$returning->LisenceNo}}</p>
                                </div>

                                    <div class="vehicle_rego">
                                        <p>Booking Detail</p>
                                    </div>
                                    <div class="vehicle_description">
                                        <p>Pick up: {{$returning->Pickup}}</p>
                                        <p>Return: {{$returning->Dropoff}}</p>
                                    </div>
                        <form method="post" action="{{url("remove_booking")}}" style="border-style: solid;">
                        {{csrf_field()}}
                    
                        <label> Enter Distance Travelled </label>
                        <input type="text" name="increment" size=20> <br><br>
                            <input type="hidden" name="rego" value="{{$returning->Rego}}">
                            <input type="hidden" name="booking_id" value="{{$returning->Booking_id}}">
                            <input type="submit" name="submit" value="Add Distance Travelled">
                            <input type="reset"  name="reset"  value="Reset">
                        </form>
                    </div>
                    
                </div>
                @endforeach


              

@endsection