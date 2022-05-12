<!DOCTYPE html>
<style>
  body {
    background: linear-gradient(to right, #000, #000069);
    padding-left: 200px;
    padding-right: 200px;
    font-family: "Nunito Sans", Arial, sans-serif;

  }

  /* ul{
    margin:-10px 60px 15px 10px;
    padding-top: 10px;
}
li{
float:right;
padding:18px;


list-style: none;


}
li a{
    font-size:14.5px;
    color: white;
    /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
  /* font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-decoration: none;
} */
  .active {
    color: #20c997;
  }

  /* .logo-onClick{
    /* float: left; 
  
} */

  .topnav-nav {
    overflow: hidden;

  }

  .logo {
    float: left;
  }

  .menu a {
    float: right;
    display: flex;

    text-align: center;
    margin: 22px 20px;
    text-decoration: none;

    font-size: 16px;
    color: white;
    /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
    /* font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
    text-decoration: none;
  }

  .topnav-nav a:hover {
    border-bottom: 2px solid #20c997;
    color: #20c997;

  }

  .topnav-nav a.active {

    border-bottom: 2px solid #20c997;
    color: #20c997;
  }

  .topnav-nav .icon {
    display: none;
  }

  @media screen and (max-width: 600px) {
    .topnav-nav a:not(:first-child) {
      display: none;
    }

    .topnav-nav a.icon {
      float: right;
      display: block;
    }
  }


  @media screen and (max-width: 600px) {
    .topnav-nav.responsive {
      position: relative;
    }

    .topnav-nav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }

    .topnav-nav.responsive a {
      float: none;
      display: block;
      text-align: right;
    }
  }

  .about-bms-top {
    position: relative;
  }

  .about-bms-top-text {
    float: right;
    width: 55%;
  }

  #bmscom {
    font-size: 25px;
    color: #31de79;
  }

  #bms {
    font-size: 34px;
    color: #31de79;

  }

  .subheading {

    font-size: 16px;
    color: #9ff669;
    margin-top: 15px;
    line-height: 30px;
    word-spacing: 3px;
    letter-spacing: 2px;
  }

  .bms-content {
    font-size: 14.5px;
    color: #999999;
    line-height: 27px;
    word-spacing: 2.5px;
    letter-spacing: 1px;
    display: inline-block;
    justify-content: center;
  }

  .school-counter {
    background: linear-gradient(135deg, #9ff669 0%, #31de79 100%);
    width: 28%;
    padding: 20px 0px 20px 115px;
    margin-left: 30%;
    position: absolute;
    top: 76%;
    left: 5%;
    color: black;
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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <!-- <ul>
            <li><a href="#signin">Sign In</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about" class="active">About</a></li>
            <li><a href="#home">Home</a></li>
           
        </ul> -->
  <div class="topnav">
    <div class="topnav-nav" id="myTopnav">
      <span class="menu"><a href="#signin">Sign In</a>
        <a href="#contact">Contact</a>
        <a href="#about" class="active">About</a>
        <a href="#home">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </span>
      <span class="logo"><a class="navbar-brand" href="#">
          <img src="images/bmsLogo.png" alt="logo" style="width:153px;height: 93px;">
        </a></span>
    </div>


  </div>
  <!-- <a href="#index.html" class="logo-onClick">
            <img id="logoImage" src="images/bmsLogo.png" alt="BMS logo" width="153px" height="93px">
        </a> -->


  <div class="about-bms-top">
    <img src="images/about1.jpg" alt="meeting" width="450px" height="740px">
    <div class="about-bms-top-text">
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
  <div class="second-sec">
    <p>OUR MODULES</p>
    <p id="second-subtitle">Bill My School is a simple and efficient way to manage complete school fees, manage attendance and maintain exam records with customizations suited to your school.</p>
    <img src="images/fee.png" alt="">
    <img src="images/attendance.png" alt="">
    <img src="images/test.png" alt="">
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