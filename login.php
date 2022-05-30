<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      height: 100%;
      margin: 0;
      background-color: bisque;
    }

    * {
      box-sizing: border-box;
    }

    .container {


      width: 30%;
      height: 585px;
      background-color: #6b3b0b;
      margin: 0 auto;
      border: 2px solid #fff;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .5);
    }


    input {
      width: 90%;
      padding: 15px;
      border: none;
      border-radius: 7px;
      margin-left: 25px;
      opacity: 0.85;
      display: inline-block;
      font-size: 17px;
      line-height: 20px;
      text-decoration: none;
      /* remove underline from anchors */
    }


    input:hover,
    .btn:hover {
      opacity: 1;
    }

    .submit {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
      width: 20%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      margin-top: 7px;
      padding: 10px;
      font-size: 23px;
    }

    .submit:hover {
      background-color: black;
      color: white;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .fb {
      background-color: #3B5998;
      color: white;
      padding: 15px;
      border-radius: 5px;
      font-size: 17px;
      float: left;
      margin-top: 40px;
      text-decoration: none;
    }

    .google {
      background-color: #dd4b39;
      color: white;
      padding: 15px;
      border-radius: 5px;
      float: right;
      margin-top: 40px;
      text-decoration: none;
    }

    .col {

      width: 100%;
      margin: auto;
      padding: 0 50px;
      margin-top: 6px;
      background: lightblue;
    }

    span {
      vertical-align: middle;
      display: table;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 17px;
      padding-top: 35px;
      font-style: Arial;

    }

    .signup {
      font-size: 20px;
      padding: 15px;
      text-align: center;
    }


    .tablink {
      background-color: #333;
      color: white;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 19px 16px;
      font-size: 22px;
      width: 33.333%;
      margin-top: 0px;
      font-weight: bold;


    }

    .tablink:hover {
      background-color: #777;
    }

    .tabcontent {
      color: white;
      display: none;
      padding: 100px 20px;
      height: 100%;

    }

    #Patient {
      background-color: bisque;
    }

    #Doctor {
      background-color: bisque;
    }

    #Hospital {
      background-color: bisque;
    }
  </style>




  <title></title>
</head>

<body>



  <button class="tablink" onclick="openPage('Pateint', this, '#6b3b0b')" id="defaultOpen">Admin</button>
  <button class="tablink" onclick="openPage('Doctor', this, '#6b3b0b')">School</button>
  <button class="tablink" onclick="openPage('Hospital', this, '#6b3b0b')">Student/ Parent</button>


  <div id="Pateint" class="tabcontent">
    <div class="container">
      <form>
        <h2 style="text-align:center">Admin Login</h2>
        <div class="imgcontainer">
          <img src="images\login-headshot.png" alt="Avatar" class="avatar">
        </div>
        <input type="text" name="username" placeholder="Email id"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>
        <button type="submit" name="submit" class="submit" onclick="alert(' You have signed in successfully!')">Submit</button>

        <br><br>

      </form>
    </div>
  </div>
  </div>
  <div id="Doctor" class="tabcontent">
    <div class="container">
      <!-- <form action="alert(" You have signed in successfully!");" method="post"> -->
      <form action="validate_school.php" method="post">
        <h2 style="text-align:center">School Login </h2>
        <div class="imgcontainer">
          <img src="images\login-headshot.png" alt="Avatar" class="avatar">
        </div>
        <input type="text" name="username" placeholder="Email id"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>
        <button type="submit" name="submit" class="submit">Submit</button>

        <br><br>
        <div class="signup"> Not a registered user? <a href="signup_school.php">Click here</a> to signup.<br><br>
      </form>
    </div>
  </div>
  </div>
  <div id="Hospital" class="tabcontent">
    <div class="container">
      <form>
        <h2 style="text-align:center">Student/ Parent Login </h2>
        <div class="imgcontainer">
          <img src="images\login-headshot.png" alt="Avatar" class="avatar">
        </div>
        <input type="text" name="username" placeholder="Email id"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>
        <button type="submit" name="submit" class="submit" onclick="alert(' You have signed in successfully!')">Submit</button>

        <br><br>
        <div class="signup"> Not a registered user? <a href="signup_parent.php">Click here</a> to signup.<br><br>
      </form>
    </div>
  </div>

  </div>

  <script>
    function openPage(pageName, elmnt, color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>

</body>

</html>