<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

require_once "connect.php";

// Fetch attendance data for the logged-in user
$username = $_SESSION["username"];
$sql = "SELECT * FROM attendance WHERE user_id = (SELECT id FROM students WHERE username = ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Attendance</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming you have a CSS file for styling -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>View Attendance</h1>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>Date</th>
                <th>Status</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No attendance records found.</p>
    <?php endif; ?>

    <a href="profile.php">Go back to Dashboard</a>
</body>
</html>
