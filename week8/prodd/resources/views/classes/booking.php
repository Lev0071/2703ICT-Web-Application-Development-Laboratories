<?php

namespace wad;

class Booking{
    protected $rego;
    protected $lisenceNo;
    protected $id;
    protected $pickup;
    protected $return;

            //Constructor

        function __construct( $rego, $lisenceNo, $id, $pickup, $return){
            $this->rego =  $rego;
            $this->id = $id;
            $this->pickup = $pickup;
            $this->lisenceNo = $lisenceNo;
            $this->return = $return;
        }

        function getRego(){
            return $this->rego ; 
        }

        function getId(){
            return $this->id ;
        }

        function getPickup(){
            return $this->pickup ;
        }

        function getLisenceNo(){
            return $this->lisenceNo ;
        }

        function getReturn(){
            return $this->return ;
        }
}



?>