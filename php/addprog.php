<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
<link rel="stylesheet" href="../style/bootstrap.css">


<style>
   form{
    
    background-color: cadetblue;
    padding: 43px;
    margin-top: 23px;
   }
</style>
</head>
<body>

<form action="" method="post" class="container" enctype="multipart/form-data">
<div class="form-group">
  <h2 for="">upload progrmme</>
  <input type="file" class="form-control-file" name="allfiles[]" multiple  id="" placeholder="select one or more fils of programme" aria-describedby="fileHelpId">
</div>

<button name="submitbtnromeve" type="submit" class="btn btn-danger">suprimer le progrmamme plus âgée </button>
<button name="submitbtn" type="submit" class="btn btn-info">ajouter nouvelle</button>




<?php
if(isset($_POST["submitbtn"])){


   // Count total files
   $countfiles = count($_FILES['allfiles']['name']);
 
   // Looping all files
   for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['allfiles']['name'][$i];
   
        // Upload file
        move_uploaded_file($_FILES['allfiles']['tmp_name'][$i],'../pics/picsprog/'.$i.$filename);
        echo "<h4>".$filename."est bien ajouter</h4> </br>";
   }

}

if(isset($_POST["submitbtnromeve"])){

    $files = glob('../pics/picsprog/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file)) {
    unlink($file); // delete file
  }
}
}



?>

</form>
</body>
</html>