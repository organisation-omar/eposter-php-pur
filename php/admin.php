<?php include 'dbcon.php'?>
<!DOCTYPE html>         
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/bootstrap.min.css" rel="stylesheet" >
    <title>dashboard</title>
    <link rel="stylesheet" href="../style/fonta/css/all.css">
    <link rel="stylesheet" href="../style/fonta/css/fontawesome.min.css">
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
   

  <script src="../js/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    table{text-align: center;}

    .countp{
        display: flex;
    justify-content: center;
    justify-content: space-around;
    padding: 20px;
    color: white;
    text-align: center;


    background-color: white;
    border-radius: 30px;
    box-shadow: 0 0 20px bla
    }
    p{margin: 0; padding: 0;
   
    }

    .cp{
        width: 25%;
    padding: 20px;
    
    background-color:  #3f51b5;
    border-radius: 10px;
    transition: 0.3s;
    cursor: pointer;
    font-size: 1.7rem;
    }
    .countp p:first-child:hover{background-color: #f19292;}
    .countp p:last-child{background-color:#3f51b5;}
    .countp p:last-child:hover{background-color: #2b3778;}

    .titlep{
        margin-left: 20px;
    margin-top: 20px;
    font-size: 2rem;
   text-align: center;
    }


    .theder{
        background-color: black;
        color: white;
    }
    a{text-decoration: none; color: white;}

    table{margin-top: 20px;}
    .dropzoon{width: 100%; height: 300px; border: dotted 1px black; padding: 22%;
    font-size: 2rem;}

    .colordrop{background-color: #2b3778;}


    .inputtxt {
    /* width: 50%; */
    background-color: #6212ad;
    color: white;
    width: 90%;
    margin: auto;
}

.selectopt {
    width: 50%;
    background-color: beige;
    margin: auto;
}
.btn22{
background-color: #b53810;
}
body{font-style: italic;padding: 20px; background-color: #a1b9c5;}

a:hover{text-decoration: none;}
tr:hover{
  background-color: #6212ad;
  cursor: pointer;
}

.epoimg:hover{
  filter: brightness(0.5);
}
td{font-size: 1.6rem;}

</style>
<body>


<?php 

//themes
  $sql = "SELECT * FROM themes";
  $result = $conn->query($sql);

  $sql2 = "SELECT * FROM eposter";
  $result2 = $conn->query($sql2);
  echo "<div class='countp'>  
  
  <img style='width:15%;' src='../pics/logo.png'/>
  
  <button type='button' class=' cp btn btn-primary' onclick='togle1()' data-bs-toggle='modal' data-bs-target='#myModal'>
  ajouter theme <br/> N:total
  ".$result->num_rows .' <br/> <i class="fa-solid fa-pen-to-square"></i></button>';
  echo "  <button type='button' class='btn22  cp btn btn-primary' data-bs-toggle='modal' onclick='togle2()' data-bs-target='#myModal2'>
  ajouter eposter <br/> N:total
  ".$result2->num_rows .'<br/> <i class="fa-solid fa-pen-to-square"></i></button>'
  
 
  ."</div>";
echo " <a href='../index.php'><img class='epoimg' style='width: 15%;' src='../pics/epo.png'/></a>";
 
  if ($result->num_rows > 0) {
    echo  "<table class='table table-hover'>";
     echo" <tr class='theder'><th>numero</th> <th>nom</th>  <th>action</th> </tr>";
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["id"]."</td> <td>".$row["name"]."</td>
          
          <td>  <button class='btn btn-danger'><a href='supr.php?table=theme&s=".$row['id']."'><i class='fa-solid fa-trash'></i>  supremer</a>   </button>
          <button class='btn btn-info'> <a href='modif.php?mt=".$row['id']."'><i class='fa-solid fa-pen-to-square'> </i>   modifier</a>  </button></td>    </tr>" ;
        
      }
      
   
    } 

    //themes

  echo"<form action='seprimertout.php' method='get'>
    <button type='submit' style='margin:0px 10px;' class='btn btn-primary'>suprimer tout</button>
  </form> " ;
  echo"<form action='addprog.php' method='get'>
  <button type='submit' class='btn btn-info'>ajouter programme</button>
</form> " ;
echo"</br><form action='eventinfo.php' method='post'>
<input  class='form-control col-sm-2' placeholder='le nom de l evenement' type='text' name='namevent'/>
<button type='submit' class='btn btn-info'>change le nom de l'evenment</button>
</form> " ;


echo"</br></br><form action='' method='post' enctype='multipart/form-data'>
<input  class='form-control col-sm-2' placeholder='le nom de l evenement' type='file' required name='bgevent'/>
<button name='bgeventbtn' type='submit' class='btn btn-info'>change background evenement</button>
</form> " ;


echo"</br></br><form action='' method='post' enctype='multipart/form-data'>
<input  class='form-control col-sm-2' placeholder='le nom de l evenement' type='file' required name='logoevent'/>
<button name='logobtn' type='submit' class='btn btn-info'>change logo evenement</button>
</form> " ;


if(isset($_POST["bgeventbtn"])){
  $files = glob('../pics/bgs/*'); // get all file names
  foreach($files as $file){ // iterate files
    if(is_file($file)) {
      unlink($file); // delete file
    }
  }
  $mmove=move_uploaded_file($_FILES['bgevent']['tmp_name'],"../pics/bgs/".$_FILES['bgevent']['name']);
if($mmove){
 

}
} 


if(isset($_POST["logobtn"])){
  $files = glob('../pics/logs/*'); // get all file names
  foreach($files as $file){ // iterate files
    if(is_file($file)) {
      unlink($file); // delete file
    }
  }
  $mmove=move_uploaded_file($_FILES['logoevent']['tmp_name'],"../pics/logs/".$_FILES['logoevent']['name']);
if($mmove){
 

}
} 
//eposter

echo  "<p class='titlep'>themes</p>";
  $sql2 = "SELECT * FROM eposter";
  $result2 = $conn->query($sql2);



  if ($result2->num_rows > 0) {
   
    echo  "<table class='table table-hover'>";
     echo" <tr class='theder'><th>numero</th> <th>nom</th>  <th>action</th> </tr>";
      while($row = $result2->fetch_assoc()) {
          echo "<tr><td>".$row["id"]."</td> <td>".$row["nameposter"]."</td>
          
          <td>  <button class='btn btn-danger'><a href='supr.php?table=poster&s=".$row['id']."'><i class='fa-solid fa-trash'></i>  supremer</a>   </button>
          <button class='btn btn-info'> <a href='modif.php?mp=".$row['id']."'><i class='fa-solid fa-pen-to-square'> </i>  modifier</a>  </button></td>    </tr>" ;
      
         
      } echo  "<p class='titlep'>eposter</p>";
    } 	
    	

    //eposter
?>







<!-- Button trigger modal -->

<!-- Modal -->

<!-- The Modal -->
<div class="modal" id="myModal" style="overflow: scroll;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ajout theme</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <form action="ajoutertheme.php" method="post">
      <div class="modal-body">
       <div class="form-group">
         <label for=""></label>
         <input type="text"
           class="form-control" name="ntheme" id="" aria-describedby="helpId" placeholder="">
        <br>
       </div>
       <input name="btnath" id="" class="btn btn-primary" type="submit" value="ajouter">
      </form>
      </div>
     
      <!-- Modal footer -->
      <div class="modal-footer">
        <button onclick="closem(1)" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


  




<div class="modal" id="myModal2" style="overflow: scroll;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ajouter eposter</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <form id="formepo" action="ajouterposter.php" method="post" enctype="multipart/form-data" >
      <div class="modal-body">
      
            <div ondrop="drop(event)" class="dropzoon"  id="dropzoon">
               <input  name="filesinp[]" style="display: block;" onchange="drop(event)" id="inputfile" type="file" multiple>
            
                       <span id="sinfo">select les posters</span> 
              </div>

           
            <br><br>
      <!-- Modal footer -->
            <div id="titlezoone">           </div>
            <br><br>

            <select class="form-select" style="display: none;" name="themev" id="ss">
            <?php

            $sql = "SELECT * FROM themes";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<option value='".$row["id"]."'>".$row["numtheme"]."----".$row["name"]."</option>" ;
              
              }


            } else {
              echo "0 results";
            }


            ?>
                   </select>

                   

 
                 
       
            <div class="modal-footer">
            <input name="btnajoutepo" class="btn btn-info" type="submit" value="ajouter eposter"/>

        <button onclick="closem(2)"  type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </form>

       
      </div>
     
    </div>
  </div>
</div>




<!-- CSS only -->
</body>
<script src="../js/jquery.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="../dist/js/bootstrap.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>
<script src="../dist/js/bootstrap.bundle.min.js" ></script>

<script>


function togle1(){
  $("#myModal").show(500)
}

function togle2(){
  $("#myModal2").show(500)
}

function closem(a){
  if(a==1){
    $("#myModal").hide(500)
  }
  if(a==2)
  $("#myModal2").hide(500)
}

window.addEventListener("dragenter",function(event){ event.preventDefault();})
window.addEventListener("dragover",function(event){ event.preventDefault();})
window.addEventListener("drop",function(event){ event.preventDefault();})
var formepo =document.getElementById("formepo")
var dropzone = document.getElementById("dropzoon")
var inputfile = document.getElementById("inputfile")


const formmdata=new FormData(formepo);
dropzone.addEventListener("drop",function(event){
    $("#titlezoone").empty();
    event.preventDefault();
    inputfile.files=event.dataTransfer.files

    var sinfo =document.getElementById("sinfo");
    sinfo.innerText="vous avez  "  +event.dataTransfer.files.length  +" fiches qui selection"
    
    
    for (let e = 0; e < inputfile.files.length; e++) {
         $("#formepo").append(" <br><input class='inputtxt form-control form-select-lg mb-3' name='title"+e+"' type='text' value='"+inputfile.files[e].name+"'/>")
         $("#formepo").append("<select class='selectopt form-select form-select-lg mb-3'  name='theme"+e+"'>"+$("#ss").html()+"</select>");
         $("#formepo").append("<hr/>")
       
         console.log(inputfile.files[e].name) 

    }
     
})





dropzone.addEventListener("dragover",function(event){
    event.preventDefault();
    dropzone.classList.add("colordrop")
    
})
dropzone.addEventListener("dragleave",function(event){
    event.preventDefault();
    dropzone.classList.remove("colordrop")
    
})



inputfile.addEventListener("change",function(event){
  dropzone.classList.add("colordrop")
  
  $("#titlezoone").empty();
    event.preventDefault();
    inputfile.files=event.files

    var sinfo =document.getElementById("sinfo");
    sinfo.innerText="vous avez  "  +inputfile.files.length  +" fiches qui selection"
    
    
    for (let e = 0; e < inputfile.files.length; e++) {
         $("#formepo").append(" <br><input class='inputtxt form-control form-select-lg mb-3' name='title"+e+"' type='text' value='"+inputfile.files[e].name+"'/>")
         $("#formepo").append("<select class='selectopt form-select form-select-lg mb-3'  name='theme"+e+"'>"+$("#ss").html()+"</select>");
         $("#formepo").append("</hr>")
       

    }
})
   
</script>


</html>