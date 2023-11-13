


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Fee Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .payment-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .payment-box h1 {
            text-align: center;
        }

        .payment-box label,
        .payment-box input,
        .payment-box select {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .payment-box input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .payment-box select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            height: 40px;
        }

        .payment-box input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .payment-box input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="payment-box">
        <h1>Fee Payment</h1>
        <form action="process_payment.php" method="post">
            <label for="select">Select Payment Type:</label>
            <select id="select" name="select">
                <option value="course1">Course Payment</option>
                <option value="course2">Bus Fee Payment</option>
                <option value="course3">Library Fee Payment</option> 
                <!-- Add more options as needed -->
            </select>
            <label for="Amount">Enter Amount:</label>
            <input type="text" id="Amount" name="Amount" required>
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>
            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date" required placeholder="MM/YY">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
            <input type="submit" value="Pay Now">
            
        </form>

        <a href="profile.php">Go back to User Dashboard</a>
    </div>
</body>
</html>
