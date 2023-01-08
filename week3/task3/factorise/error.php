<?php

namespace wad;

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

function checkForErrors($number){             // : function checkForErrors
    # Check $number is nonempty, numeric and between 2 and PHP_MAX_INT = 2^31-1.
    # (PHP makes it difficult to do this naturally; see the manual.)
    if (empty($number)) {
        //echo "Error: ". MISSING ."\n";
        return $error = new Error(true,"Error: ". MISSING ."\n");
        var_dump($error);
        exit;
    } else if (!is_numeric($number)) {
        //echo "Error: " . NONNUMERIC . ": $number\n";
        return $error = new Error(true,"Error: " . NONNUMERIC . ": $number\n");
        var_dump($error);
        exit;
    } else if ($number < 2 || $number != strval(intval($number))) {
        //echo "Error: " . INVALID . ": $number\n";
        return $error = new Error(true,"Error: " . INVALID . ": $number\n");
        var_dump($error);
        exit;
    } else {
        return $error = new Error(false,"");
    }
}                                                   // :: function checkForErrors


?>