<?php

namespace wad;

class Comment{
    protected $username;
    protected $comment;

    //Constructor funtion
    function __construct(String $username,String $comment){
        $this->username = $username;
        $this->comment = $comment;
    }

    function getUsername(){
        return $this->username;
    }

    function getComment(){
        return $this->comment;
    } 
}

?>