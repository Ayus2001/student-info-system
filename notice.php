<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notices</title>
</head>
<body>

<h1>Notices</h1>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notices</title>
</head>
<body>

<h1>Notices</h1>

<!-- Display existing notices -->
<?php
// Sample array of notices
$notices = [
    [
        'title' => 'Important Notice',
        'content' => 'You need to submit your prototype by 10/11/23.'
    ],
    [
        'title' => 'Upcoming Event',
        'content' => 'The institute will remain close from 10/11/23 till 25/11/23.'
    ],
];

foreach ($notices as $notice) {
    echo '<div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">';
    echo '<h2>' . $notice['title'] . '</h2>';
    echo '<p>' . $notice['content'] . '</p>';
    echo '</div>';
}
?>

<!-- Form for admin to add notices -->
<h2>Add Notice</h2>
<form action="add_notice.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title"><br><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

