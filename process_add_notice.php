<?php
session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Insert notice into the database
    $sql = "INSERT INTO notices (title, content) VALUES ('$title', '$content')";
    mysqli_query($conn, $sql);

    $_SESSION["success_message"] = "Notice published successfully.";
    header("Location: admin_panel.php");
    exit();
}
?>
