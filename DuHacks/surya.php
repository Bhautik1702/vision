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
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet"> -->
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel&family=PT+Serif&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="surya.css" />
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

  <!-- <h2>The pose begins when you want to get out of it!!</h2> -->
  <body>
    <!-- <script src="surya.js"></script> -->
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
    <h1>The
      <span> pose</span> begins<br />when <br />you want to 
      <span> get out of it!!</span>
    </h1>
    <div class="container">
      <div class="card">
        <div class="imgBx">
          <img src="1.jpg" alt="" /><br />
          <h2>Supta Baddha Konasana</h2>
          <p>
            <br />Perform Baddha Konasana. Exhale and lower your back torso
            toward the floor, first leaning on your hands. Once you are leaning
            back on your forearms, use your hands to spread the back of your
            pelvis.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="1">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img src="2.jpg" alt="" /><br />
          <h2>Ardha Matsyendrasana</h2>
          <p>
            <br />Ardha Matsyendrasana (Half Lord of the Fishes Pose/Seated
            Twist Pose) is a deep, restorative twist that is both strengthening
            and rejuvenating.which
            improves circulation, helps with digestion, and improves spinal
            mobility.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="2">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="3.jpg" alt="" /><br />
          <h2>Baddha Konasana</h2>
          <p>
            <br />Baddha Konasana (Bound Angle Pose) is a go-to pose for opening
            the hips and stretching the inner thigh muscles. This seemingly
            simple pose also strengthens your core and improves your posture.
            Also known as Cobbler’s Pose.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="3">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="4.jpg" alt="" /><br />
          <h2>Hast-padasana</h2>
          <p>
            <br />Hast-padasana has many benefits.It gives the body a nice
            shape. It helps in stretching the body muscles. It makes your hands,
            legs, and chest stronger. Fights belly diseases. It Burns that
            extra fat around your belly.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="4">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="5.jpg" alt="" /><br />
          <h2>Utkatasana</h2>
          <p>
            <br />Utkatasana (Chair Pose) is sometimes translated from Sanskrit
            to English as “Fierce Seat” or “Powerful Pose.” It is a
            strengthening and heat-building asana that brings all parts of your
            body together into a  powerful whole.This asana is a
            meditation on determination.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="5">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="6.jpg" alt="" /><br />
          <h2>Utthita Parsvakonasana</h2>
          <p>
            <br />Utthita Parsvakonasana (Extended Side Angle Pose) is all about
            the extension: in your arms, your legs, and your stance. In this
            challenging posture, you’ll feel a stretch from the
            outer heel of your foot to your fingertips.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="6">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="7.jpg" alt="" /><br />
          <h2>Bharadvajasana</h2>
          <p>
            <br />Bharadvajasana (Bharadvaja’s Twist) is a seated pose that
            strengthens and stretches your spine, neck, and shoulders. It’s
            important to avoid doing this pose “head first”—in other words,
            tightening the muscles at the back of your neck.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="7">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="8.jpg" alt="" /><br />
          <h2>Paschimottanasana</h2>
          <p>
            <br />Paschimottanasana (Seated Forward Bend) is a foundational pose
            that many yoga practitioners breeze past. But extending the top half
            of the body over the seated lower half helps stretch the entire back
            of you body to enhance your physical flexibility.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="8">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="9.jpg" alt="" /><br />
          <h2>Setu Bandha Sarvangasana</h2>
          <p>
            <br />Bridge Pose (Setu Bandha Sarvangasana) is one of the first
            back-bending yoga postures that many new students learn. And yet,
            much like the rest of an asana practice.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="9">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="10.jpg" alt="" /><br />
          <h2>Ananda Balasan</h2>
          <p>
            <br />Ananda Balasana is a great stretch for the inner thighs, inner
            groins, hips, hamstrings—even the shoulders and chest are involved.
            ssIt offers freedom in the back muscles, which is great after doing
            other poses.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="10">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="11.jpg" alt="" /><br />
          <h2>Garudasana</h2>
          <p>
            <br />Garudasana (Eagle Pose) requires careful focus. You must bend
            your knees, cross your left thigh over your right, hook the top of
            your foot behind your right calf, spread the scapula and snug your
            right elbow into the crook of your left.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="11">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="12.jpg" alt="" /><br />
          <h2>Gomukhasana</h2>
          <p>
            <br />Gomukhasana (Cow Face Pose) stretches your entire body—your
            shoulders and arms, your ankles, hips, thighs and back. In the pose,
            the folded legs are said to resemble a cow’s mouth; the elbows form
            the shape of a cow’s ears.
          </p>
          <form action="managefavourite.php" method="POST">
            <input type="hidden" name="itemId" value="12">
            <button type="submit" name="addToFavourite">Add to your TO-DO-List</button>
          </form>
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
