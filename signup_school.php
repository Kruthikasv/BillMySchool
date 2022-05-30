<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign-up Page</title>

</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: bisque;
        background-size: cover;
        font-family: Arial, Helvetica, sans-serif;
    }

    .title {
        text-align: center;
        padding: 25px 10px 25px;
    }

    .title h1 {
        margin: 0;
        padding: 40;
        color: black;
        text-transform: uppercase;
        font-size: 36px;
    }

    .container {
        width: 30%;
        height: 525px;
        background-color: #6b3b0b;
        margin: 0 auto;
        border: 2px solid #fff;
        box-shadow: 0 20px 40px rgba(0, 0, 0, .5);
    }

    .formBox {
        width: 100%;
        padding: 30px 40px;
        box-sizing: border-box;
        height: 400px;

    }

    .formBox label {
        margin: 0;
        padding: 0;
        font-size: 15px;
        font-weight: bold;
        color: black;

    }

    .formBox input {
        width: 100%;
        margin-bottom: 12px;
    }

    .formBox input[type="text"],
    .formBox input[type="Password"],
    .formBox input[type="tel"] {
        border: none;
        border-bottom: 2px solid white;
        outline: none;
        height: 20px;
        border-radius: 5px;
        background-color: bisque;
    }

    .formBox input[type="text"]:focus,
    .formBox input[type="Password"]:focus,
    .formBox input[type="tel"]:focus {
        border-bottom: 2px solid rgb(3, 5, 10);
        background-color: bisque;
    }

    .formBox input[type="checkbox"] {
        width: auto;
    }

    .formBox .remember_me {
        display: flex;
        flex-direction: row;
    }

    .submit {
        border: none;
        outline: none;
        height: 40px;
        width: 100px;
        color: #fff;
        background: #262626;
        cursor: pointer;
        border-radius: 5px;
        margin: 5%;
        font-size: 20px;
    }

    .submit:hover {
        background: rgb(89, 141, 201);
    }

    .formBox .signupbutton {
        display: flex;
        flex: 1;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <div class="title">
        <h1>Sign Up as School</h1>
    </div>
    <div class="container">
        <div class="formBox">
            <form method="post" action="">
                <label style="color:white;">School name:</label>
                <input type="text" name="Name" placeholder="Type your name" required>
                <label style="color:white;">Username</label>
                <input type="text" name="Username" placeholder="Type your Username" required>
                <label style="color:white;">Branch</label>
                <input type="text" name="branch" placeholder="Type your branch name" required>
                <label style="color:white;">Contact Number</label>
                <input type="tel" name="PhNo" placeholder="Enter your contact number" required>
                <label style="color:white;">City</label>
                <input type="text" name="city" placeholder="Type yourcity name" required>
                <label style="color:white;">Password</label>
                <input type="Password" id="inputPassword4" name="pswd" placeholder="Enter a password of 8 characters" required>
                <input type="checkbox" class="form-check-input" onclick="showPassword()"><label style="color:white;">Show passsword</label>
                <div class="remember_me">
                    <input type="checkbox" id="remember_me" name="remember_me" value="checked">
                    <label for="remember_me" style="color:white;"> Remember me</label><br>
                </div>
                <div class="signupbutton">
                    <button type="submit" name="submitpost" class="submit">Sign Up</button>
                    <button type="submit" name="" class="submit"><a href="login.php" style="text-decoration:none;color:white;">Go Back</a></button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
<script>
    function showPassword() {
        var passwordElement = document.getElementById("inputPassword4");
        if (passwordElement.type === "password") {
            passwordElement.type = "text";
        } else {
            passwordElement.type = "password";
        }
    }
</script>

<?php

$con = mysqli_connect("localhost", "root", "", "db_sams");

// if (!$con) {
//     die("Could not connect " . mysqli_error($con));
// }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submitpost'])) {
        $sql = "INSERT INTO schools (Name,UserName,Branch,Contact_no,City,passwd) VALUES('$_POST[Name]', '$_POST[Username]',
       '$_POST[branch]', '$_POST[PhNo]', '$_POST[city]', '$_POST[pswd]')";

        if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        }

        echo "<script>alert('Thank you for Signing Up. Click OK to continue');</script>";
        
    }
}

mysqli_close($con);

?>

</html>