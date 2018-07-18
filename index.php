<?php include("./config/db.php") ?>
<?php include ("./login/admin_scripts.php") ?>

<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>

    <h2>ADMINISTRATOR</h2>

    <form action="" method="post" class=".form=horizontal">

        <?php echo $error1 ?>

        <div class="imgcontainer">
            <img src="./images/admin.png" alt="Avatar" class="avatar">
        </div>

        <div class="loggin">
            <label for=""><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
        </div>

        <div class="loggin">
            <label for=""><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        </div>

        <div class="loggin">
            <button type="submit" name="login" id="login">Login</button>
            <label>
      <span class="psw"><a href="#"> Forgot password?</a></span>
    </label>
        </div>


    </form>

</body>

</html>
