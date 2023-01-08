
@extends('layouts.master')

@section('heading')
    Update Client Details
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')
                                                                      
            <!--::: Boooking Form -->

            <div class="content">
            <h2>New Client</h2>

            <p>
          	<caption>Personal details form</caption>
    <form method="post" action="{{url("update_item_action")}}">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$client->Client_id}}">
            <label> Name </label>
            <input type="text" name="name" size=30 value="{{$client->Name}}"> <br><br>
            <label> Age </label>
            <input type="text" name="age" size=2 value="{{$client->Age}}"><br><br>
            <label> Lisence Number </label>
            <input type="text" name="lisenceNo" size=9 value="{{$client->LisenceNo}}"> <br><br>	
            <label> Lisence Type: </label><br>
			      <div class="choices">
                <input type="hidden" name="lisenceType" value="{{$client->LicenceType}}">
                <input type="radio" name="lisenceType" value="O">Open<br>
                <input type="radio" name="lisenceType" value="P1">Provisional 1<br>
                <input type="radio" name="lisenceType" value="P2">Provisional 2<br>
			      </div><br><br>
            <label> Gender: </label><br>
			      <div class="choices">
                <input type="hidden" name="gender" value="{{$client->Gender}}">
                <input type="radio" name="gender" value="M">Male<br>
                <input type="radio" name="gender" value="F">Femal<br>
                <input type="radio" name="gender" value="N">Prefer not to specify<br>
			      </div><br><br>
                <input type="submit" name="submit" value="Update Item">
                <input type="reset"  name="reset"  value="Reset">
      </form>

</div>

            <!-- Boooking Form :::-->

@endsection          