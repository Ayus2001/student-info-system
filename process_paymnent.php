<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paymentType = $_POST['select'];
    $amount = $_POST['Amount'];
    $cardNumber = $_POST['card_number'];
    $expiryDate = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Here, you would integrate with a payment gateway to process the payment.
    // For example, using PayPal SDK or Stripe API.

    // Once the payment is processed successfully, you can update the user's payment status and course enrollment in the database.

    // For this example, let's assume the payment was successful.
    $paymentStatus = 'Success';

    // Update payment status in the database (replace with your database logic)
    // Assuming you have a database connection established
    // and a table named `payments` with columns `user_id`, `payment_type`, `amount`, and `status`

    $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $userId = $_SESSION['userid']; // Assuming you have stored user ID in the session
    $sql = "INSERT INTO payments (user_id, payment_type, amount, status)
            VALUES ('$userId', '$paymentType', '$amount', '$paymentStatus')";

    if (mysqli_query($conn, $sql)) {
        echo "Payment recorded successfully.";
    } else {
        echo "Error updating payment status: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Redirect the user to a payment confirmation page
    header("Location: payment_confirmation.php");
    exit();
} else {
    header("Location: payment.php");
    exit();
}
?>
