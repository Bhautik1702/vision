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
<html>
    <head>
       <title>photoes</title>

       <style>
        body{
          background-color:black;
          color: #c5ff58
        }

          h1{
            display:block;
            text-align:center;
          }

          .container{
            display:inline;
            background-color:white;
          }
          img{
            /* background-color:white; */
            display:inline-block;
            height:300px;
            width:300px;
          }
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
  <h1>Your to do list</h1>
<!-- <div class="container"></div> -->
<div class="container">
<?php
$sql = "SELECT * FROM `viewfavourite` WHERE `userId`= $userId";
$result = mysqli_query($link, $sql);
$counter = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $itemId = $row['itemId'];
    $mysql = "SELECT * FROM `item` WHERE itemId = $itemId";
    $myresult = mysqli_query($link, $mysql);
    $myrow = mysqli_fetch_assoc($myresult);
    $itemName = $myrow['itemName'];
    $counter++;
    ?>
    
                        <center><img src="<?php echo $itemId ?>.jpg" >
                        <h3><?php echo $itemName ?></h3>
                            <form action="managefavourite.php" method="POST">
                                <button name="removeItem" >Remove</button>
                                <input type="hidden" name="itemId" value="<?php echo $itemId ?>">
                            </form>
</center>
      <?php
}
?>
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