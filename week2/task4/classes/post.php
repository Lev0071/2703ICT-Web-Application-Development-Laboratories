<?php

namespace wad;
include 'comment.php';

// Post class - template containing properties of posts
class Post{
  protected $username;
  protected $image;
  protected $message;
  protected $date;
  protected $comments;

  // Methods

  // Constructor - used to instantiate post objects
function __construct(String $username,String $image,String $message,String $date/*$comments*/){
    $this->username = $username;
    $this->image = $image;
    $this->message = $message;
    $this->date = $date;
    $this->comments = [];
  }
  
  // Accessors/Getters
  
  // returns the username
  function getUsername(){
    return $this->username;
  }
  
  // returns the user's image
  function getUserImage(){
    return $this->image;
  }
  
  // returns the user's message
  function getMessage(){
    return $this->message;
  }
  
  // returns the post date
  function getDate(){
    return $this->date;
  }

  // returns the comments
  function getComments(){
    return $this->comments;
  }
  
  // Mutator or setter
  
  // Sets the user's image
  function addComment($user,$message){
    $element = new Comment($user,$message);
    //array_push($this->comment, $element);
    //$this->comment = array($element);
    $this->comment[] = $element;
  }

  // Sets the username for the user
  function setUsername($username){
     $this->username = $username;
  }
  
  // Sets the image for the user
  function setImage($image){
     $this->image = $image;  
  }
  
  // Sets the message property for the user
  function setMessage($message){
     $this->message = $message;
  }
  
  // Sets the date property for the post
  function setDate($date){
     $this->date = $date;
  }
}



?>
