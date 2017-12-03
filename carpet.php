<?php
    $productname = "Carpets";
    include_once "functions.php";
    
    addrecentviews($productname);
?>

<!DOCTYPE html>
<html>
<title>Venture Design</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Venture<br>Interior<br>Design</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="/index.php/#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Portfolio</a> 
    <a href="/index.php/#products" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Products/Services</a> 
    <a href="/index.php/#news" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">News</a> 
    <a href="/index.php/#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About</a> 
    <a href="/index.php/#contacts" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contacts</a> 
    <a href="/login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Secure Login</a> 
    <a href="/user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">User</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>Venture Design</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

 <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="login">
    <h1 class="w3-xxxlarge w3-text-blue"><b>Carpets</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
  </div>
  
  We sell carpets!
  

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

</script>

</body>
</html>