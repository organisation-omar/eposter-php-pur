<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/bootstrap.min.css" rel="stylesheet" >
    <title>suprimer tout </title>
</head>
<body>
    
<div style="background-color: #543d3d; height: 100vh; padding: 34%;">
    
<form  class="container" action='' method='POST'>
    <button style="margin: 10px;"  name="sub" type='submit' class='btn btn-info'>suprimer tout les theme</button>
  </form> 

  
<form class="container" action='' method='POST'>
    <button style="margin: 10px;" name="subepo" type='submit' class='btn btn-danger'>suprimer tout les eposter</button>
  </form>

  <div class="container">
    <a class='btn btn-info' style="margin: 10px;text-decoration: none;" href="administration.php"><< return <<</a>
  </div>
 
</div>


<?php

include("dbcon.php");
if(isset($_POST["sub"])){
    echo "dele";
    $sql = "DELETE FROM `themes`";
    if ($conn->query($sql) === TRUE) {

      header('Location: ' . $_SERVER['HTTP_REFERER']);

      $files = glob('../pdfs/*'); // get all file names
      foreach($files as $file){ // iterate files
        if(is_file($file)) {
          unlink($file); // delete file
        }
      }


    } else {
      echo "Error deleting record: " . $conn->error;
    }
}




if(isset($_POST["subepo"])){
   
    $sql = "DELETE FROM `eposter`";
    if ($conn->query($sql) === TRUE) {

       
      header('Location: ' . $_SERVER['HTTP_REFERER']);
     
    } else {
      echo "Error deleting record: " . $conn->error;
    }
}


?>



</body>
</html>