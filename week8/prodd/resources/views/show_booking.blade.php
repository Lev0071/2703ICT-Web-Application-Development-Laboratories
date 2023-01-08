

@extends('layouts.master')

@section('heading')
    Booking Detail
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                         
              

            <br>                             


            <table class="bordered">
                    <!-- table header -->
                    <!-- Too much defensive programming ? -->
                    <tr><th>Name</th><th>Value</th></tr>
                    <tr><td>Name:</td><td>  {{$name}} </td></tr>
                    <tr><td>Rego:</td><td>  {{$rego}} </td></tr>
                    <tr><td>Pick Up:</td><td>  {{$pickUp}} </td></tr>
                    <tr><td>Return:</td><td>  {{$return}} </td></tr>
            </table>

            
                <p style="color:red">Invalid Data input</p>
                <p style="color:red">Could not add to Database</p>
                <a href="{{ url('home') }}" class="btn btn-primary" role="button">HOME</a>
                <a href="{{ url('book') }}" class="btn btn-primary" role="button">Back to Booking Page</a>
               
@endsection