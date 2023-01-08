<?php

namespace wad;

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





?>