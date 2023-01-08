<?php

//:POST
class Post{
  protected $username;
  protected $image;
  protected $message;
  protected $date;
  protected $comments;

  // Methods

  // Constructor - used to instantiate post objects
function __construct($username,$image,$message,$date/*,$comments*/){
    $this->username = $username;
    $this->image = $image;
    $this->message = $message;
    $this->date = $date;
    //$this->comments = $comments;
  }
 
 function getUsername(){
    return $this->username;
  }
  
  // returns the comments
  function getComments(){
    return $this->comments;
  }
  // Mutator or setter
  
  // Sets the user's image
  function addComment($username,$comment){
  	$newComment = new Comment($username,$comment);
    $this->comment[] = $newComment;
  }

}
//::POST

//:Comment
class Comment{
    protected $comments;

    //Constructor funtion
    function __construct($username,$comment){
    	$element = ['username'=>$username,'comment'=>$comment];
        $this->comments[] = $element;
    }
    
    function getComments(){
    return $this->comments;
  }

  function addComments($username,$comment){
    $element = ['username'=>$username,'comment'=>$comment];
    $this->comments[] = $element;
  }

}
//::Comment

//:PostSeeder
class PostSeeder{
    public static function seed(){
     
     $post1 = new Post('Tommy Shelby','https://www.esquireme.com/public/styles/full_img/public/images/2019/08/08/peaky-blinders-cillian-murphy-1562155630.jpg?itok=o2UpqD3I','So....you got the goods ?','01/09/1914');
     $post1->addComment("GenericUser1","Comment_1"); //["GenericUser1"=>"Comment_1"]
     
     
     $posts = array($post1);

     return $posts;
    }
}
//::PostSeeder

$comment1 = new Comment("user1","Comment_1");
$comment2 = new Comment("user2","Comment_2");
$comment3 = new Comment("user3","Comment_3");

$comments = [$comment1,$comment2,$comment3];

echo "The comments are";
echo "<br>";
//echo $comments;


foreach($comments->getComments() as $element) {
          
  echo $element['author'];
  		  echo "<br>";

      }
      
?>


