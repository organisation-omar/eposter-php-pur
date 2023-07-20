<?php include './php/dbcon.php'?>

<?php 
$sql = "SELECT name  FROM eventinfo";
$result = $conn->query($sql);
$namevent="";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $namevent=$row["name"];
  }
  } else {
    echo "0 results";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/keybord/style.css">
    <link href="style/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/css.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Anybody:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/fonta/css/all.css">
    <link rel="stylesheet" href="/style/fonta/css/fontawesome.min.css">

    <title>eposter</title>




</head>


<style>

  body{
   
  }
  
::-webkit-scrollbar {
  width: 0px;
  background-color: #8a2be200;
}

::-webkit-scrollbar-thumb {
  border-radius: 0px;
  -webkit-box-shadow: inset #8a2be200;
  background-color: #8a2be200;
}
  #divshowhide{

    width: 0%;
    position: fixed;
    right: 0;
    height: 0vh;
    bottom: 0;
   
}


.keyboard_wrapper {
  z-index: 9999999;
    width: 84%;
    left: 10%;
    height: 400px;
}
a:hover{text-decoration: none;}
.navbar{

position: fixed;
width: 100%;
z-index: 99;
height: 87px;
}

.btnre{position: static;}
.s003{
  display: none;
  top: 52px;
  z-index: 999;
    height: 101px;
    margin: 0;
    padding: 0;
}

.s003 form .inner-form{display: flex; flex-direction: column; width: 70vw;}
.s003 form .inner-form .input-field.first-wrap{
  width: 100%;
    text-align: center;
    top: 25vh;
}


.s003 form {
    width: 31%;
    margin: 0;
    margin-top: 20%;
    margin-left: 13%;
}

.navbar{

position: fixed;
width: 100%;
z-index: 99;
padding-right: 119px;
}
    .row span{border: 1px solid rgb(9 183 30);}

    .navbar{ margin-right: 52px;}

.navbar{

position: fixed;
width: 100%;
z-index: 99;
padding-right: 119px;
}
nav{
  background: linear-gradient(180deg, rgba(70,112,222,1) 11%, rgba(195,205,233,1) 69%, rgba(236,236,236,0.8463585263206845) 89%, rgba(236,236,236,0) 97%);}


a{color: black;}

.iposter{
  background-image: url(pics/bgbtn/bgepo.png);
    background-size: 101% 122%;
    border: 0;
    box-shadow: 0 0;
    padding: 55px;
    margin-top: -30px;
    background-color: transparent;
    padding-left: 23vw;
    padding-right: 8vw;
}
.bodycc{
    background-size: 100% 100vh;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
}

li{list-style: none;    padding-top: 3vh;}

nav{
  position: fixed;
  z-index: 9999;
  top: 0;
  display: flex;
  height: 8vh;
    justify-content: space-between;
width: 100%;
}
nav ul{
  display: flex;
    justify-content: space-between;
    gap: 30px;
    
}

ul img{
  width: 76px;
    height: 70px;
  
}
img:hover{
cursor: pointer;
filter: brightness(0.5);
  
}
#findera img{
  width: 40px;
    margin-right: 50px;
    margin-top: 3vh;
    height: 40px;
   
}
#findera img:hover{
  cursor: pointer;
filter: brightness(0.5);
   
}
#findera{
  padding: 5px;
  padding-top: 0vh;
}


li a{font-size: 1.5rem;}


.ptitile{
 
  text-align: center;
    margin: 0;
    padding: 0;
}
#info{
width: 90%;
    margin: auto;
    margin-top: 7.3vh;
    height: 90vh;
    overflow: scroll;
    height: 100vh;
  }
  .aback{
    position: fixed;
    bottom: 0;
    margin: 30px;
  }
  a:hover{color: white; text-decoration: none;}
  .al{
    color: #0835b9;
    transition: 0.3s;
    font-size: 1.1rem;
   
  }
  .al:hover{
    color: #0835b9;
    text-decoration: underline;
    font-size: 1.1rem;
  
  }
  #btn-back-to-top {
     display: block;
    background-color: #2b2d32;
    border: 0;
    border-radius: 50%;
    text-align: center;
    padding: 0;
    margin: 0;
    /* font-size: 1rem; */
    padding: 16px;
  }
  #btn-back-to-top i{padding: 0;margin: 0;}



  .s003 form .inner-form{
    width: 70vw;
    position: absolute;
    left: 5%;
    top: 65vh;
}

.linvvv{
    margin: 0 25px;
  }

@media screen and (max-width: 800px) {
  a  .far{display: none;}


  li {
 
    padding-top: 5vh;
}
  nav ul {
    gap: 6px;
}
.al {  
    font-size: 1rem;
}
#findera img {
    width: 22px;
    margin-right: 6px;
    margin-top: 5vh;
    height: 27px;
}
nav {   
    height: 14vh;
}
#info {
    margin-top: 12.3vh;
}
.s003 form .inner-form {  
    top: 20vh;
}
.keyboard_wrapper {
    bottom: -3000px;  
} 
.iposter {
    background-image: url(pics/bgbtn/bgepo.png);
    background-size: 100% 81%;
    background-color: #e7e7e700;
    border: 0;
    box-shadow: 0 0;
    padding: 55px;
    /* margin: -31px; */
    margin-top: 7px;
    background-color: transparent;
    padding-left: 21vw;
    padding-right: 0vw;
    padding-top: 18px;
    background-repeat: no-repeat;
    margin-bottom: -48px;

}

.linvvv{
  margin: 0;
}

