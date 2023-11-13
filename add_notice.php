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




<!-- add_notice.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notice</title>
</head>
<body>
    <h1>Add Notice</h1>
    <form action="process_add_notice.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="5" cols="40" required></textarea><br><br>
        
        <input type="submit" value="Publish Notice">
    </form>
</body>
</html>
