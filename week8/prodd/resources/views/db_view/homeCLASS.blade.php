<?php
// class Client{
//     protected $name;
//     protected $age;
//     protected $gender;
//     protected $lisenceNo;
//     protected $lisenceType;


//             //Constructor

//         function __construct( $name, $age, $gender, $lisenceNo, $lisenceType){
//             $this->name =  $name;
//             $this->age = $age;
//             $this->gender = $gender;
//             $this->lisenceNo = $lisenceNo;
//             $this->lisenceType = $lisenceType;
//         }

//         function getName(){
//             return $this->name ; 
//         }

//         function getAge(){
//             return $this->age ;
//         }

//         function getGender(){
//             return $this->gender ;
//         }

//         function getLisenceNo(){
//             return $this->lisenceNo ;
//         }

//         function getLisenceType(){
//             return $this->lisenceType ;
//         }
// }


// class Vehicle{
//   protected $rego;
//   protected $make;
//   protected $model;
//   protected $year;
//   protected $odometer;
//   protected $capacity;
//   protected $transmission;
//   protected $vType;
//   protected $image;

//           //Constructor

//       function __construct( $rego, $make, $model, $year, $odometer, $capacity, $transmission, $vType,$image){
//           $this->rego =  $rego;
//           $this->make = $make;
//           $this->model = $model;
//           $this->year = $year;
//           $this->odometer = $odometer;
//           $this->capacity = $capacity;
//           $this->transmission = $transmission;
//           $this->vType = $vType;
//           $this->image = $image;
//       }

//       function getRego(){
//           return $this->rego ; 
//       }

//       function getMake(){
//           return $this->make ;
//       }

//       function getModel(){
//           return $this->model ;
//       }

//       function getYear(){
//           return $this->year ;
//       }

//       function getOdometer(){
//           return $this->odometer ;
//       }

//       function getCapacity(){
//           return $this->capacity ;
//       }

//       function getTransmission(){
//           return $this->transmission ;
//       }

//       function getImage(){
//           return $this->image ;
//       }

// }

// class ClientSeeder{
//   public static function seedClients(){

//       //$vehiclesClass = array();
//       $clientsClass = [];

//       $clientsClass[] = new Client( 'Robbie Stanton', '20', 'F', '463114561', 'provisional_2');
//       $clientsClass[] = new Client( 'Hubert Haskins', '37', 'M', '456381499', 'open');
//       $clientsClass[] = new Client( 'Trina Wilkinson', '36', 'F', '189842264', 'open');

//       return $clientsClass;
//   }
// }

// class VehicleSeeder{
//   public static function seedVehicles(){

//       //$vehiclesClass = array();
//       $vehiclesClass = [];

//       $vehiclesClass[] = new Vehicle("438•SFD","Toyota","Kluger",2020,899133,7,"Automatic","[Urban Wagon]",'klugger.jpg');
//       $vehiclesClass[] = new Vehicle("202•XRP","Toyota","Commuter",2020,302161,12,"Automatic","[Small Bus]",'commuter.jpg');
//       $vehiclesClass[] = new Vehicle("361•CPA","Mitsubishi","Pajero",2020,262816,7,"Automatic","[Premium 4WD]",'pajeroFull4WD.png');
//       $vehiclesClass[] = new Vehicle("546•YQM","Kia","Carnival",2020,954307,8,"Automatic","[Intermediate Van]",'carnival.jpg');
//       $vehiclesClass[] = new Vehicle("910•ALD","Mitsubishi","Pajero",2020,982213,7,"Automatic","[Full Size Wagon,Sport]",'pajero_sport.jpg');
//       $vehiclesClass[] = new Vehicle("717•WWS","Mitsubishi","Outlander",2020,783020,5,"Automatic","[Intermediate Wagon]",'outlander.png');
//       $vehiclesClass[] = new Vehicle("108•PCK","Mitsubishi","Eclipse Cross",2020,660787,5,"Automatic","[Medium]",'eclipse.png');
//       $vehiclesClass[] = new Vehicle("557•GLM","Holden","Commodore SV6",2020,401105,5,"Automatic","[Sports, Sedan]",'commodore.jpg');
//       $vehiclesClass[] = new Vehicle("102•QZX","Mitsubishi","ASX",2020,518747,5,"Automatic","[Compact SUV]",'asx.png');
//       $vehiclesClass[] = new Vehicle("229•YAG","Toyota","Camry",2020,76356,5,"Automatic","[Sedan]",'camry.jpg');
//       $vehiclesClass[] = new Vehicle("749•TMI","Toyota","Corolla",2020,596046,5,"Automatic","[Sedan]",'corolla_sedan.png');
//       $vehiclesClass[] = new Vehicle("838•SAK","KIA","Cerato",2020,67491,5,"Automatic","[Intermediate]",'cerrato.jpg');
//       $vehiclesClass[] = new Vehicle("845•STB","Toyota","Corolla",2020,953867,5,"Automatic","[Compact Car,Sedan]",'corolla_sedan.png');
//       $vehiclesClass[] = new Vehicle("232•PHZ","Toyota","Yaris",2020,596542,5,"Automatic","[Economy]",'yaris.jpg');
//       $vehiclesClass[] = new Vehicle("931•LWK","MG","HS",2020,216511,5,"Automatic","[Compact SUV]",'mg.png');
//       $vehiclesClass[] = new Vehicle("899•IPV","Mitsubishi","Mirage",2020,948839,5,"Automatic","[Metro]",'mirage.png');
//       $vehiclesClass[] = new Vehicle("732•FTU","Mitsubishi","Pajero",2020,447986,5,"Automatic","[Full Size 4WD]",'pajeroFull4WD.png');
//       $vehiclesClass[] = new Vehicle("091•JRX","Suzuki","Jimny",2020,804612,4,"Automatic","[Medium]",'jiminy.jpg');
//       $vehiclesClass[] = new Vehicle("090•UPA","Toyota","Yaris",2020,328506,5,"Manual","[Economy]",'yaris2.jpg');
//       $vehiclesClass[] = new Vehicle("291•UID","Toyota","Hilux",2020,218447,5,"Automatic","[4WD, Dual Cab, Utility]",'hilux.png');

//       return $vehiclesClass;
//   }
// }

// $clients = ClientSeeder::seedClients();
// $vehicles = VehicleSeeder::seedVehicles();
?>
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
                        <a href="{{ url('detail') }}" class="btn btn-primary" role="button">View</a>
                    </div>
                </div>
                @endforeach


              </div>

              
@endsection  
