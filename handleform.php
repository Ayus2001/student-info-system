<?php
include 'db.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$sql = "INSERT INTO students (firstname, lastname) VALUES ('$firstname', '$lastname')";

if ($conn->query($sql) === TRUE) {
    header('Location: dashboard.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>