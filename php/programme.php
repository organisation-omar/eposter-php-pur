<!DOCTYPE html>
<html lang="en">
<head>
  <title>programme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/bots341.css">
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="../style/css.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
</head>

<style>
  
  .imgprev{
        width: 100px;
      
        transition: 0.3;
    }
   .imgprev:hover{
       filter: brightness(0.3);
    }

    .imgp{
        width: 100px;
        margin-top: 40vh;
        height: 20vh;
		opacity: 0.2;
    }
body{
	background-color: #429ba7;
}
.btnp{
	position: fixed;
    bottom: 0;
    border-radius: 39px;
    border: 0;
    background-color: transparent;
}


</style>
<body >


    
<div class="">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


              <?php
			  
			  $a=0;
			  $dir_name = "../pics/picsprog/";
			  $images = glob($dir_name."*");
			  foreach($images as $image) {
            if($a==0){
				echo  "<div class='item active'><img  src='$image' style='width:100%;height: 100vh;'></div>";
			}
			else
			{
				echo  "<div class='item '><img  src='$image' style='width:100%;height: 100vh;'></div>";
			}
               $a++;
				
			  }
			 ?>

    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span ><img class="imgp" src="../pics/left.png" alt="" srcset=""></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span ><img class="imgp "  src="../pics/right-arrow.png" alt="" srcset=""></span>
      <span  class="sr-only">suivant</span>
    </a>
  </div>
</div>

<?php

 echo "
 <button style='background-color: transparent;' class='btnp'><a href='".$_SERVER["HTTP_REFERER"]."'><img class='imgprev' src='../pics/bgbtn/retour.ng.png'></a></button>
 
" ;
?>
</body>
<script src="../js/jquery.min.js"></script>
  <script src="../js/bots.js"></script>
  <script src="../js/js.js"></script>

  <script>
    // ---------Responsive-navbar-active-animation-----------
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});




// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });
  </script>

</html>
