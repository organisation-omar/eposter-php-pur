<?php
include("dbcon.php");
if(isset($_POST["namevent"])){


    $sql = "INSERT INTO `eventinfo` (`id`, `name`) VALUES (NULL, '$_POST[namevent]');";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: ../main.php');  ;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }


}
?>