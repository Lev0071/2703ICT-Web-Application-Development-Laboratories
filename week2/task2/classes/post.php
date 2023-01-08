<?php

namespace wad;

// Post class - template containing properties of posts
class Post{
  protected $username;
  protected $image;
  protected $message;
  protected $date;
  protected $comments;

  // Methods

  // Constructor - used to instantiate post objects
function __construct($username,$image,$message,$date,$comments){
    $this->username = $username;
    $this->image = $image;
    $this->message = $message;
    $this->date = $date;
    $this->comments = $comments;
  }
  
  // Accessors/Getters
  
  // returns the username
  function getUsername(){
    return $this->username;
  }
  
  // returns the user's image
  function getUserimage(){
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
  
  // Sets the username for the user
  function setUsername($username){
    return $this->username;
  }
  
  // Sets the image for the user
  function setImage($image){
    return $this->image;
  }
  
  // Sets the message property for the user
  function setMessage($message){
    return $this->message;
  }
  
  // Sets the date property for the post
  function setDate($date){
    return $this->date;
  }
}



?>
