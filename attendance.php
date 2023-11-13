<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Attendance</title>
</head>
<body>

<h1>View Attendance</h1>

<?php
// Sample attendance records
$attendance = [
    [
        'date' => '2023-11-01',
        'name' => 'John Doe',
        'status' => 'Present'
    ],
    [
        'date' => '2023-11-02',
        'name' => 'Jane Doe',
        'status' => 'Absent'
    ],
    [
        'date' => '2023-11-03',
        'name' => 'Jim Smith',
        'status' => 'Present'
    ]
];

// Display attendance records in a table
echo '<table border="1">';
echo '<tr><th>Date</th><th>Name</th><th>Status</th></tr>';

foreach ($attendance as $record) {
    echo '<tr>';
    echo '<td>' . $record['date'] . '</td>';
    echo '<td>' . $record['name'] . '</td>';
    echo '<td>' . $record['status'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
