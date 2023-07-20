C:\xampp\htdocs\eposerapilip\eposter\pdfs<?php

include("dbcon.php");
// ajouter eposter
if(isset($_POST["btnajoutepo"])){
 //$filesinp =$_POST["filesinp"];
 
$i=0;
$theme="";
$title="";


if($_POST["title0"]){

$urlepo="";
$namepo="";

 foreach($_FILES["filesinp"]["name"] as $key=>$val){
        move_uploaded_file($_FILES["filesinp"]["tmp_name"][$key],"../pdfs/".$val);
     

        $urlepo=$val;
        $namepo=$_POST["title$i"];
         if(str_contains($val,"'")){
                $urlepo= str_replace("'","d\'",$val);
         }

         if(str_contains($_POST["title$i"],"'")){
                $namepo= str_replace("'","d\'",$_POST["title$i"]);
         }

     
        
        
              //  $sql = "INSERT INTO `eposter` ( `url`, `nameposter`,  `idtheme`) VALUES ('". $val ."','".$_POST["title$i"]."','".  $_POST["theme$i"]  ."');";
                $sql = "INSERT INTO `eposter` ( `url`, `nameposter`,  `idtheme`) VALUES ('".  $urlepo ."','".$namepo."','".  $_POST["theme$i"]  ."');";

              
              
              echo "le e-poster sont bien ajouter".  $i."</br>";
                if ($conn->query($sql) === TRUE) {
                 
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $i=$i+1;
 }

}
}

echo "<a class='btn btn-info' style='text-align:center;font-size:50px;margin: 60px;text-decoration: none;' href='../php/administration.php'> return </a>";


?>
	