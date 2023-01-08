@extends('layouts.master')

@section('heading')
    Home Page
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                          
               
              <div id="vehicles">
                <p><?php echo "array.length(): " , count($vehicles)?></p>
                
                @foreach ($vehicles as $car)
                <div class="vehicle">
                          <div class="vehicle_image">
                            <img src="images/vehicles/{{ $car->img }}">
                          </div>
                    <div class="vehicle_details">
                            <div class="vehicle_rego">
                              <p>{{ $car->Rego }}</p>
                            </div>
                        <div class="vehicle_description">
                          <p>{{ $car->Make }} {{ $car->Model }}</p>
                        </div>
                        <a href="{{ url("detail/$car->Vehicle_id") }}" class="btn btn-primary" role="button">View</a>
                    </div>
                </div>
                @endforeach


              </div>

              
@endsection  
