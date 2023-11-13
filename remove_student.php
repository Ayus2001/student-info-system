<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php"); // Redirect to admin login page if not logged in
    exit();
}

require_once "connect.php";

// Handle actions (suspend or renew)
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];

    if ($action == 'suspend') {
        // Update the user status to 'suspended' in the database
        $updateSql = "UPDATE students SET status = 'suspended' WHERE id = $id";
        mysqli_query($conn, $updateSql);
    } elseif ($action == 'renew') {
        // Update the user status to 'active' in the database
        $updateSql = "UPDATE students SET status = 'active' WHERE id = $id";
        mysqli_query($conn, $updateSql);
    }
}

// Fetch and display database content
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Add your styles here */
    </style>
</head>

<body>

    <!-- <h1>Welcome, <?php echo $_SESSION["username"]; ?></h1> -->

    <!-- Add a logout link -->
    <a href="alogout.php">Logout</a>
    <a href="admin_panel.php">|Dashboard</a>

    <h2>Database Content</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Status</th>
            <!-- Add other table headers as needed -->
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
           
            // Add other table cells as needed
            echo "<td><a href='remove_student.php?id=" . $row['id'] . "'>Remove</a> | ";
            echo "<a href='admin_panel.php?action=suspend&id=" . $row['id'] . "'>Suspend</a> | ";
            echo "<a href='admin_panel.php?action=renew&id=" . $row['id'] . "'>Renew</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>
