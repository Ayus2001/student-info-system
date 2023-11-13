<?php
session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Insert the notice into the database (adjust the SQL query based on your database structure)
    $sql = "INSERT INTO notices (title, content) VALUES ('$title', '$content')";
    if (mysqli_query($conn, $sql)) {
        echo "Notice added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<!-- user_dashboard.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>

<h2>Welcome, User!</h2>

<!-- View Notices Link -->
<a href="view_notices.php">View Notices</a>

<!-- Other User Dashboard Content -->

</body>
</html>