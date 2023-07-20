
       
   //Get the button
   let mybutton = document.getElementById("btn-back-to-top");

   // When the user scrolls down 20px from the top of the document, show the button
   document.getElementById("info").onscroll = function () {
     scrollFunction();
   };
   
   function scrollFunction() {
     if (
		document.getElementById("info").scrollTop > 20 ||
		document.getElementById("info").scrollTop > 20
     ) {
       mybutton.style.display = "block";
     } else {
       mybutton.style.display = "none";
     }
   }
   // When the user clicks on the button, scroll to the top of the document
   mybutton.addEventListener("click", backToTop);
   
   function backToTop() {
    document.getElementById("info").scrollTop = 0;
    document.getElementById("info").scrollTop = 0;
   }
  

