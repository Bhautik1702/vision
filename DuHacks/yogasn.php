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
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
    <style>
      nav{
    z-index: 1000;
    top: 0%;
    position: fixed;
    width: 100%;
    height: 60px;
    /* background-color: #231515; */
    display: flex;
    align-items: center;
    justify-content: center;
    /* justify-content: space-between; */
    /* padding: 0px 50px 0px 100px; */
}

nav ul{
    display: flex;
    list-style: none;

}

nav ul li{
    margin: 0 5px;
}

nav ul li a{
    /* color: rgb(210, 210, 210); */
    color: #94ff85;
    text-decoration: none;
    font-size: 0.8em;
    letter-spacing: -0.5px;
    padding: 5px 5px; 
    border-radius: 5px;
    transition: all 0.3s ease;
}
nav span {
  content: "\007C";
  font-size: 1em;
  color: #f4fff2;
  /* color: rgb(210, 210, 210); */

}

nav ul li a:hover , nav ul li a.active{
    color: cyan;
}

nav .menu-btn i{
    color: aliceblue;
    font-size: 22px;
    cursor: pointer;
    display: none;
}

#click{
    display: none;
}

@media (max-width: 898px) {
    nav .menu-btn i{
        display: block;
        margin-right: 10px;
        margin-left: 700px;
    }

    #click:checked ~ .menu-btn i:before{
        content: "\f00d";
        /* z-index: 10000000; */
    }

    nav ul{
        position: fixed;
        top: 60px;
        left: -100%;
        background-color: #000000e0;
        height: 100vh;
        width: 100%;
        display: block;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    #click:checked ~ ul{
        left: 0%;
        margin-left: 0px;
    }

    nav ul li{
        margin: 40px 0;
    }

    nav ul li a{
        font-size: 20px;
        display: block;
    }
    nav ul li a:hover , 
    nav ul li a.active{
        color: cyan;
        background-color: none; 
    }
}
@media (max-width: 755px) {
    nav .menu-btn i{
        display: block;
        /* margin-right: 10px; */
        margin-left: 560px;
    }
}
@media (max-width: 657px) {
    nav .menu-btn i{
        display: block;
        /* margin-right: 10px; */
        margin-left: 510px;
    }
}
@media (max-width: 624px) {
    nav .menu-btn i{
        display: block;
        /* margin-right: 10px; */
        margin-left: 490px;
    }
}
@media (max-width: 583px) {
    nav .menu-btn i{
        display: block;
        /* margin-right: 10px; */
        margin-left: 470px;
    }
}
@media (max-width: 493px) {
    nav .menu-btn i{
        display: block;
        /* margin-right: 10px; */
        margin-left: 400px;
    }
}
    </style>
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
    <br><br><br>
    <div class="head">
        <h1>Surya<span>Namskar</span></h1>
    </div>
    <div class="container">
        <div class="hexagon">
            <div class="shape">
                <img src="step1.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Pranamasanas</h2>
                        <p>Pranamasana yoga mudra is one of the most commonly practised yoga mudras in the world. The word Pranam Asana has its origins in the Sanskrit language, where Pranam means ‘to pay/give respect to someone, and Asana is referred to as a ‘pose’.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step2.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Hastauttanasana</h2>
                        <p>Hasta uttanasana is an asana that is a routine part of the Surya Namaskar series. This particular pose is also used in yoga practice to warm up and strengthen the spine, as well as to open up the chest and heart to allow for deep, full breaths.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step3.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Hasta Padasana</h2>
                        <p>Stretches the muscles of the abdomen.
                            Stretches and strengthens the shoulders.
                            Opens the chest.
                            Helps increase range of motion in shoulder joint and spine.
                            Strengthens the legs.
                            It helps to stretch the spine and build strength in the spinal extensors.
                            Tones the arms.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step4.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Ashwa Sanchalanasana</h2>
                        <p>Stretches spine therefore increasing the flexibility of the back. Strengthens the knee and ankles, opens up groin and hips. Strengthens the muscles of the chest hence enhances lung capacity. Tones and massages kidney, liver leading to their well functioning.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step5.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Dandasana</h2>
                        <p>Staff Pose stretches the hamstrings and calves and improves spinal awareness. If you run or play sports that have a lot of running, it is likely that you have tight hamstrings and calves. This pose can help restore some flexibility and it may help you improve your posture.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step6.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Ashtanga Namaskara</h2>
                        <p>The main physical benefits of Ashtanga Namaskara include: Strengthens your biceps. Strengthens rhomboids and trapezius muscles on your back. Stretches the fascia in the soles of your feet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step7.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Bhujangasana</h2>
                        <p>Bhujangasana is very useful to keep your back healthy. Practise this asana individually or through the Surya Namaskar to make your spinal region strong and very agile. This posture can tone your body and the spinal nerves.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step8.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Parvatasana</h2>
                        <p>Parvatasana helps develop a proper breathing technique. With regular practice of the pose, your lung capacity will increase. Parvatasana helps reduce flab from the abdomen, tummy, hips and the waist. The pose has a slimming effect on the physique.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step9.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Ashwa Sanchalanasana</h2>
                        <p>Stretches spine therefore increasing the flexibility of the back. Strengthens the knee and ankles, opens up groin and hips. Strengthens the muscles of the chest hence enhances lung capacity. Tones and massages kidney, liver leading to their well functioning.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step10.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Hasta Padasana</h2>
                        <p>Stretches the muscles of the abdomen.
                            Stretches and strengthens the shoulders.
                            Opens the chest.
                            Helps increase range of motion in shoulder joint and spine.
                            Strengthens the legs.
                            It helps to stretch the spine and build strength in the spinal extensors.
                            Tones the arms.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step11.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Hastauttanasana</h2>
                        <p>Stretches you arms, spine, abdomen, and chest area. Improves your respiratory functions. Hasta Uttanasana also helps with weight loss. Stretches and tones your abdomen muscles.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon">
            <div class="shape">
                <img src="step12.jpg" alt="">
                <div class="content">
                    <div>
                        <h2>Tadasana</h2>
                        <p>Tadasana centers your body and mind, which helps create a calm sense of inner peace. Maintaining alignment and body awareness is a constant process. Standing strong, steady, and centered in Mountain Pose helps to improve posture, alignment, and balance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php }
else {
  echo "<script>alert('FOR MENU, LOGIN FIRST');
  window.history.back(1);
  </script>";
}
?>