<?php


namespace wad;

class Client{
    protected $name;
    protected $age;
    protected $gender;
    protected $lisenceNo;
    protected $lisenceType;


            //Constructor

        function __construct( $name, $age, $gender, $lisenceNo, $lisenceType){
            $this->name =  $name;
            $this->age = $age;
            $this->gender = $gender;
            $this->lisenceNo = $lisenceNo;
            $this->lisenceType = $lisenceType;
        }

        function getName(){
            return $this->name ; 
        }

        function getAge(){
            return $this->age ;
        }

        function getGender(){
            return $this->gender ;
        }

        function getLisenceNo(){
            return $this->lisenceNo ;
        }

        function getLisenceType(){
            return $this->lisenceType ;
        }
}


class Vehicle{
  protected $rego;
  protected $make;
  protected $model;
  protected $year;
  protected $odometer;
  protected $capacity;
  protected $transmission;
  protected $vType;
  protected $image;

          //Constructor

      function __construct( $rego, $make, $model, $year, $odometer, $capacity, $transmission, $vType,$image){
          $this->rego =  $rego;
          $this->make = $make;
          $this->model = $model;
          $this->year = $year;
          $this->odometer = $odometer;
          $this->capacity = $capacity;
          $this->transmission = $transmission;
          $this->vType = $vType;
          $this->image = $image;
      }

      function getRego(){
          return $this->rego ; 
      }

      function getMake(){
          return $this->make ;
      }

      function getModel(){
          return $this->model ;
      }

      function getYear(){
          return $this->year ;
      }

      function getOdometer(){
          return $this->odometer ;
      }

      function getCapacity(){
          return $this->capacity ;
      }

      function getTransmission(){
          return $this->transmission ;
      }

      function getImage(){
          return $this->image ;
      }

}

class ClientSeeder{
  public static function seedClients(){

      //$vehiclesClass = array();
      $clientsClass = [];

      $clientsClass[] = new Client( 'Robbie Stanton', '20', 'F', '463114561', 'provisional_2');
      $clientsClass[] = new Client( 'Hubert Haskins', '37', 'M', '456381499', 'open');
      $clientsClass[] = new Client( 'Trina Wilkinson', '36', 'F', '189842264', 'open');

      return $clientsClass;
  }
}

class VehicleSeeder{
  public static function seedVehicles(){

      //$vehiclesClass = array();
      $vehiclesClass = [];

      $vehiclesClass[] = new Vehicle( '438•SFD', 'Toyota', 'Kluger', '2020', 45678, 4, 'Automatic', '4WD','images/vehicles/klugger.jpg');
      $vehiclesClass[] = new Vehicle( '123•ABC', 'Holden', 'Commodore', '2020', 86345, 4, 'Automatic', 'Sedan','images/vehicles/commodore.jpg');
      $vehiclesClass[] = new Vehicle( '321•XYZ', 'Mitsubishi', 'Eclipse', '2020', 7525, 4, 'Automatic', '4WD','images/vehicles/eclipse.png');

      return $vehiclesClass;
  }
}

$clients = ClientSeeder::seedClients();
$vehicles = VehicleSeeder::seedVehicles();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            
          <div id="head"> Home Page </div>
        
            <div id="links" class="col-sm-3 col-md-3">
                
                <p>left pane</p>

             </div>
        
             
        
            <div id="main" class="col-sm-9 col-md-9">                          
              

                                                  


              <div id="vehicles">
                <p><?php echo "array.length(): " , count($vehicles)?></p>
                
                <?php foreach ($vehicles as $car){ ?>
                <div class="vehicle">
                          <div class="vehicle_image">
                            <img src="<?= $car->getImage() ?>">
                          </div>
                    <div class="vehicle_details">
                            <div class="vehicle_rego">
                              <p><?= $car->getRego() ?></p>
                            </div>
                        <div class="vehicle_description">
                          <p><?= $car->getMake() . " " .$car->getModel() ?></p>
                        </div>
                        <a href="detailCLASS.php" class="btn btn-primary" role="button">View</a>
                    </div>
                </div>
                <?php } //End loop ?>


              </div>

              

  

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

