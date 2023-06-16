<html>
<header>
    <link rel="stylesheet" href="./css/base.css" type="text/css" media="all">
    <link href='https://fonts.googleapis.com/css?family=Albert Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Oleo Script' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</header>
<body  >
<nav class="cabecalho" >
    <div  >
        <div class="logoName" >MÁRCIA AMORIM</div>
        <div class="logoText" >Bolos festivos.</div>
    </div> 
    <div class="cabecalho-menu" id="myTopnav" >
        <a href="#home" >Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</nav>
<content class="principal" >
    <div>
        <img class="mySlides" src="./imgs/bolo_festivo_1.webp" style="width:100%" />
        <img class="mySlides" src="./imgs/bolo_festivo_2.webp" style="width:100%" />
        <img class="mySlides" src="./imgs/bolo_festivo_3.webp" style="width:100%" />
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>

</content>

<script>
    var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>