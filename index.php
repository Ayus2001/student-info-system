<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_POST['login'])) {

    $uname = clean($_POST['username']);
    $pword = clean($_POST['password']);  

    $query = "SELECT * FROM students WHERE username = '$uname' AND password = '$pword'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);

      $_SESSION['userid'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];

      header("location:profile.php");
      exit;

    } else {

      $_SESSION['errprompt'] = "Wrong username or password.";
      $_SESSION['errprompt'] = "INVALID CREDENTIAL!.";

    }

    

// Redirect the user to the appropriate page


  }

  if(!isset($_SESSION['username'], $_SESSION['password'])) {

?>




<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <video autoplay muted loop id="bg-video">
  <source src="osims.mp4" type="video/mp4">
    <source src="file:///D:/New%20folder%20(3)/osims.mp4.mp4" type="video/mp4"> -->
    
    <!-- Add additional source elements for other formats if needed -->


	<!--h1>Login - Online Student Information Management System</h1-->
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style.css"rel="stylesheet">
  <link href="assets/css/styles.css"rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    


    <!-- <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            font-family: 'Arial', sans-serif; /* Change the font if desired */
            color: #333; /* Default text color */
        }

        .center-text {
            background-color: #ffffff; /* White background for the content section */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }

        .login-form {
            background-color: #f0f0f0; /* Light gray background for the login form */
            padding: 20px;
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #007bff; /* Blue color for the primary button */
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Add more styles as needed */
    </style> -->
</head>
<body>


<!-- <video autoplay muted loop id="bg-video">
    <source src="file:///D:/New%20folder%20(3)/osims.mp4.mp4" type="video/mp4">
    
    < Add additional source elements for other formats if needed -->



  <?php include 'header.php'; ?>

  <section class="center-text">
    
    <!-- <strong>LOG IN</strong> -->
    


    
    <div class="login-form box-center">
      <?php 

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }

        if(isset($_SESSION['errprompt'])) {
          showError();
        }

      ?>
      
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
        <div class="form-group">
          <label for="username" class="sr-only">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
        </div>

        <div class="form-group">
          <label for="password" class="sr-only">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        
        <a href="register.php">Create Account?</a>
        <input class="btn btn-primary" type="submit" name="login" value="Log In">

        <a href="admin_login.php">|Admin LogIn</a>
       
        

      </form>
    </div>

  </section>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <video autoplay muted loop id="bg-video">
    <source src="assets/img/osims.mp4" type="video/mp4">
    <title>online Student Information Management System</title>
    <!-- <video autoplay muted loop id="bg-video">
    <source src="assets/img/osims.mp4.mp4" type="video/mp4"> -->
    <!-- Add additional source elements for other formats if needed -->
</video>

    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            font-family: 'Arial', sans-serif; /* Change the font if desired */
            color: #333; /* Default text color */
        }

        .center-text {
            background-color: ##ee82ee; /* White background for the content section */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }

        <-- .login-form {
            background-color: ##fff2b8; /* Light gray background for the login form */
            padding: 20px;
            border-radius: 20px;
            position: absolute;
            bottom: 30;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff2b8; /* Light gray background for the login form */
            padding: 20px;
            border-radius: 10px;

        }

        .btn-primary {
            background-color: #007bff; /* Blue color for the primary button */
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Add more styles as needed */
    </style> 






  </head>
<body>





    <!--h1>Welcome to the Student Information System Dashboard</h1>
    <a href="add_student.php">Add New Student</a>
</body>
</html>
<?php

  } else {
    header("location:profile.php");
    exit;
  }

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);

  mysqli_close($con);

?>