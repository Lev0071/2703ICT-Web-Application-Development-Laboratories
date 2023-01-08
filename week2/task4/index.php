<?php
     use wad\PostSeeder;
     include 'classes/postSeeder.php';
     
     $data = PostSeeder::seed();

    //  var_dump($data);
    //  exit;

      foreach($data as $post) {

          echo "<br/>";
          echo "<br/>";
        var_dump($post);
          echo "<br/>";
          echo "<br/>";

          // $commentsUsername = $post->getComments()->getUsername();
          // var_dump($comments);
      }

     exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--:- Not My Code -:-->
    <div class="container">
        <!-- CONTAINER -->
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid" style="background-color: #efff3c">
                  <a class="navbar-brand" href="#"><img class="logo" src="images/BracesEmoji.jpeg" alt="" width="50" height="50">Bracebook</a>
                  
                    <form class="d-flex">
                        
                            <a class="nav-link" href="">Photo</a>
                        
    
                        
                            <a class="nav-link" href="">Friends</a>
                        
    
                        
                            <button class="btn btn-outline-success" type=submit>Login</button>
                        
                    </form>
                    
                </div>
              </nav>
            
            
        
            <div id="links" class="col-sm-3 col-md-3">
                
                <div class="form-group">          <!--  class="form-group" -->
                  <label for="exampleFormControlTextarea1">Name:</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="postBody"></textarea>
                </div>  
                
                <div class="form-group">          <!--  class="form-group" -->
                  <label for="exampleFormControlTextarea1">Message:</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="postBody"></textarea>
                </div>                            <!--::: class="form-group" -->
                <button type="submit" class="btn btn-primary">Post</button>
              </form>
             </div>
        
             
        
            <div id="main" class="col-sm-9 col-md-9">                           <!-- : div id="main" -->
              

              <h5 id="top">Firstname LastName</h5>
              
              <div class="container">                                 <!-- : div class="container" -->
               <!-- MESSAGE  -->
               <?php  foreach ($posts as $post) {  ?>
                <div class="row messageBlock">               <!-- : div class="row" -->
                  <div class="col-2">                       <!-- : Message Header -->
                    <div id="messageHeader">
                      <img src="<?= $post['image'] ?>">
                      <p>Username:</p>
                      <p><?= $post['username'] ?></p>
                      <p>Date:</p>
                      <p><?= $post['date'] ?></p>
                    </div>
                  </div><!-- :: Message Header -->
                  <div class="col-10"><!-- : Message -->
                    <div id="message">
                      <label rows="3"><?= $post['message'] ?></label>
                  </div>
                  </div>                                  <!-- :: Message -->
                </div><!-- :: div class="row" -->
                <?php } // End of for loop ?>
                <!-- MESSAGE  -->
              </div>                                                  <!-- : div class="container" -->


              <div class="container">                                 <!-- : div class="container" -->
                
                                            <!-- :: div class="row" -->
              </div>    

              

              <div class="container">                                 <!-- : div class="container" -->
                
                <div class="row messageBlock">                                 <!-- : div class="row" -->
                 
                                                   <!-- :: Message -->
                    <!-- COMMENT  -->
                  <div class="row commentBlock">            <!-- : div class="row" -->
                    <div class="col-2">                       <!-- : Message Header -->
                      <div id="commentHeader">
                        <img src="https://i.pinimg.com/600x315/c0/8c/1a/c08c1a97a0dc9504a176b2eb46eab2b6.jpg" alt="your_friend" height="auto" width="50">
                        <p>Date:</p>
                      </div>
                    </div><!-- :: Message Header -->
                    <div class="col-10"><!-- : Message -->
                      <div id="message">
                        <label rows="3">Comment</label>
                    </div>
                    </div>                                  <!-- :: Comment -->
                    <!-- COMMENT  -->
                </div>                                               <!-- :: div class="row" -->
              </div>  <!-- :: div class="container" -->  

            </div>                                                              <!-- ::div id="main" -->
        
            
        
            <div class="col-12 col-sm-12 col-md-12">
                <footer>
                  © Bracebook 2021
                </footer>
            </div>
        </div>
        <!-- CONTAINER -->
    </div>
    <!--:: Not My Code ::-->
    
    <!-- Bootstrap JS -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

