<?php
session_start();
  if(isset($_POST['submit'])){
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"db_sams");
      $query = "SELECT * FROM parents WHERE username = '$_POST[username]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
          if($row['username'] == $_POST['username']){
              if($row['passwd'] == $_POST['pwd']){
                //   $_SESSION['Name'] = $row['Name'];
                  $_SESSION['username'] = $row['username'];
                  $_SESSION['Id'] = $row['ID'];
                  header("Location:./attendance/index.php");
              }
              else{
                  echo "<script>alert('Wrong Password...');</script>";
              }
          }
      }
  }
?>
