<?php
session_start();
require_once "connect.php";

if (isset($_POST['user_id'], $_POST['date'], $_POST['status'])) {
    $user_id = $_POST['user_id'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO attendance (user_id, date, status) VALUES ('$user_id', '$date', '$status')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['prompt'] = "Attendance added successfully.";
    } else {
        $_SESSION['prompt'] = "Error adding attendance: " . mysqli_error($conn);
    }
}

header("Location: admin_add_attendance.php");
exit();
?>
