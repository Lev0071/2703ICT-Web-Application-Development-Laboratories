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



?>