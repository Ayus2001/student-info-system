<?php
session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate username and password against the database
    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Admin login successful
        $_SESSION["username"] = $username;
        header("Location: admin_panel.php"); // Redirect to admin panel
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
