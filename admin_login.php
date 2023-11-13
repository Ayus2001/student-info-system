<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
   
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

        .login-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
        }

        .login-box h1 {
            margin-top: 0; /* Add this line to adjust the margin */
        }

        .login-box label,
        .login-box input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .login-box input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-box input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .login-box input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    
</head>
<body>
    <div class="login-box">
        <h1>Admin Login</h1>
        <form action="admin_dashboard.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
        <a href="profile.php">Go back to User Dashboard</a>
    </div>
</body>
</html>
