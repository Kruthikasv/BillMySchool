<!DOCTYPE html>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css\master.css">
<style>
  body {
    background:#c3c6a0;;
    padding-left: 200px;
    padding-right: 200px;
  
  }

  .about-bms-top {
    position: relative;
    margin:-0px;
  }

  .about-bms-top-text {
    float: right;
    width: 55%;
  }

  #bmscom {
    font-size: 25px;
    color: darkred;
  }

  #bms {
    font-size: 34px;
    color:darkred;

  }

  .subheading {

    font-size: 16px;
    color: black;
    margin-top: 15px;
    line-height: 30px;
    word-spacing: 3px;
    letter-spacing: 2px;
  }

  .bms-content {
    font-size: 14.5px;
    color: black;
    line-height: 27px;
    word-spacing: 2.5px;
    letter-spacing: 1px;
    display: inline-block;
    justify-content: center;
  }

  .school-counter {
    background:brown;
    width: 28%;
    padding: 20px 0px 20px 115px;
    margin-left: 30%;
    position: absolute;
    top: 76%;
    left: 5%;
    color:white;
    margin-bottom: 10px;
    font-weight: 500;
    display: block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 18px
  }

  .number::after {
    font: 38px system-ui;
    content: counter(count);
    animation: counter 10s linear;
    counter-reset: count 0;
    animation-iteration-count: 1;
    animation-play-state: running;
    animation-fill-mode: forwards;
  }

  @keyframes counter {
    0% {
      counter-increment: count 0;
    }

    10% {
      counter-increment: count 1;
    }

    20% {
      counter-increment: count 2;
    }

    30% {
      counter-increment: count 3;
    }

    40% {
      counter-increment: count 4;
    }

    50% {
      counter-increment: count 5;
    }

    60% {
      counter-increment: count 6;
    }

    70% {
      counter-increment: count 7;
    }

    80% {
      counter-increment: count 8;
    }

    90% {
      counter-increment: count 9;
    }

    100% {
      counter-increment: count 10;
    }
  }

  #second-subtitle {
    font-size: 15px;
    font-weight: 600;
    color: #999999;
    text-align: center;
  }

  .second-sec p {
    text-align: center;
    font-size: 40px;
    color: #31de79;

  }

  .second-sec img {
    width: 320px;
    height: 215px;
    padding-right: 35px;
    margin-left: 9px;
  }
</style>
<html>

<head>
  <title>About-BillMySchool</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
<strong><a class="navbar-brand" href="" style="text-shadow: 1px 1px black; color:rgb(40, 21, 8);">Bill my $chool</a></strong>

<div class="topnav">


        <div class=navbar-nav ml-auto  id="myTopnav">

          
            <span class="menu" class="nav-item">
              
              <a href="index.php" class="nav-item" style="padding:10px 8px;">Home</a>
            
            <a href="#contact" class="nav-item" style="padding:10px 8px;">Contact</a>
            <a href="login.php"  class="nav-item" style="padding:10px 8px; text-decoration:none">Login/Sign-Up</a>
            </a>
           </span>
</nav>
  <!-- <a href="#index.html" class="logo-onClick">
            <img id="logoImage" src="images/bmsLogo.png" alt="BMS logo" width="153px" height="93px">
        </a> -->


  <div class="row" style="position: relative; float:left;">
    <img src="images/about1.jpg" alt="meeting" width="450px" height="740px">
    <div class="about-bms-top-text" style="margin-left:10px;">
      <span id="bms">BILL MY SCHOOL .</span><span id=bmscom>COM</span>
      <div class="subheading">
        <span>IT'S THE BEST WAY TO MANAGE YOUR ENTIRE SCHOOL FEES BILLING SYSTEM. IT'S JUST FASTER AND EASIER.</span>
      </div>

      <div class="bms-content">
        <strong>
          <p>Bill My School is a simple and efficient way to manage complete school fees where you can customize by creating classes and sections easily and any number of students can be added accordingly. You can generate bill and do followups of pending fees effectively.</p>

          <p>Bill My School is a product of Rapsol Technologies Private Limited, A start-up which took its birth in the heart of City Of Dreams - "Namma Bengaluru". We at Rapsol Technologies Private Limited are a group of like minded professionals, committed to deliver Excellence.</p>

          <p>The concept of Bill My School took its inception after a several surverys and suggestions taken from various schools and pre schools, where each school require a simple and efficient billing system which is very easy to use and effectively maintain the overall fees receivals and followups of a student, where both school and parents are kept notified about the fees payment.</p>
        </strong>
      </div>

    </div>
    <div class="school-counter">
      <span class="number"></span><br>
      SCHOOLS USE OUR PRODUCT
    </div>
  </div>
 
  


  <!-- </ul> -->
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
</body>

</html>