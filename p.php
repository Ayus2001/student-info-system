<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Profile - Online Student Information management System</title>
  

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>









<!-- <?php
session_start();

require 'connect.php';
require 'functions.php';

$username = "uname"; // Replace with your MySQL username
$password = "pword"; // Replace with your MySQL password
$dbname = "studentinfosystem";

$conn = new mysqli( $conn, $querry);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> -->





<?php require 'partials/navbar.php' ?>
<?php require 'partials/drop.php' ?>
  <?php include 'header.php'; ?>

  <section>

    <div class="container">
      <strong class="title">My Profile</strong>
      
    </div>
    
    
    <div class="profile-box box-left">
 
      <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }


        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";

        ;

        if($result = mysqli_query($conn, $query)) {

          $row = mysqli_fetch_assoc($result);

          echo "<div class='info'><strong>Student No:</strong> <span>".$row['studentno']."</span></div>";
          echo "<div class='info'><strong>Student Name:</strong> <span>".$row['firstname'].", ".$row['lastname']."</span></div>";
          echo "<div class='info'><strong>Course:</strong> <span>".$row['course']."</span></div>";
          echo "<div class='info'><strong>Year Level:</strong> <span>".$row['yrlevel']."</span></div>";

          $query_date = "SELECT DATE_FORMAT(date_joined, '%m/%d/%Y') FROM students WHERE id = '".$_SESSION['userid']."'";
          $result = mysqli_query($conn, $query_date);

          $row = mysqli_fetch_row($result);

          echo "<div class='info'><strong>Date Joined:</strong> <span>".$row[0]."</span></div>";

        } else {

          die("Error with the query in the database");

        }

      ?>
      
      <div class="options">
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
        <a class="btn btn-success" href="changepassword.php">Change Password</a>
        
      </div>

      
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php


  } else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($conn);

?>