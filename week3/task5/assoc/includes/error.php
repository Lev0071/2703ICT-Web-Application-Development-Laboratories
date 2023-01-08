<?php

namespace wad;

// define("EMPTY", "At least one field must contain value");
// define("NOTINT", "Year must be a number");

class Error{
    protected $type;
    protected $message;

    //Constructor funtion
    function __construct(Bool $type,String $message){
        $this->type = $type;
        $this->message = $message;
    }

    function getErrorStatus(){
        return $this->type;
    }

    function getErrorMessage(){
        return $this->message;
    }
}

function checkForErrors($name,$year,$state){             // : function checkForErrors
    # Check $number is nonempty, numeric and between 2 and PHP_MAX_INT = 2^31-1.
    # (PHP makes it difficult to do this naturally; see the manual.)
    if ($name == '' && $year == '' && $state == '') {
        //echo "Error: ". MISSING ."\n";
        return $error = new Error(true,"Error: At least one field must contain value \n");
        var_dump($error);
        exit;
    } else if (!is_numeric($year)) {
        //echo "Error: " . NONNUMERIC . ": $number\n";
        return $error = new Error(true,"Error: Year must be a number \n");
        var_dump($error);
        exit;
    } else {
        return $error = new Error(false,"");
    }
}                                                   // :: function checkForErrors


?>