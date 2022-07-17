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
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home2.css">
    <link rel="stylesheet" href="home.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400&family=Libre+Bodoni:ital@1&family=Ms+Madi&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <title>HOME</title>

    
</head>
<body>
    <nav>
        <!-- <div class="logo"><a href="#">PIXEL</a></div> -->
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
        <li> <a href="home_loggedin.php">HOME</a> </li>
            <span>&#124;</span>
            <li> <a href="surya.php">YOGA</a> </li>
            <span>&#124;</span>
            <li> <a href="yogasn.php">SURYA NAMASKAR</a> </li>
            <span>&#124;</span>
            <li> <a href="water.php">STAY HYDRATED</a> </li>
            <span>&#124;</span>
            <li> <a href="viewfavourite.php">TO-DO-LIST</a> </li>
            <span>&#124;</span>
            <li> <a href="contact.php">ABOUT</a> </li>
            <span>&#124;</span>
            <li> <a href="_logout.php">LOGOUT</a> </li>
        </ul>
    </nav>

    <div class="first">
    <div id="first_page">
        <div class="quote">
            <p class="para1">YOGA IS THE JOURNEY  </p><br> <p class="para2">OF THE SELF!</p> <br>
            <p class="para3"> THROUGH THE SELF!</p><br><p class="para2">TO THE SELF!! </p><br>
        </div>
    </div>
    <div class="vid1">
        <video width="350" height="170" autoplay muted >
            <source src="yoga1.mp4" type="video/mp4" >
            <source src="yoga1.ogg" type="video/ogg"> 
            Your browser does not support the video tag.
          </video>

    </div>
</div>

<section id="lab">
        <div class="sectionheader">
            	<!-- <h1>The lab</h1> -->
            <div class="beaker"></div></div>	
            <article>
        
                <div class="lab_item">		
                <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(11.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
                  <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(2.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
         <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(3.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
         <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(4.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
                      <div class="lab_item">        
                <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(5.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
                  <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(7.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
                  <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(6.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
                  <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(8.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
                  <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(Janu\ Sirsasana.JPG);">                
                        </div>
                     </div>
                 </div>
                 </div>
                  <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(11.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
                  <div class="lab_item">
                  <div class="hexagon hexagon2">
                    <div class="hexagon-in1">
                        <div class="hexagon-in2" style="background-image: url(12.jpg);">                
                        </div>
                     </div>
                 </div>
                 </div>
            </article>
        </section>
        <section>
            <div class="sec3">
                <img src='Mudra-Asana.jpg' width="400" height="300" alt=''>
                
                <p>Yoga is a mind and body practice. Various styles of yoga combine physical postures, 
                    breathing techniques, and meditation or relaxation. Yoga is an ancient practice 
                    that may have originated in India. It involves movement, meditation, and breathing 
                    techniques to promote mental and physical well-being.Let's do aasan together and add
                    your aasan to to do list<a href="surya.php">click here</a></p>
                    
                    <img src='suryanamaskar.jpg' width="400" height="300" alt=''>
                    
                    <p>The Surya Namaskar tones the entire body, helps with weight loss, and strengthens muscles and 
                        joints. Practice this flow if you want to improve your complexion as it ensures a better functioning 
                        digestive system. Improve your sleep as it helps combat insomnia and reduces stress levels.
                        Let's do suryanamaskar together.<a href="yogasn.php">click here</a></p>
                        
                        <img src='water.webp' width="400" height="300" alt=''>
                        
                        <p>Up to 60% of the human adult body is water. According to H.H. Mitchell, Journal of Biological 
                            Chemistry 158, the brain and heart are composed of 73% water, and the lungs are about 83% water. 
                            The skin contains 64% water, muscles and kidneys are 79%, and even the bones are watery: 31%.
                            Stay hydrated and check your water level here<a href="water.php">click here</a></p>
                            
                        </div>
                        </section>
</body>
</html>