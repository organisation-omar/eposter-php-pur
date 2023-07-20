<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="style/bootstrap.min.css" rel="stylesheet" >
  <title>Document</title>
</head>
<style>
  body{
    background-image: url(<?php echo "pics/bgs/". scandir("pics/bgs/")[2];?>);
    background-size: 100vw 100vh;
    background-repeat: no-repeat;
  }
  
  
  img{transition: 0.3s;}
  img:hover{filter: brightness(0.4);}

  .contentimg{
    position: absolute;
    top: 62vh;

  }
  .contentimg .div1{
    width: 40%;
    margin: auto;
  
  }

  .contentimg .div2{
    width: 40%;
    margin: auto;
  
  }

</style>

<body>

<div  class="contentimg">
<div class="div1"><a href='main.php'><img class='epoimg' style='width: 100%;' src='pics/epo.png'/></a></div>

<div class="div2"><a href='php/programme.php'><img class='epoimg' style='width: 100%;' src='pics/prog.png'/></a></div>
</div>

</body>
</html>