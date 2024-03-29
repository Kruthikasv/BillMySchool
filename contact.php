<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <title>Contact-BillMySchool</title>
</head>

<body>
  <section class="top-nav" id="top-nav">

    <nav class="navbar navbar-expand-lg navbar-dark">
      <strong><a class="navbar-brand" href="" style="text-shadow: 1px 1px black; color:rgb(40, 21, 8);">Bill my $chool</a></strong>

      <div class="topnav">
        <div class=navbar-nav ml-auto id="myTopnav">


          <span class="menu" class="nav-item">

            <a href="index.php" class="nav-item" style="padding:10px 8px;color: #111;">Home</a>
            <a href="contact.php" class="nav-item" style="padding:10px 8px;">Contact</a>
            <a href="login.php" class="nav-item" style="padding:10px 8px; text-decoration:none;">Login/Sign-Up</a>
            </a>
          </span>
    </nav>
  </section>
  <section class="top-container">
    <h1>CONTACT US</h1>
    <h3>Give us your Details, We will come to your Organization to give a live demo on billmyschool.com</h3>
  </section>

  <section class="contact-form">
        <form method="post" action="contact.php">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name" name="username">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your email" name="email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject" name="subject">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Message" name="message"></textarea>
          </div>
          <input type="submit" name="submit" value="Send Message">
        </form>
</section>

  <footer>
    <p>Copyright ©2021 All rights reserved | This template is made with by Rapsol Technologies Private Limited</p>
    <section class="icons">
      <i class="bi bi-twitter"></i>
      <i class="bi bi-facebook"></i>
      <i class="bi bi-instagram"></i>
    </section>
  </footer>

  <script src="./js/index.js" charset="utf-8"></script>
  <?php
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $con = mysqli_connect("localhost","root","","db_sams");
    if(isset($_POST['submit'])){
      $name= $_POST['username'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $sql = "INSERT INTO comments(name,email,subject,message) values('$name', '$email', '$subject', '$message')";
      if(!mysqli_query($con,$sql))
      {
        die('Error: ' . mysqli_error($con));
      }
      header("Location:contact.php");
}
mysqli_close($con);
}
?>
</body>

</html>