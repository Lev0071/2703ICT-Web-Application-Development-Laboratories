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