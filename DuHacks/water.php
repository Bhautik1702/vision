<?php 
include 'config.php';
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
  $userId = $_SESSION['userId'];
  $username = $_SESSION['username'];
}
else{
  $loggedin = false;
  $userId = 0;
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>drink water </title>
    <link rel="stylesheet" href="water.css">
    
</head>
<body>
 
    <h1>DRI<span style="color:blue ;">NK</span> WAT<span  style="color:blue ;">ER</span></h1>
    <h3> Goal: 2 liters</h3>
    <div class="cup">
        <div class="remained" id="remained">
            <span id="liters">1.5L</span>
            <small>remained</small>
        </div>
        <div class="percentage" id="percentage">20%</div>
    </div>
    <P class="text">select how many glasses of water that you have drank!!</P>
 
<div class="cups">
 
    <div class="cup cup-small"> 250 ml</div>
    <div class="cup cup-small"> 250 ml</div>
    <div class="cup cup-small"> 250 ml</div>
    <div class="cup cup-small"> 250 ml</div>
    <div class="cup cup-small"> 250 ml</div>
    <div class="cup cup-small"> 250 ml</div>
    <div class="cup cup-small"> 250 ml</div>
    <div class="cup cup-small"> 250 ml</div>
 
 
</div>
 
    <script src="water.js"></script>
</body>
</html>
<?php }
else {
  echo "<script>alert('FOR MENU, LOGIN FIRST');
  window.history.back(1);
  </script>";
}
?>