@extends('layouts.master')

@section('heading')
    Book a Car!
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')                
              

                                                  
            <!--::: Boooking Form -->

            <div class="content">
            <h2>Get Booking details</h2>

            <p>
          <caption>Vehicle Booking form</caption>
            <form method="post" action="{{url("show_booking")}}">
                {{csrf_field()}}
                
                    <label> Client </label>
                    <select name="name">
                      @foreach($clients as $person)
                        <option value="" selected disabled hidden>Choose Client</option>
                        <option value="{{$person->Name}},{{$person->LisenceNo}}"> {{$person->Name}} </option>
                        @endforeach
                    </select> <br><br>
                    <label> Vehicle </label> 
                    <select name="rego">
                    @foreach($vehicles as $car)
                      <option value="" selected disabled hidden>Choose Vehicle</option>
                      <option>  {{$car->Rego}} </option>
                    @endforeach
                    </select> <br><br>

                    <label> Pickup </label><br>
                    <input type="date" name="pickUp"><br><br>

                    <label> Return </label><br>
                    <input type="date" name="return"><br><br>
              
                    
                    
            
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset"  name="reset"  value="Reset">

</div>
@endsection  