ul img {
    width: 66px;
    height: 52px;
}
}
</style>
<body  class="bodycc">
<nav>
   <a class="aback"  href='./index.php'><img style=" width: 76px;height: 70px;" src="pics/bgbtn/retour.ng.png" alt="" srcset=""></a>  
  
<ul>

  <li style="padding: 0;padding-top: 2vh;">
  <img style="margin-left: 2vw;" src="<?php echo "pics/logs/". scandir("pics/logs/")[2];?>" alt="" srcset="">
</li>
  <li>
  <p class="ptitile al"><?php echo $namevent?></p> 
  </li>
</ul>    
  <ul>
        
  <li >
                    <a class="al"  <?php if((isset($_GET["qq"]) && ($_GET["qq"]=="toth"))|| (isset($_POST["choices-single-defaul"])&&$_POST["choices-single-defaul"]==1)){ echo 'active';}?>" href="php/recharche.php?qq=toth"><i class="far fa-address-book"></i>themes</a>
                  
                  </li>
                <li class="linvvv" style="">
                    <a class="al"  <?php if((isset($_GET["qq"]) && ($_GET["qq"]!="toth"))||(isset($_POST["choices-single-defaul"])&&$_POST["choices-single-defaul"]==2)){ echo 'active';}?>" href="php/recharche.php?qq=tepo" ><i class="far fa-chart-bar"></i>E-posters</a>
               
                  </li>
                


                    <a  id="findera" href="#" ><img src="pics/bgbtn/recherche.png" alt="" srcset=""></i></a>
                
                 
  </ul>
</nav>

<div id="info"   >
<?php

$sql = "SELECT * FROM themes ORDER BY `themes`.`name` ASC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
   

                     echo "<div class='iposter'> <a class='lien' href='php/recharche.php?qq=".$row["id"]."'/>". $row["name"]."</a></div>" ;

  }

  
} else {
  echo "<h1 style='text-align:center'>0 results </h1>";
}


?>

</div>








<!-- key board -->


<div class="keyboard_wrapper">
    <pre class="display"></pre>

    
    <div class="key">
        <div class="row">
            <span  data-key="q">q</span>
            <span data-key="w">w</span>
            <span data-key="e">e</span>
            <span data-key="r">r</span>
            <span  data-key="t">t</span>
            <span  data-key="u">u</span>
            <span  data-key="i">i</span>
            <span  data-key="o">o</span>
            <span  data-key="p">p</span>
          </div>
          
          <div class="row">
            <span  data-key="s">s</span>
            <span  data-key="y">y</span>
          <span  data-key="d">d</span>
          <span  data-key="f">f</span>
          <span  data-key="g">g</span>
          <span  data-key="h">h</span>
          <span  data-key="j">j</span>
          <span  data-key="k">k</span>
          <span  data-key="l">l</span>
          <span  data-key="a">a</span>
        </div>



       


        <div class="row">
            <span  class="caps">caps</span>
            <span  data-key="z">z</span>
            <span  data-key="x">x</span>
            <span  data-key="c">c</span>
            <span  data-key="v">v</span>
            <span  data-key="b">b</span>
            <span  data-key="n">n</span>
            <span  data-key="m">m</span>
            <span  class="backspace">
              
           sup </span>
        </div>



        <div class="row">
            <span   data-key="0">0</span>
            <span   data-key="1">1</span>
            <span   data-key="2">2</span>
            <span   data-key="3">3</span>
            <span   data-key="4">4</span>
            <span   data-key="5">5</span>
            <span   data-key="6">6</span>
            <span   data-key="7">7</span>
            <span    data-key="8">8</span>
            <span   data-key="9">9</span>
        </div>



        <div class="row">
            <span  text-align:center" class="space" data-key=" ">
                Space
            </span> 
        </div>
   
    
  
    </div> <br><br>
</div>

<div onclick="fullscreen()" id="divshowhide"></div>

<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>

<div style="position: fixed;" class="s003">
      <form action="php/recharche.php" method="post">
        <div style="width: 70vw;" class="inner-form">
          <div class="input-field first-wrap ">
            <div class="selctse">
              <select data-trigger="" name="choices-single-defaul">
                <option  style="font-size: 300px;"  selected  value="2">par tout</option>
                <option  value="1">par thems</option>
                <option  value="2">par eposter</option>
                <option  value="3">par numero</option>
              
              </select>
            </div>
          </div>
       
          <div class="input-field second-wrap">  
            <input id="inptxt" name="txtrech" id="search" type="text" placeholder="Entrez ce que vous voulez trouver ?" />
          </div>
          <div class="input-field third-wrap">
            <button style="background: #2196f3;" class="btn-search" >
              <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>


        
          </div>
         
        </div>
      </form>
  
     
      <div>
</body>
<!-- key board -->

<script src="js/jquery.min.js"></script>

<script src="js/js.js"></script>

<script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>


<script src="js/keyb.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>

 
var btnclavie=$("#btnclavie");
var key=$(".key");

btnclavie.click(function(){

key.toggle(1000)
});


var togle=false;
function fullscreen(){

    if(togle==false)
    {
        document.documentElement.webkitRequestFullscreen()
         togle=true
    }
    else{
        togle=false
        document.exitFullscreen()

    }
    


}



var clibpoard = document.getElementById("divshowhide");

clibpoard.addEventListener("click",function(){
navigator.clipboard.writeText(location.host+"/php/administration.php");


})


$("#findera").click(function(event){
  event.preventDefault();
  $(".s003").toggle(900);
  $(".keyboard_wrapper").toggle(900);
  $(".iposter").toggle(300)
}
)



</script>
</html>