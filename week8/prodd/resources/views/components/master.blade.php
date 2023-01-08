<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title') Griffith Car Rentals @show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <!--:- Not My Code -:-->
    <div class="container">
        <!-- CONTAINER -->
        <div class="row">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('home') }}"><img class="logo" src="images/720887.jpg" alt="" width="50" height="50">Griffith Car Rentals</a>
              
                <form class="d-flex">
                    
                <a class="nav-link" href="{{ url('total') }}">Total Booking Times</a>

                <a class="nav-link" href="{{ url('frequent') }}">Frequently Booked</a>

                <a class="nav-link" href="{{ url('newClient') }}">Add Client</a>

                <a href="{{ url('book') }}" class="btn btn-outline-success" role="button">Book a Car!</a>  
                    
                </form>
                
            </div>
          </nav>
            
          <div id="head"> @yield('heading') </div>
        
            <div id="links" class="col-sm-3 col-md-3">
                
            <p>Left pane</p>
            <p>Debuging</p>
            @yield('paneContent')

</div>



<div id="main" class="col-sm-9 col-md-9">   

@yield('mainContent')

</div>                                                              
        
            
        
        <div class="col-12 col-sm-12 col-md-12">
            <footer>
              © Griffith Car Rentals 2021
            </footer>
        </div>
    </div>
    <!-- CONTAINER -->
</div>
<!--:: Not My Code ::-->

<!-- Bootstrap JS -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>