<?php
session_start();
require_once "connect.php";

// Fetch notices from the database in descending order by notice ID (assuming notice ID is a unique identifier)
$sql = "SELECT * FROM notices ORDER BY id DESC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notices</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Notices</h2>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td><strong>" . $row['title'] . "</strong></td>";
            echo "<td>" . $row['content'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<!-- Link to user dashboard -->
<a href="profile.php">Go back to User Dashboard</a>

</body>
</html>
