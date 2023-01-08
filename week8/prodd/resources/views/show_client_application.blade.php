<?php

// if(array_key_exists('name',$_GET)){
//   $name = trim($_GET['name']);
// }else{
//   $name = '';
// }

// if(array_key_exists('age',$_GET)){
//   $age = trim($_GET['age']);
//   if ((strlen($age)) && (is_numeric($age))){
//     $age = intval($age);
//     if(($age > 17) && ($age < 99)){}else{
//       $age = '';
//     }
//   }else{
//     $age = '';
//   }
// }else{
//   $age = '';
// }

// if(array_key_exists('lisenceNo',$_GET)){
//   $lisenceNo = ($_GET['lisenceNo']);
//   if(is_numeric($lisenceNo)&&(strlen($lisenceNo) == 9)){}else{
//     $lisenceNo = '';
//   }
// }else{
//   $lisenceNo = '';
// }

// if(array_key_exists('lisenceType',$_GET)){
//   $lisenceType = trim($_GET['lisenceType']);
// }else{
//   $lisenceType = '';
// }

// if(array_key_exists('gender',$_GET)){
//   $gender = trim($_GET['gender']);
// }else{
//   $gender = '';
// }

// $name = $_GET['name'];
// $rego = $_GET['rego'];
// $pickUp = $_GET['pickUp'];
// $return = $_GET['return'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="css/styles.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            
        <div id="head"> New Customer Information </div>
            <div id="links" class="col-sm-3 col-md-3">
                
                <p>left pane</p>

             </div>
        
             
        
            <div id="main" class="col-sm-9 col-md-9">                          
              

                                                  


            <table class="bordered">
                    <!-- table header -->
                    <!-- Too much defensive programming ? -->
                    <tr><th>Name</th><th>Value</th></tr>
                    <tr><td>Name:</td><td>  {{$name}} </td></tr>
                    <tr><td>Age:</td><td>  {{$age}} </td></tr>
                    <tr><td>Gender:</td><td>  {{$gender}} </td></tr>
                    <tr><td>Lisence No.:</td><td>  {{$lisenceNo}} </td></tr>
                    <tr><td>Lisence Type:</td><td>  {{$lisenceType}} </td></tr>
            </table>

            <br>
            

                <p style="color:Red">Client Details could not be Added</p>
                <a href="{{ url('home') }}" class="btn btn-primary" role="button">HOME</a>
                <a href="{{ url('newClient') }}" class="btn btn-primary" role="button">Client Form Page</a>



  

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