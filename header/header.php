<?php

?>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="header/1.jpg" style="	height:200px;
	top:0px;
	position:absolute;
	width:100%;
	left:0px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="header/2.jpg" style="	height:200px;
	top:0px;
	position:absolute;
	width:100%;
	left:0px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="header/3.jpg" style="	height:200px;
	top:0px;
	position:absolute;
	width:100%;
	left:0px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">4/ 4</div>
  <img src="header/4.jpg" style="	height:200px;
	top:0px;
	position:absolute;
	width:100%;
	left:0px;">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


