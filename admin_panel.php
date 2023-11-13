<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php"); // Redirect to admin login page if not logged in
    exit();
}

// Include necessary files and perform admin-specific operations
require_once "connect.php";

// Fetch and display database content
$sql = "SELECT * FROM students"; // Modify this query based on your database structure
$result = mysqli_query($conn, $sql);
?>


<!-- admin_panel.php -->


<!-- <h1>Welcome, <?php echo $_SESSION["username"]; ?></h1> -->

<!-- Add a logout link -->
<a href="alogout.php">Logout</a>
<style>
    .logout-btn:hover {
    background-color: rgb(26, 55, 95); /* Darker green on hover */
}
<h2>Database Content</h2>
<table border="1">
    <!-- Table content goes here -->
</table>

<!-- Add notice button -->
<a href="add_notice.php" class="add-notice-btn">Add Notice</a>

<!-- Rest of your admin panel content --

<!-- HTML content for admin panel -->

<!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->

<<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!--<link rel="stylesheet" type="text/css" href="styles.css">-->
</head>
<style>
    /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4; /* Light grey background */

}

table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ccc;
}

table, th, td {
    border: 1px solid rgb(131, 94, 94);
    border: 1px solid #ccc;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #ddd;
}

h1, h2 {
    text-align: center;
    color: #333; /* Dark text color */
}

.logout-btn {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
}


</style>


<body>

<tittle></tittle>
<a href="add_notice.php" class="add-notice-btn">| Add Notice</a>

<!-- <a href="add_notice.php" class="add-attendance-btn">| Add attendance</a> -->

<a href="admin_add_attendance.php" class="add-attendance-btn">| Add Attendance</a>

<a href="remove_student.php" class="add-remove-btn">| Remove Student</a>


<!-- <form action="process_add_notice.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br><br>
    
    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="5" cols="40" required></textarea><br><br>
    
    <input type="submit" value="Publish Notice">
</form> -->


<h3>Database Content</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Student Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Course</th>
        <th>Year Level</th>
        <th>Date Joined</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['studentno'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "<td>" . $row['yrlevel'] . "</td>";
        echo "<td>" . $row['date_joined'] . "</td>";
        echo "</tr>";
    }
    ?>

   
</form>






</table>
