{{dd($var)}}
@extends('layouts.master')

@section('heading')
    All Clients
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                          
              

 @section('mainContent')    

                <div id="bookingHeading" style="margin-top:50px;">
                  <p> Clients </p>
                </div>  

                @foreach($clients as $client)
                <div class="vehicle">

                    <div class="vehicle_details">
                    <div class="vehicle_rego">
                                    <p>Client Details</p>
                                </div>
                                <div class="client_description">
                                    <p>Name: {{$client->Name}}</p>
                                    <p>Age: {{$client->Age}}</p>
                                    <p>License Number: {{$client->LisenceNo}}</p>
                                    <p>License Type: {{$client->LicenceType}}</p>
                                    <p>Gender: {{$client->Gender}}</p>
                                </div>

                    
                                <a href="{{ url('home') }}" class="btn btn-primary" role="button">HOME</a>
                                <a href="{{ url("deleteClient/$client->Client_id") }}" class="btn btn-primary" role="button">Delete</a>
                                <a href="" class="btn btn-primary" role="button">Edit</a>
                    </div>
                </div>
                @endforeach


              

@endsection