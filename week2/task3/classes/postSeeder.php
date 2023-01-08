<?php

    namespace wad;
    include 'post.php';
     

class PostSeeder{
    public static function seed(){
     
     $post1 = new Post('Tommy Shelby','https://www.esquireme.com/public/styles/full_img/public/images/2019/08/08/peaky-blinders-cillian-murphy-1562155630.jpg?itok=o2UpqD3I','So....you got the goods ?','01/09/1914');
     $post1->addComment("GenericUser1","Comment_1"); //["GenericUser1"=>"Comment_1"]
     $post2 = new Post('Author Shelby','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6H4N6qoXm_G-nr1SoOq_vjZ32ZMzfXKaNZt4lbq5GHyMigISi6AHPsTTBTPLrgYt3N9A&usqp=CAU','Yeah mate, so we meeting at the same place ?','01/09/1914');
     $post2->addComment("GenericUser2","Comment_2");//["GenericUser2"=>"Comment_2","GenericUser3"=>"Comment_3"]
     $post2->addComment("GenericUser3","Comment_3");
     $post3 = new Post('Tommy Shelby','https://www.esquireme.com/public/styles/full_img/public/images/2019/08/08/peaky-blinders-cillian-murphy-1562155630.jpg?itok=o2UpqD3I',"Yeah, Come alone...We've got alot to discuss",'01/09/1914');
     $post3->addComment("GenericUser4","Comment_4");//["GenericUser4"=>"Comment_4"]
     
     $posts = array($post1, $post2, $post3);

     return $posts;
    }
}

// var_dump($post1);
//       echo "<br/>\n";
//       echo "<br/>\n";
//       var_dump($post2);
//       echo "<br/>\n";
//       echo "<br/>\n";
//       var_dump($post3);

//      //exit;

//       echo "<br/>\n";
//       echo "<br/>\n";
//       echo "<br/>\n";

//       foreach($posts as $post) {
//           echo $post->getUsername();
//           echo "<br/>\n";

//           foreach($post->getComments() as $userName=>$comment){
//                echo "Key=" . $userName . ", Value=" . $comment;
//                echo "<br>";
//                echo "<br/>\n";
//           }

//       }

//     }