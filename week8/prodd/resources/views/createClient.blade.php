
@extends('layouts.master')

@section('heading')
    Register New Client
@endsection

@section('paneContent')
@endsection
        
 @section('mainContent')
                                                                      
            <!--::: Boooking Form -->

            <div class="content">
            <h2>New Client</h2>

            <p>
          	<caption>Personal details form</caption>
    <form method="post" action="show_client_application">
            {{csrf_field()}}
        
            <label> Name </label>
            <input type="text" name="name" size=30> <br><br>
            <label> Age </label>
            <input type="text" name="age" size=2><br><br>
            <label> Lisence Number </label>
            <input type="text" name="lisenceNo" size=9> <br><br>	
            <label> Lisence Type: </label><br>
			      <div class="choices">
                <input type="radio" name="lisenceType" value="O">Open<br>
                <input type="radio" name="lisenceType" value="P1">Provisional 1<br>
                <input type="radio" name="lisenceType" value="P2">Provisional 2<br>
			      </div><br><br>
            <label> Gender: </label><br>
			      <div class="choices">
                <input type="radio" name="gender" value="M">Male<br>
                <input type="radio" name="gender" value="F">Femal<br>
                <input type="radio" name="gender" value="N">Prefer not to specify<br>
			      </div><br><br>
                <input type="submit" name="submit" value="Add">
                <input type="reset"  name="reset"  value="Reset">
      </form>

</div>

            <!-- Boooking Form :::-->

@endsection          