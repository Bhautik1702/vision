<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400&family=Libre+Bodoni:ital@1&family=Ms+Madi&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <title>Document</title>
    <style>
        /* ::-moz-selection {
            Code for Firefox
            color: rgb(0, 0, 0);
            background: rgb(171, 171, 171);
        }

        ::selection {
            color: rgb(255, 251, 251);
            background: rgb(0, 0, 0);
        }

        html {
            scroll-behavior: smooth;
        } */
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
        *{
    font-family: 'Anek Kannada', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
        .circle{
            display: flex;
            justify-content: space-evenly;
            /* background-color: aqua; */
        }
        .img img{
            /* display: inline-block; */
            /* border-radius: 1000px; */
            height: 200px;
            width: 200px;
        }

        .img p{
            color: #f3f3f3;
            font-size: 20px;
            padding: 10px;
        }

        .contact_us{
            background-color: black;
            /* height: 200vh; */
        }
        .contact_us h1{
            color: chartreuse;
            text-align: center;
            padding: 10px;
            font-size: 30px;
        }

        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

body{
    background-color: black;

}

h1 {
  font-family: 'Poppins', sans-serif, 'arial';
  font-weight: 600;
  font-size: 72px;
  color: #454545;
  text-align: center;
}

h4 {
  font-family: 'Poppins', sans-serif, 'arial';
  font-weight: 400;
  font-size: 20px;
  color: #7ffa7a;
  line-height: 1.5;
}

.email{
  color: rgb(251, 236, 236);
  display: inline-block;
}

.email:hover {
  color: #c9c9c9;
}

/* ///// inputs /////*/

input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
  font-size: 0.75em;
  color: rgb(198, 198, 198);
  top: -5px;
  -webkit-transition: all 0.225s ease;
  transition: all 0.225s ease;
}

.styled-input {
  float: left;
  width: 293px;
  margin: 1rem 0;
  position: relative;
  border-radius: 4px;
}

@media only screen and (max-width: 768px){
  .styled-input {
      width:100%;
  }
}

.styled-input label {
  color: rgb(214, 214, 214);
  padding: 1.3rem 30px 1rem 30px;
  position: absolute;
  top: 10px;
  left: 0;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  pointer-events: none;
}

.styled-input.wide { 
  width: 650px;
  max-width: 100%;
}

input,
textarea {
  padding: 30px;
  border: 0;
  width: 100%;
  font-size: 1rem;
  background-color: #f3f3f3;
  color: rgb(54, 52, 52);
  border-radius: 4px;
}

input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
  width: 100%;
  -webkit-transition: all 0.075s ease;
  transition: all 0.075s ease;
}

textarea {
  width: 100%;
  min-height: 15em;
}

.input-container {
  width: 650px;
  max-width: 100%;
  margin: 20px auto 25px auto;
}

.submit-btn {
  
  /* float:unset; */
  padding: 7px 35px;
  border-radius: 20px;
  display: inline-block;
  float: right;
  background-color: #3c3b39;
  color: rgb(141, 251, 122);
  font-size: 18px;
  cursor: pointer;
  margin-bottom: 20px;
}

.submit-btn:hover {
  transform: translateY(1px);
  background-color: #b4b4b4;
}

@media (max-width: 768px) {
  .submit-btn {
      width:100%;
      float: none;
      text-align:center;
  }
}

input[type=checkbox] + label {
color: #ccc;
font-style: italic;
} 

input[type=checkbox]:checked + label {
color: #f00;
font-style: normal;
}

.container_button{
  display: flex;
  align-content: center;
  justify-content: center;
}

.container_button .btn{
  border-radius: 7px;
  color: #88f76a;
  padding: 12px;
  padding: 15px;
  background-color: rgba(226, 226, 226, 0.434);
}

.container_button .btn:hover{
  background-color: #7d7d7d6d;
}
.img:hover{
    cursor: pointer;
    transform: scale(1.20);
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
    <div class="contact_us">
        <h1>ABOUT US</h1><br>
        <div class="container">
            <div class="circle">
                <div class="img">
                    <img src="laxita.png" width="100px" height="20px" alt="">
                    <center><p>LAXITA SOJITRA</p></center>
                </div>
                <div class="img">
                    <img src="isha.png" width="15%" height="15%" alt="">
                    <center><p>ISHA PAGHDAL</p></center>
                </div>
                <div class="img">
                    <img src="priya.png" width="15%" height="15%" alt="">
                    <center><p>PRIYA TRAMBADIYA</p></center>
                </div>
                <div class="img">
                    <img src="srushti.png" alt="">
                    <center><p>SRUSHTI GOL</p></center>
                </div>
            </div>
        </div>
        <div id="fifth">
            <div class="container">
                <div class="row">
                    <h1>Get in touch</h1>
                </div>
                <div class="row">
                    <h4 style="text-align:center">Please feel free to get in touch anytime,
                        whether for work inquiries or to just say
                        <br> hello <a href="ishapaghdal@gmail.com" class="email">Yogayam@gmail.com
                </div>
                </h4>
            </div>

            <div class="container_button">
                <div class="button">
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/in/isha-paghdal-a893a523b"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-light btn-social" href="https://www.instagram.com/ish7a.p/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="row input-container">
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>Name</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input type="text" required />
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input" style="float:right;">
                        <input type="text" required />
                        <label>Phone Number</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <textarea required></textarea>
                        <label>Message</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="parent_button">
                        <div class="btn-lrg submit-btn">Send Message</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>