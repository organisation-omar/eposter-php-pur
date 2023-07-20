
<?php include 'dbcon.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>eposter</title>
</head>
<body>
    
<style>
    body{margin: 0; padding: 0;   }
    .ifr{
        width: 102vw;
        height: 100vh;
    }
   
    
    img:hover{
       filter: brightness(0.3);
    }

    .btnp{
	position: fixed;
    bottom: 0;
    border-radius: 39px;
    border: 0;
    z-index: 999999;
    margin: 30px;
    background-color: transparent;
    background: transparent;

}
.c012 {
    transform: translateY(0%);
    display: none;
}


::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
 background-color: #F5F5F5;
}
.fa-solid{
        font-size: 8rem;
    position: fixed;
    bottom: 0;
    color: cadetblue;
}
.btnp{
  background-color:  #f5f5dc00;
  
}

.imgb{
    width: 76px;
    height: 70px;
}


</style>



<?php

if(isset($_GET["n"])){

$n=$_GET["n"];

if($n==""){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else{
    echo "<iframe id='ifrecontent' class='ifr' src='../pdfs/".   $n  ."'></iframe>";
 
}

}



echo "
<button class='btnp'><a  style='display: block' href='recharche.php?qq=tepo'><img class='imgb' src='../pics/bgbtn/retour.ng.png'/></a></button>";
?>
</body>

<script>
    
    

    setTimeout(function(){
        var  ifrecontent =document.getElementById("ifrecontent")
          ifrecontent.contentWindow.document.images[0].style.width='100%'
          ifrecontent.contentWindow.document.images[0].style.height='100vh'
    },300)

</script>
</html>



