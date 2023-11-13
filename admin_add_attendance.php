<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php"); // Redirect to admin login page if not logged in
    exit();
}

// Include necessary files and perform admin-specific operations
require_once "connect.php";

// Fetch user data for dropdown options
$user_query = "SELECT * FROM students";
$user_result = mysqli_query($conn, $user_query);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Attendance</title>
</head>
<body>
    <h1>Add Attendance</h1>
    <form action="process_add_attendance.php" method="post">
        <label for="user_id">Select User:</label>
        <select id="user_id" name="user_id">
            <?php
            while ($user_row = mysqli_fetch_assoc($user_result)) {
                echo "<option value='".$user_row['id']."'>".$user_row['firstname']." ".$user_row['lastname']."</option>";
            }
            ?>
        </select><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Present">Present</option>
            <option value="Absent">Absent</option>
            <option value="Late">Late</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
    <a href="admin_panel.php">Go back to Dashboard</a>
</body>
</html>
